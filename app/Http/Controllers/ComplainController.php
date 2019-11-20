<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Complain;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {
         $this->middleware('auth');
     }
    public function index()
    {
      $complain = Complain::orderBy('id', 'desc')->paginate(10);
      return view('complain.index')->withComplains($complain);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      $complain = Complain::orderBy('id', 'desc')->paginate(10);
      return view('complain.archive')->withComplains($complain);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $complain = Complain::find($id);
      return view('complain.show')->withComplain($complain);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
          $complain = Complain::find($id);
          $complain->archived = $request->archived;
          $complain->save();
          if($request->archived == "Y")
          {
            return redirect()->route('complain.index');
          }
          else
          {
            return redirect()->route('complain.create');
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
      $complain = Complain::find($id);
      $complain->delete();
      return redirect()->route('complain.create');
    }
}
