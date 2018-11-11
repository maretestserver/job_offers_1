<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_check_user extends Controller
{
	private $hash ='J#sh&^dxjdjslhWstQ`mclsyUtysjh_lsjdh!djd=p';
	private $table ='users';

    public function check(Request $request)
	{

	$email = trim($request->input('email'));
	$password =trim($request->input('password'));


	if($email=='')
	{
		$flag=true;
		$poruka ="Enter email";
	}
	else if ( $password=='')
	{
		$flag=true;
		$poruka ="Enter password";

	}
	
	else
	{
		$flag =false;
		$poruka ="Success";

	}
	$msg=$poruka;
	$flag=$flag;
    return response()->json(array('msg'=> $msg,'flag'=>$flag), 200);



}
}