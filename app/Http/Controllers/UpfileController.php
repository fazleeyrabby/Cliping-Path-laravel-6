<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;

use Symfony\Component\HttpFoundation\File;
use App\Attachefile;
use Session;

class UpfileController extends Controller
{
   public function store(Request $request)
   {
 		// return $input = $request->all();
   		$obj = new Attachefile;

        $obj->title=$request->title;
        $obj->description=$request->description;

        $files=$request->file('atach_file');  //for multiple image upload  
        $package_img='';
        foreach($files as $file){
            $filename=$file->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/frontend_asset/attache_files/';
            $file->move($destination_path, $picture); 
            $package_img .= ",".$picture;
        }
        $package_img = substr($package_img,1);
        $obj->atach_file=$package_img;

        $obj->save();
        Session::flash('success', 'Your info has been added successfully');
        return redirect()->back();
   }
}
