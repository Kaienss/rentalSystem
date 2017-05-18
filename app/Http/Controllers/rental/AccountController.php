<?php namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AccountController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('createAccount');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
				'userName' => 'required|unique:accounts|max:255',
				'password' => 'required',
				'firstName' => 'required',
				'lastName' => 'required',
				'email' => 'required|unique:accounts|max:255',
				'contact' => 'required',
				'city' => 'required',
				'postCode' => 'required',
		]);

		$account = new Account();
		$account->userName = Input::get('userName');
		$account->password = Input::get('password');
		$account->firstName=Input::get('firstName');
		$account->lastName=Input::get('lastName');
		$account->email=Input::get('email');
		$account->contact = Input::get('contact');
		$account->city = Input::get('city');
		$account->postCode = Input::get('postCode');

		$account->save();
		if ($account->save()) {
			return Redirect::to('home');
		} else {
			return Redirect::back()->withInput()->withErrors('Creation Failed！');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
