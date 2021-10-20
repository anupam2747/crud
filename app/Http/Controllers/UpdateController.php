<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Myuser;
class UpdateController extends Controller
{
    function updatedata(Request $req,$id)
    {
 
     $data=Myuser::find($id);
     $data->firstname=$req->fname; 
     $data->lastname=$req->lname;
     $data->email=$req->email;
     $data->mobile=$req->mobile;
     $data->address=$req->address;
     $data->update();
     return redirect('showdata')->with('status','Details Updated Successfully');
    }
}
