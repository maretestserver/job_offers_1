<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PublishJob extends Controller
{
    public function index()
    {
    	$sql ="SELECT * FROM jobs WHERE email IN( SELECT email FROM `jobs` group by email HAVING count(email) > 1 ) ORDER BY created DESC ";
    	$data = DB::select($sql);
    	return view('publish', compact('data'));
    }
}
