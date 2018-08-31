<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require ('simples.php');

class MailController extends Controller
{
    public function send(Request $request){
        return sendMail($request);
    }
}
