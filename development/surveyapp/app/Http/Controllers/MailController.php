<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notDoneMails = DB::select( DB::raw(" SELECT * FROM tbl_mails WHERE done = 0"));
        $sendMails = DB::select( DB::raw(" SELECT * FROM tbl_mails WHERE done = 1"));
        
        $mails = [$notDoneMails, $sendMails]; 

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

        $mail = new \App\Mail();

        $mail->mail = $mailer;
        
        $mail->save(); //saves data to database

        return redirect('/'); //redirects to homepage
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
}
