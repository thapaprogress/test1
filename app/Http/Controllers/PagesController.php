<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;
use App\Complain;
use App\Contact;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Alex';
		$last = 'Curtis';

		$fullname = $first . " " . $last;
		$email = 'alex@jacurtis.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function Complain() {
		return view('pages.complain');
	}

	public function RegisterComplain(Request $request)
	{
		$complain = new Complain();
		$complain->name = request('name');
		$complain->product = request('product');
		$complain->model = request('model');
		$complain->phone = request('phone');
		$complain->email = request('email');
		$complain->complain = request('complain');
		$complain->address = request('address');
		$complain->archived = 'N';
		$complain->save();
		$message='Complain Registered Successfully. We will reach you as soon as possible.';
		return view('pages.complain', ['message' => $message]);
	}





	public function postContact(Request $request) {

		$contact = new Contact();
		$contact->name = request('name');
		$contact->message = request('message');
		$contact->email = request('email');
		$contact->archived = 'N';
		$contact->save();
		$message=' We will reach you as soon as possible.';
		return view('pages.contact', ['message' => $message]);
	}


}
