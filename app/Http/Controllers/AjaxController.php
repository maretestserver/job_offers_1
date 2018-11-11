<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\job_offer;
use App\Mail\BoardModerator;

use DB;
class AjaxController extends Controller
{
  
	private $hash ='J#sh&^dxjdjslhWstQ`mclsyUtysjh_lsjdh!djd=p';
	private $table ='jobs';
	private $email_moderator ='moderator@joboffer.com';


    public function prosledjeni_podaci(Request $request)
    {
    	$title = trim($request->input('title'));
		$description =trim($request->input('description'));
		$email = trim($request->input('email'));
    

    if($title=='')
	{
		$flag =true;
		$msg ="Enter title";
		// $sql='';
	}
	else if ( $description=='')
	{
		$flag =true;
		$msg ="Enter description";
		// $sql='';
	}
	else if ($email=='')
	{
		$flag =true;
		$msg ="Enter email";
		// $sql='';
	}
	else
	{
		$flag =false;
		$msg =null;

		$sql = "INSERT INTO `{$this->table}`(`title`, `description`, `email`) VALUES('".$title."', '".$description."', '".$email."')";
		DB::insert($sql);
		$sql_preboj= "SELECT * FROM `{$this->table}` WHERE email='".$email."'";
		$upit = DB::select($sql_preboj);
		
		$prebroj =count($upit);
		if($prebroj== 1)
		{

			\Mail::to($email)->send(new job_offer);
			\Mail::to($this->email_moderator)->send(new BoardModerator($title,$description, $email));
		}
		
	}
	
      return response()->json(array('msg'=> $msg,'flag'=>$flag ), 200);

	}
}
