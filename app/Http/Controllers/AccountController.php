<?php namespace App\Http\Controllers;


use App\Account;
use App\Page;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Redirect;

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
			$page = new Page();
			return view('userHome')->withAccount(Account::find($account->id));
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
		//$page = new Page();
		return view('userHome')->withAccount(Account::find($id));
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
	public function checkLogin(Request $request){
		$host="localhost"; // Host name
		$dbusername="root"; // Mysql username
		$dbpassword=""; // Mysql password
		$db_name="rentalsystem_db"; // Database name
		$tbl_name="accounts"; // Table name
		$link = mysqli_connect("localhost", "root", "", "rentalsystem_db");

		// Connect to server and select databse.
		mysqli_connect("$host", "$dbusername", "$dbpassword")or die("cannot connect");
		mysqli_select_db($link, "$db_name")or die("cannot select DB");

		// username and password sent from form
		$username=$_POST['loginName'];
		$password=$_POST['password'];

		// To protect MySQL injection (more detail about MySQL injection)
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$sql="SELECT * FROM $tbl_name WHERE userName='$username' and password='$password'";
		$result=mysqli_query($link, $sql);
		$rows=mysqli_fetch_assoc($result);
		$id=$rows['id'];
		// Mysql_num_row is counting table row
		$count=mysqli_num_rows($result);

		// If result matched $username and $password, table row must be 1 row
		if($count==1){
		// Register $username, $password and redirect to file "login_success.php"

			return redirect::to('userHome/'.$id);
			setcookie('userName',$username,time() + 24 * 60 * 60, "/");
			setcookie('id',$id,time() + 24 * 60 * 60, "/");
		}
		else {
			echo "Wrong Username or Password";
		}

	}
	public function destroy($id)
	{
		//
	}

}
