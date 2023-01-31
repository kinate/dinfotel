<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Enquiry;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function submit_enquiry(Request $request){
        

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $website = $request->website;
        $message = $request->message;

        $sendMail=Mail::to('enquiry@dinfotel.co.tz')->send(new Enquiry($name,$email,$phone,$website,$message));
                if($sendMail){
                    return redirect()->back()->with('success','Thank you for reaching out to us, we will get back to you as ASAP');

                }
                else{
                    return redirect()->back()->with('fail','Ooop! something went wrong! please try again later.');

                }
    }
}
