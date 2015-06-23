<?php namespace App\Http\Controllers;

use App\Http\Requests\PracticeFormRequest;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function showForm()
	{
		return view('getstarted');
	}

	public function postForm()
	{
		return redirect('form')->withInput();
	}

	public function showThanks()
	{
		return view('thanks');
	}

    public function showClothing()
    {
        return view('clothing');
    }

    public function showGifting()
    {
        return view('gifting');
    }

}
