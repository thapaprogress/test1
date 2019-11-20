<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Notice;

use App\NoticeDescription;

class NoticesController extends Controller
{
  public function index()
  {
    $descriptions = NoticeDescription::all();
    $notices = Notice::all();
    return view('notices.index', ['notices' => $notices, 'descriptions' => $descriptions]);
  }
}
