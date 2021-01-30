<?php

namespace App\Http\Controllers;

// use App\Http\Requests;
use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // $validator = Validator::make($request->query(), [
        //     'id' => 'required',
        //     'pass' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     $msg = 'クエリーに問題';
        // } else {
        //     $msg = 'ID/pass受付';
        // }
        // return view('hello.index', ['msg'=>$msg, ]);
        return view('hello.index', ['msg'=>'フォームを入力：']);
    }

    public function post(HelloRequest $request)
    {
        // $rules = [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150',
        // ];
        // $messages = [
        //     'name.required' => '名前は必ずね',
        //     'mail.email' => 'メールアドレス',
        //     'age.numric' => '年齢を整数で記入下さい',
        //     'age.between' => '年齢は0~150の間',
        // ];
        // $validator = Validator::make($request->all(), $rules, $messages);
        // $validator->sometimes('age', 'min:0', function($input){
        //     return !is_int($input->age);
        // });
        // $validator->sometimes('age', 'min:200', function($input){
        //     return !is_int($input->age);
        // });

        // if ($validator->fails()) {
        //     return redirect('/hello')
        //         -> withErrors($validator)
        //         -> withInput();
        // }

        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }
}
