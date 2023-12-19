<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\String_;

class HomeController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->all();

        $recipient = env('MAIL_SUPPORT');

        $ask = '其他';
       
        switch ($data['ask']) {
            case 1:
                $ask = '業務合作';
                $data['ask']='業務合作';
                break;
            case 2:
                $ask = '意見指教';
                break;
            case 3:
                $ask = '資訊分享';
                break;
            case 3:
                $ask = '其他';
                break;
        }
       
        $from = [
            'email' => $data['email'],
            'name' => $data['name'],
            'company' => $data['company'],
            'ask' => $ask,
            'content' => $data['content']
        ];
       
        $to = [
            'email' => $recipient,
            'name' => $data['name']
        ];

        Mail::send('Emails.post', $data, function ($message) use ($from) {
            $message->from(ENV('MAIL_USERNAME'), $from['name']);
            $message->to(ENV('MAIL_SUPPORT'))->subject($from['ask']);
        });
        
        return view('Contact_us');


        //Laravel Mail 使用方法可參考：https://laravel.com/docs/5.1/mail#sending-mail         
        // Mail::send('mail', $data, function ($message) use ($data) {
        //     $message->from(ENV('MAIL_USERNAME', 'mailsend@google.com'), $data['name']);
        //     $message->to(ENV('MAIL_SUPPORT', 'mailsend@google.com'))->subject('Feedback Mail');
        // });
        // return "success";
    }
}
