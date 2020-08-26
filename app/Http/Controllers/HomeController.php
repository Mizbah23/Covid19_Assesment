<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function post(Request $request)
    {
        dd($request->all());
        $post=new Post;
        $post->age=$request->age;
        $post->sex=$request->sex;
        // $post->temperature=if($request->temperature>(99.5||100.9)) {
        //     $post->score=$score+2;
        // };
        $post->temperature = ($request->temperature>(99.5||100.9)) ? $post->score=$score+2 : $post->score=$score ;
        $input = $request->all();
        $input['symptoms1'] = $request->input('symptoms1');
        $input['symptoms2'] = $request->input('symptoms2');
        Post::create($input);
        $post->save;
        return redirect()->route('home');

    }
}
