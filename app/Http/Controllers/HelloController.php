<?php

namespace App\Http\Controllers;

// use App\Http\Requests;
use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use App\Person;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // $items = DB::table('people')->simplePaginate(3);
        // return view('hello.index', ['items' => $items]);

        $user = Auth::user();
        $sort = $request->sort;
        $items = Person::orderBy($sort, 'asc')->simplePaginate(5);
        $param = [
            'items' => $items,
            'sort' => $sort,
            'user' => $user,
        ];
        return view('hello.index', $param);

    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        // $param = [
        //     'id' => $request->id
        // ];
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            // 'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->where('id', $request->id)->update($param);
        return redirect('/hello');
    }

    public function del(Request $request)
    {
        // $param = [
        //     'id' => $request->id
        // ];
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        // $param = ['id' => $request->id];
        DB::table('people')->where('id', $request->id)->delete();
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $items = DB::table('people')->where('id', '<=', $id)->get();
        return view('hello.show', ['items' => $items]);
    }

    public function rest(Request $request)
    {
        return view('hello.rest');
    }

    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }

    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインして下さい。'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $msg = 'ログインしました。(' . Auth::user()->name . ')';
        } else {
            $msg = 'ログインに失敗しました。';
        }
        return view('hello.auth', ['message' => $msg]);
    }
}
