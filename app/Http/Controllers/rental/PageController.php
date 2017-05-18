<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('createPage');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
				'title' => 'required|max:255',
				'location' => 'required','address' => 'required','postCode' => 'required','price' => 'required',
				'contactName' => 'required','contactNumber' => 'required','contactEmail' => 'required','type'=>'required',
			'rentalType'=>'required','numBathroom'=>'required','numRoom'=>'required',
		]);

		$page = new Page();
		$page->title = Input::get('title');
		$page->numBathroom = Input::get('numBathroom');
		$page->numRoom = Input::get('numRoom');
		$page->rentalType = Input::get('rentalType');
		$page->location = Input::get('location');
		$page->type = Input::get('type');
		$page->address=Input::get('address');
		$page->postCode=Input::get('postCode');
		$page->price=Input::get('price');
		$page->moveInDate = Input::get('moveInDate');
		$page->description = Input::get('description');
		$page->image = Input::get('image');
		$page->contactName = Input::get('contactName');
		$page->contactNumber = Input::get('contactNumber');
		$page->contactEmail = Input::get('contactEmail');
		$page->save();
		if ($page->save()) {
			return Redirect::to('home');
		} else {
			return Redirect::back()->withInput()->withErrors('Update Failed！');
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
		return view('home/pages/editPage')->withPage(Page::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$this->validate($request, [
				'title' => 'required|unique:pages|max:255',
				'location' => 'required','address' => 'required','postCode' => 'required','price' => 'required',
				'contactName' => 'required','contactNumber' => 'required','contactEmail' => 'required','type'=>'required',
				'rentalType'=>'required','numBathroom'=>'required','numRoom'=>'required',
		]);

		$page = Page::find($id);
		$page->title = Input::get('title');
		$page->numBathroom = Input::get('numBathroom');
		$page->numRoom = Input::get('numRoom');
		$page->rentalType = Input::get('rentalType');
		$page->location = Input::get('location');
		$page->type = Input::get('type');
		$page->address=Input::get('address');
		$page->postCode=Input::get('postCode');
		$page->price=Input::get('price');
		$page->moveInDate = Input::get('moveInDate');
		$page->description = Input::get('description');
		$page->image = Input::get('image');
		$page->contactName = Input::get('contactName');
		$page->contactNumber = Input::get('contactNumber');
		$page->contactEmail = Input::get('contactEmail');

		if ($page->save()) {
			return Redirect::to('home');
		} else {
			return Redirect::back()->withInput()->withErrors('Update failed！');
		}
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
