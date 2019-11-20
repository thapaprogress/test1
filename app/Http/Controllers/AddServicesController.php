<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

use App\Description;

use \File;

class AddServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $service = Service::orderBy('id', 'desc')->paginate(10);
      return view('addservices.index')->withServices($service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addservices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $name = request('title');


      if(request('title') == '')
      {
        $description = new Description();
        $description->body = request('body');
        $description->service_id= request('service_id');
        $description->save();
        return redirect()->route('addservices.show', $description->service_id);

      }
      else
      {

        $service = new Service();
        $service->title = request('title');
        if ($request->hasFile('img'))
        {
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name);
            $service->img = $name;

        }
        $service->save();
        return redirect()->route('addservices.show', $service->id);
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
        $services = Service::find($id);
        $descriptions = Description::all();
        return view('addservices.show',['service'=>$services, 'descriptions'=>$descriptions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      $description = Description::find($id);
      return view('addservices.edit',[ 'description'=>$description]);
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
          $service = Service::find($id);
          $path ='images/'.$service->img;
          $image_path = public_path($path);
          if(File::exists($image_path))
          {
            File::delete($image_path);
          }
          $image = $request->file('img');
          $name = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('images');

          $image->move($destinationPath, $name);
          $service->img = $name;
          $service->save();
          return redirect()->route('addservices.show', $service->id);

      }
      if(request('title') == '')
      {
        $description =Description::find($id);
        $description->body = $request->body;
        $description->save();
        return redirect()->route('addservices.show', $description->service_id);
      }
      else
      {
        $service = Service::find($id);
        $service->title = $request->title;
        $service->save();
        return redirect()->route('addservices.show', $service->id);


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
      $description =Description::find($id);
      $description->delete();
      return redirect()->route('addservices.show', $description->service_id);
    }

    public function delete($id)
    {
      $service = Service::find($id);
      $path ='images/'.$service->img;
      $image_path = public_path($path);
      if(File::exists($image_path))
      {
        File::delete($image_path);
      }
      $service->delete();
      return redirect()->route('addservices.index');
    }
}
