<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class AlertController extends Controller
{
    public function contact($datos)
    {
        $email = new ContactMail($datos);
        Mail::to('raularellanoguevara@gmail.com')->send($email);
    }
}
