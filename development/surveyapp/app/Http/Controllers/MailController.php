<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use \App\Mail\Automail;
use Mail;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mails = DB::select( DB::raw(" SELECT * FROM tbl_mails WHERE done = 0"));
                 DB::select( DB::raw(
        $mails = [$Mails]; 

        return view("mails")->with(array('returnMails' => $mails));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mailer = $request->get('mail');
        $phone = $request->get('phone');

        if (isset($mailer) && isset($phone)) {
            $mail = new \App\Mail();

            $mail->mail = $mailer;
            $mail->phone = $phone;
        
            $mail->save(); //saves data to database

            return redirect('/'); //redirects to homepage
        }elseif (isset($mailer)) {
            $mail = new \App\Mail();

            $mail->mail = $mailer;
        
            $mail->save(); //saves data to database

            return redirect('/'); //redirects to homepage
        }elseif (isset($phone)) {
            $mail = new \App\Mail();

            $mail->phone = $phone;
        
            $mail->save(); //saves data to database

            return redirect('/'); //redirects to homepage
        }else{
            return redirect('/'); //redirects to homepage
        }

        
       
        // Mail::to('example@mailtrap.io')->send(new Automail($mailer)); //Send reminder when new person wants to make contact

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $getPostData = $request->all();

        $id = $getPostData['id'];
        

        DB::table('tbl_mails')
            ->where('id', $id)
            ->update(['done' => 1]);

          return redirect('mails');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function collection()
    {
        $test = DB::select( DB::raw(" SELECT * FROM tbl_mails WHERE done = 1"));
        //  $mails = array();
        // foreach($test as $mail){
        //     // var_dump($mail);
        //     $mails['mail'] = $mail->mail; 
        //     // var_dump($mails);
        // }
        // // var_dump($mails);
        
        
        return \Excel::download($test, 'test.xlsx');
    }
}
