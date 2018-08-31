<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function save(Request $request)
    {
        $file = $request->image;
        $nome = 'file_'.$request->id.'_'.date('d-m-Y_H-i-s-u.').$file->extension();
        
        $file->storeAs('public', $nome);

        return asset('storage/'.$nome);
    }
}
