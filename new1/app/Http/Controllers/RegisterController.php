<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Mail\ProjectCreated;
use App\Mail\NewRegistration;

class RegisterController extends Controller
{
	public function index()
	{
		$projects=Project::all();
		//return $projects;
		 return view('welcome');
	}
    public function create()
	{
		$qualif=['X','XII','BA','BSc','BE/BTech','MA','MSc','ME/MTech'];
    	return view('projects.create',[
    		'qualif'=>$qualif
    	]);
	}
	public function store()
	{
		//return request()->all();
		$validator=request()->validate([
			'name'=>'required|min:2',
			'email'=>'required|email:rfc,dns|unique:projects',
			'mobile'=>'required|regex:/[0-9]{10}/|max:10',
			'gender'=>'required',
			'qualification'=>'required',
			'address'=>'required'
		]);
		
		$projects=Project::create(['name'=>request('name'),'email'=>request('email'),'mobile'=>request('mobile'),'gender'=>request('gender'),'qualification'=>request('qualification'),'address'=>request('address')]);
            $mail=request('email');
			\Mail::to($mail)->send(new ProjectCreated($projects));
			\Mail::to('deepthiharidasan2019@gmail.com')->send(new NewRegistration($projects));
		    return view('projects.success');
		
		
	}
}
