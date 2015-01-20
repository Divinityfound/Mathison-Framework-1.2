<?php namespace App\Http\Controllers;

class SuperAdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index() {
		return view('superAdmin.index');
	}

	public function viewRecords($objectName) {
		return view('superAdmin.view', compact('objectName'));
	}

	public function createObject() {
		return view('superAdmin.createObject');
	}

	public function createObjectPost() {
		$post = $_POST;
		$defaultRedirect = true;
		if ($defaultRedirect == true) {
			$redirect = 'admin/super/view/'.$post['objectName'];	
		} else {
			
		}
		

		return redirect($redirect);
	}

	public function installRequired() {
		return null;
	}

	public function viewRequired() {
		return null;
	}

	public function relationships() {
		return null;
	}
}
