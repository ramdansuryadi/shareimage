<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Input;
use App\User;
use Redirect;

class PageControllerUser extends Controller
{
    
    public function create()
    {
        //  setting validasi
        $validator = Validator::make(
            Input::all(),
            array(
               'name' => 'required',
               "email" => "required|email|unique:users,email",
               "checkbox" => 'required'
               )
            );
    //  if validation is true then save to  database, This Code is collect name and email address in the database
        if($validator->passes())
        {
            $user = new User;
            $user->name    = Input::get('name');
            $user->email   = Input::get('email');
            $user->save();
            return Redirect::to("gewinnspiel-formular")->with('success', true);
        }
    //  if not, then you can not participate again. if a user already participated once (email address already in the database), he can not participate again
        else
        {
           return Redirect::to("gewinnspiel-formular")->with('success', false)
            ->withErrors($validator)
            ->withInput();
        }

    }

   

}



