<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;
use App\Image;


class PagesController extends Controller {

    public function getIndex()
    {
        return view('pages.welcome');
    }

     public function getContact()
    {
        return view('pages.contact');
    }
     public function getGallery()
     {
       $images = App\Image::all();
       return view('pages.gallery', compact('images'));
     }
     public function getPortfolio()
    {
        return view('pages.portfolio');
    }

    public function getTeam()
    {
        return view('pages.team');
    }

    public function getRonay()
    {
        return view('ronay.index');
    }

    public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'bericht' => 'min:10']);

        $data = array(
            'email' => $request->email,
            'naam' => $request->naam,
            'bericht' => $request->bericht
            );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('yarnobachmann@gmail.com');
	    $message->subject($data['email']);
        });

        Session::flash('success', 'Je email is gestuurd!');

        return redirect('/');

}
}
?>
