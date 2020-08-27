<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TraversyController extends Controller
{
    public function home(){
        $title = 'Welcome to Laravel';

        //////SAME THING
        //return view('pages.home', compact('title'));
        return view('traversy.pages.home')->with('title',$title);
        //////////
    }
    public function traversyDash()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('traversy.pages.dashboard')->with('posts', $user->posts);
    }

    public function about(){
        $title = 'About Us';
        return view('traversy.pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('traversy.pages.services')->with($data);
    }
}
