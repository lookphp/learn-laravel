<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class UserController extends Controller
{
    //
    public function getList()
    {
    	$users = DB::select('select * from todos');
    	return view("users.list",["users"=>$users]);
    }

    public function postAdd()
    {
    	if(!empty($_POST["title"]))
    	{
    		$title = $_POST["title"];
    		$status = $_POST["status"];
    	}
    	else
    	{
    		$title = 'title';
    		$status = 0;	
    	}
    	

    	$user_insert = DB::insert('insert into todos (title,status) values (?,?)',[$title,$status]);

    	if($user_insert)
    	{
    		redirect("list");
    	}
    	return redirect("users/list");
    	
    }

    public function getUpdate()
    {
    	$id = $_GET["id"];
    	return view('users.update',["id"=>$id]);
    }

    public function postUpdate()
    {
    	$id = $_POST["id"];
    	$title = $_POST["title"];
    	$status = $_POST["status"];
    	DB::update("update todos set title=? , status=? where id=?" , [$title,$status,$id]);
    	return redirect("users/list");
    }

    public function getDelete()
    {
    	$id = $_GET["id"];
    	DB::delete("delete from todos where id = ?",[$id]);
    	return redirect("users/list");
    	
    }

}
