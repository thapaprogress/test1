<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Notice;

use App\NoticeDescription;

use \File;

class AddNoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $notice = Notice::orderBy('id', 'desc')->paginate(10);
      return view('addnotices.index')->withNotices($notice);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addnotices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(request('title') == '')
      {
        $description = new NoticeDescription();
        $description->body = request('body');
        $description->notice_id= request('notice_id');
        $description->save();
        return redirect()->route('addnotices.show', $description->notice_id);
      }
      else
      {
        $notice = new Notice();
        $notice->title = request('title');
        if ($request->hasFile('img'))
        {
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name);
            $notice->img = $name;

        }
        $notice->save();

        return redirect()->route('addnotices.show', $notice->id);


      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $notices = Notice::find($id);
      $descriptions =NoticeDescription::all();
      return view('addnotices.show',['notice'=>$notices, 'descriptions'=>$descriptions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $description = NoticeDescription::find($id);
      return view('addnotices.edit',[ 'description'=>$description]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if ($request->hasFile('img'))
      {
          $notice = Notice::find($id);
          $path ='images/'.$notice->img;
          $image_path = public_path($path);
          if(File::exists($image_path))
          {
            File::delete($image_path);
          }
          $image = $request->file('img');
          $name = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('images');

          $image->move($destinationPath, $name);
          $notice->img = $name;
          $notice->save();
          return redirect()->route('addnotices.show', $notice->id);

      }
      if(request('title') == '')
      {
        $description =NoticeDescription::find($id);
        $description->body = $request->body;
        $description->save();
        return redirect()->route('addnotices.show', $description->notice_id);
      }
      else
      {
        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->save();
        return redirect()->route('addnotices.show', $notice->id);


      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $description =NoticeDescription::find($id);
        $description->delete();
        return redirect()->route('addnotices.show', $description->notice_id);
    }

    public function delete($id)
    {
      $notice = Notice::find($id);
      $path ='images/'.$notice->img;
      $image_path = public_path($path);
      if(File::exists($image_path))
      {
        File::delete($image_path);
      }
      $notice->delete();
      return redirect()->route('addnotices.index');
    }
}
