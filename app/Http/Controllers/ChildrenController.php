<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Children;

class ChildrenController extends Controller
{
    public function Register(){
        $child=new Children();
        $child->Email=request('Email');
        $child->ChildName=request('ChildName');
        $child->ChildImage=request('ChildImage');
        $child->Age=request('Age');
        $child->Points=request('Points');
        $child->save();
    }
}