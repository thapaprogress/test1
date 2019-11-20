<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

use App\Description;


class ServicesController extends Controller
{
    public function index()
    {

      $descriptions = Description::all();
      $services = Service::all();
      return view('services.index', ['services' => $services, 'descriptions' => $descriptions]);
    }
}
