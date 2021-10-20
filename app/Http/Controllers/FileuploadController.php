<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ImageResize;
use App\Models\Upload;

class FileuploadController extends Controller
{
    function fileupload(Request $request)
    {
    
        $request->validate([
            'file'=>'required',
        ]);

        if($request->file('file'))
        {
            $filename=$request->file->getClientOriginalName();
            $image = $request->file('file');
            $input['product_image'] = time() . '.' . $image->extension();
    
            $thumbnailFilePath = public_path('thumbnails');
            // $thumbnailFilePath = 'thumbnails';
    
            $img = ImageResize::make($image->path());
            $img->resize(110, 110, function ($const) {
                $const->aspectRatio();
            })->save($thumbnailFilePath . '/' . $input['product_image']);
            
            $ImageFilePath = public_path('images');
            // $ImageFilePath = 'images';

            $image->move($ImageFilePath, $input['product_image']);
    
            $product = new Upload();
            $product->name = "/public/images/" . $input['product_image'];
            $product->thumbnail = "/public/thumbnails/" . $input['product_image'];    
            $product->save();

            // ===============
            // $product = new Upload();
            // // $image = Upload::file('image');
            // $image = $request->file('file');
			// $filename  = time() . '.' . $image->getClientOriginalExtension();
			// $path = public_path('img/products/' . $filename);
			// ImageResize::make($image->getRealPath())->resize(468, 249)->save($path);
			// $product->name = 'img/products/'.$filename;
            // $product->thumbnail='img/thumbnails'.$filename;
			// $product->save();
       
            return back()
                ->with('success','Image Upload successful')
                ->with('imageName',$filename);

        }
    }
}
