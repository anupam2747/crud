<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myuser;

class Home extends Controller
{
    function getdata(Request $req)
    {
        $data=new Myuser;
         $data->firstname=$req->fname;
         $data->lastname=$req->lname;
         $data->email=$req->email;
         $data->mobile=$req->mobile;
         $data->address=$req->address;
         $data->save();
         return redirect('showdata');
        
    }
    function show()
    {
         $data=Myuser::paginate(5);
         return view('show',['details'=>$data]);  
        // return "done";
    }
    function deletedata($id)
    {
        $res=Myuser::find($id)->delete();
        if($res)
        {
          return redirect('showdata');
        }
        else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'
              ];
              return response()->json($data);
        }
       
    }
    
}
