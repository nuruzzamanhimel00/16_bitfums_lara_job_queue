<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\SendMailable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(){

        // Mail::to('nuruzzaman.himel147@gmail.com')->send(new SendMailable());
        // dispatch(new SendEmailJob());
        $emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(5));
        dispatch($emailJob);
        echo "Mail send successfully";
    }
}
