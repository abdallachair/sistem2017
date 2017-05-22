<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Input as Input;

use Storage;

use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    
    public function upload(Request $request){
        $files = $request->file('file');
        
        if(!empty($files)):
        
            foreach($files as $file):
                Storage::put($file->getClientOriginalName(), file_get_contents($file));
            endforeach;
        
        endif;
        
        return \Response::json(array('success' => true));
    }
}
