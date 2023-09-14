<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function store(Request $request){
        $to = $request->to;
        $subject = $request->subject;
        $html = $request->html;

        Mail::to($to)->send(new SendEmail($subject, $html));
        echo 'boiolinha';
    }
}
