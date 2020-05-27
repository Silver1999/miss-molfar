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
        ]);
        if ($validation->passes()) {
            $names=array();
            $images = $request->file('a_file');
            if (count($images)>2 or count($images)<=1){
                return response()->json([
                    'message' => $validation->errors()->all(),
                    'uploaded_image' => '',
                    'class_name' => 'alert-danger'

                ]);
                die();
            }
            foreach ($images as $image) {
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(storage_path(), $new_name);
                array_push($names,$new_name);

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
                'message' => 'Image Upload Successfully',
                'uploaded_image' => '<img src="/images/' . $new_name . '" class="img-thumbnail" width="300" />',
                'class_name' => 'alert-success'
            ]);

        } else {
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name' => 'alert-danger'
            ]);
        }
    }
}
