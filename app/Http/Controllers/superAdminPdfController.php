<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\mfwobjects;
use App\mfwworkflows;
use App\mfwobjectrelationships;
use App\mfwmanageforms;
use App\mfwapis;
use App\mfwformprocessings;
use App\mfwtemplates;
use App\mfwpages;
use DB;

class superAdminPdfController extends Controller
{

    public function index() {
        PDF::SetTitle('Hello World');
        return 'Something went ok...';
        PDF::AddPage();
        PDF::Write(0, 'Hello World');
        PDF::Output('hello_world.pdf','FD');

    }

    public function create() {
        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::Write(0, 'Hello World');
        PDF::Output('hello_world.pdf');
    }

    public function store() {
        //
    }

    public function show($id) {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
