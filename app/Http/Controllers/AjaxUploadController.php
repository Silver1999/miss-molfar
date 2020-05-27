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
            'a_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'a_file2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($validation->passes()) {
            $image = $request->file('a_file');
            $image2 = $request->file('a_file2');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
            $image->move(storage_path(), $new_name);
            $image2->move(storage_path(), $new_name2);
            $data = array(
                'email' => $request->email,
                'image' => $image,
                'new_name' => $new_name,
                'new_name2' => $new_name2,
            );
            Mail::to('web-tutorial@programmer.net')->send(new Homemail($data));
            unlink(storage_path("$new_name"));
            unlink(storage_path("$new_name2"));
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
