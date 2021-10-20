<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myuser;

class Editcontroller extends Controller
{
    function editdata($id)
    {
        $res=Myuser::find($id);
        return view('edit',['data'=>$res]);       
    }
    function edit($id)
    {
        $res=Myuser::find($id);
        return view('home',['data'=>$res,'check'=>'Update']);  
    }
}
