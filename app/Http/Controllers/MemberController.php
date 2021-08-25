<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;



class MemberController extends Controller
{
    //

public function index()
{

  $data = Member::all();
  //echo "<pre>";print_r($data);
   
   //dd($data);

  return $data;
}



public function accessor()
{
  return Member::all();

}



public function mutetor()
{
  //return Member::all();

  $member = new Member;
  $member->name="mk";
  $member->email="mk@gmail.com";
  $member->mobile="99999999999";
  $member->address="Noida";
   $member->save();

}

}
