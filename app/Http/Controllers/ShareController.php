<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Input;
use File;
use Image;
use Response;
use Mail;
class ShareController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
// This is Code controller Share image via facebook

    public function upload() {
        $data = Input::all();
        $photofilepath=$data["base64_image"];
        list($type, $photofilepath) = explode(';', $photofilepath);
        list($asd , $photofilepath) = explode(',', $photofilepath);
        $photofilepath = base64_decode($photofilepath);
        list(,$type)  = explode('/',$type);
        $png_id = "badge-".time();
        $png_url = $png_id.".".$type;


        $path = public_path().'/uploadcanvas/' ;
        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $path = public_path() . "/uploadcanvas/" . $png_url;
        $upload_success = Image::make($photofilepath)->fit(300, 450)->save($path);
        $response= array('code' => 0 , );
        if ($upload_success) {
            $response['code']=1;
            $response['file']=url('uploadcanvas/' . $png_url);
            $response['url']=url('canvas-view/' . $png_id);
        }
        return Response::json( $response  );
    }

// This is Code controller Share image via email

    public function shareemail() {
        $data = Input::all();
        $photofilepath=$data["base64_image"];
        list($type, $photofilepath) = explode(';', $photofilepath);
        list($asd , $photofilepath) = explode(',', $photofilepath);
        $photofilepath = base64_decode($photofilepath);
        list(,$type)  = explode('/',$type);
        $png_url = "badge-".time().".".$type;
        $path = public_path().'/uploadcanvas/' ;
        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $path = public_path() . "/uploadcanvas/" . $png_url;
        $upload_success = Image::make($photofilepath)->fit(300, 450)->save($path);

        $subject = 'Share Badge';
        Mail::send('emails.welcome', ['data' => $data], function($message) use ($subject, $path, $data)
        {

            $message->from($data['email_sender']);
            $message->to($data['email_receiver'], $data['email_name'])->subject($subject);
            $message->attach($path);

        });

        $response= array('code' => 0 , );
        if ($upload_success) {
            $response['code']=1;
            $response['url']=url('gewinnspiel/' );
        }
        return Response::json( $response  );
    }


}
