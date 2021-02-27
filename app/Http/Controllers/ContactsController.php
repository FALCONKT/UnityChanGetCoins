<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 使用指定　追加 お問い合わせForm
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;


class ContactsController extends Controller
{
    
    // とい合わせ一覧＝TOPへ
    public function index()
    {
        $types = Contact::$types;
        $genders = Contact::$genders;
 
        return view('welcome',[
            'types' => $types,
            'genders' => $genders,
        ]);
    }


    
    // 確認画面へ　/unitychancoin/resources/views/contacts/confirm.blade.php
    public function confirm(ContactRequest  $request)
    {
        
        $contact = new Contact($request->all());
     
        // 「お問い合わせ種類（checkbox）」を配列から文字列に
        $type = '';
        if (isset($request->type)) {
            $type = implode(', ',$request->type);
        }
     
        return view('contacts.confirm', compact('contact', 'type'));
    }
    
    
    // Dataが完成したとき　DBへ保存する
    public function complete(ContactRequest $request)
    {
        
    $input = $request->except('action');
     
    if ($request->action === '戻る') {
        return redirect()->action('ContactsController@index')->withInput($input);
    }
 
    // チェックボックス（配列）を「,」区切りの文字列に
    if (isset($request->type)) {
        $request->merge(['type' => implode(', ', $request->type)]);
    }
 
    // データを保存
    // dd($request->all());
    Contact::create($request->all());
 
    // 二重送信防止
    $request->session()->regenerateToken();

    
    
    //  Mail::to($request->email)->send(new \App\Mail\Contact(
    //      [
    //     'to' => $request->email,
    //     'to_name' => $request->name,
    //     'from' => 'falcon9628@yahoo.co.jp',
    //     'from_name' => 'MySite',
    //     'subject' => 'お問い合わせありがとうございました。',
    //     'type' => $request->type,
    //     'gender' => $request->gender,
    //     'body' => $request->body
    //     ]
    //  ));

    // 送信メール
    // Mail::to($request->email)->send(new \App\Mail\Contact([
    \Mail::send(new \App\Mail\Contact([
        'to' => $request->email,
        'to_name' => $request->name,
        'from' => '2c5c7a3eee-977883@inbox.mailtrap.io',
        'from_name' => 'MySite',
        'subject' => 'お問い合わせありがとうございました。',
        'type' => $request->type,
        'gender' => $request->gender,
        'body' => $request->body
        ])
    );
    
 
    // 受信メール
    // Mail::to($request->email)->send(new \App\Mail\Contact([
    \Mail::send(new \App\Mail\Contact([
        'to' => '2c5c7a3eee-977883@inbox.mailtrap.io',
        'to_name' => 'MySite',
        'from' => $request->email,
        'from_name' => $request->name,
        'subject' => 'サイトからのお問い合わせ',
        'type' => $request->type,
        'gender' => $request->gender,
        'body' => $request->body
        ], 'from')
    );
        
        
            
    // 送信Pageへ遷移
    return view('contacts.complete');
    
        
    }
    // complete
    
    
    
    
    
}
// Class END
