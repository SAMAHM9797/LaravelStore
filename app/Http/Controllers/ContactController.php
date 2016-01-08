<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

	public function SubmitContactUsForm(){

        //Get all the data and store it inside Store Variable
		$data = Input::all();

        //Validation rules
		$rules = array (
			'name' => 'required', 
			'email' => 'required|email',
			'your_message' => 'required|min:5'
			);

        //Validate data
		$validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
		if ($validator -> passes()){
			try 
			{
				Mail::send('emails.feedback', $data, function ($m) use ($data)
				{
					$m->from('from@example.com', 'Example');               
					$m->to('test@example.com')->subject('feedback form');
				});
			}
			catch (Exception $e) {
				return Redirect::to('/contact-us')->withErrors('Sorry there was an error sending the message please try again');
			}
            // Redirect to page
			return Redirect::to('/')
			->with('message', 'Your message has been sent. Thank You!');
            //return View::make('contact');  
		}else{
   			//return contact form with errors
			return Redirect::to('/contact-us')->withErrors($validator->errors());

		}
	}
} 

