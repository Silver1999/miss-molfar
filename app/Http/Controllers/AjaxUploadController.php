<?php

namespace App\Http\Controllers;

use Faker\Provider\File;
use Validator;
use Illuminate\Http\Request;
use App\Mail\Homemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AjaxUploadController extends Controller
{
    function index()
    {
        return view('ajax_upload');
    }

    function action(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'firstname' => 'required',
            'lastname' => 'required',
            'birth-date' => 'required',
            'city' => 'required',
            'ig-link' => 'required',
            'tel' => 'required|numeric',
            'expirience' => 'required',
            'a_file' => 'required',
        ]);
        if ($validation->passes()) {
            $names = array();
            $extension = array("png", "jpg", "jpeg");
            $images = $request->file('a_file');
            if (count($images) > 2 or count($images) <= 1) {
                return response()->json([
                    'message' => 'Виберіть  будь ласка два зображення',
                    'class_name' => 'alert-danger'

                ]);
            }
            foreach ($images as $image) {
                if (in_array($image->getClientOriginalExtension(), $extension) == false) {
                    return response()->json([
                        'message' => 'Виберіть  будь ласка  зображення',
                        'class_name' => 'alert-danger'

                    ]);
                }

                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(storage_path(), $new_name);
                array_push($names, $new_name);

            }
            $data = array(
                'email' => $request->email,
                'image' => $image,
                'new_name1' => $names[0],
                'new_name2' => $names[1],
            );
            Mail::to('web-tutorial@programmer.net')->send(new Homemail($data));
            unlink(storage_path($data['new_name1']));
            unlink(storage_path($data['new_name2']));
            return response()->json([
                'message' => 'Success',
            ]);


        } else {
            return response()->json([
                'email' =>$validation->errors()->first('email'),
                'firstname' =>$validation->errors()->first('firstname'),
                'lastname' =>$validation->errors()->first('lastname'),
                'birthdate' =>$validation->errors()->first('birth-date'),
                'city' =>$validation->errors()->first('city'),
                'iglink' =>$validation->errors()->first('ig-link'),
                'tel' =>$validation->errors()->first('tel'),
                'expirience'=>$validation->errors()->first('expirience'),
                'file'  =>$validation->errors()->first('a_file'),
            ]);
        }
    }
}
