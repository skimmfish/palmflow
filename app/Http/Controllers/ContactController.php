<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\ContactModel;
use Illuminate\Contracts\Validation\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		
		$rules =[
            'first_name'=>'required | min:3 | max:30',
			'last_name' => 'required | min:3 | max:30',
			'user__email' => 'required | email',
			'phone_number'=>'min:11|max:14',
			'message'=>'required',
			'issues_category'=>'required'
		];
		
		$messages = [
		'message'=>'You cannot leave this box empty',
		'required'=>'This field is required'
		];
		
		
		$faker = \Faker\Factory::create();

				
		$request->validate($rules);
		
		$contact = new ContactModel;
		
		$contact->first_name = $request->first_name;
		$contact->last_name = $request->last_name;
		$contact->user__email = $request->user__email;
		$contact->phone_number = $request->phone_number;
		$contact->issues_category = $request->issues_category;
		$contact->title = $request->issues_category;
		$contact->message = $request->message;
		$contact->ticket_id = $faker->numerify("#####-##-##");
		
		
		//saving the contact info in the contact_models table with an auto-generated response
		$contact->save();
		
		//session()->put('message','Thank you. Your request has been noted, Please check your e-mail for more information');
		
		return redirect()->route('contact-us')->with('message','Thank you. Your request has been noted, Please check your e-mail for more information');
		
    }
	
	
	public function autoGenerate($num_of_chars){
			
			return Str::random($numChar);
	
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
