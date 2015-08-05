<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class superAdminFormProcessingController extends Controller {

	public function index() {
        return $this->launchView('views');
	}

	public function create() {
        return $this->launchView('create');
	}

	public function store(Request $request) {
		$api    = $this->module['apis']->where('randomid', $request->get('apiId'))->first();
		$object = $this->module['objects']->where('id', $api['oid'])->first();
 		$input = array();
 		foreach ($request->input() as $key => $value) {
 			if ($key != '_token' && $key != 'apiId') {
 				$input[$key] = $value;
 			}
 		}
 
 		if ($api['action'] == 'create') {
 			DB::table($this->db_prefix.$object['name'])->insert($input);
 		} else if ($api['action'] == 'update') {
 			DB::table($this->db_prefix.$object['name'])->where('id', $request->get('id'))->update($input);
 		}
	}

	public function show($id) {
        return $this->launchView('view');
	}

	public function edit($id) {
		//
	}

	public function update($id) {
		//
	}

	public function destroy($id) {
		//
	}
}
