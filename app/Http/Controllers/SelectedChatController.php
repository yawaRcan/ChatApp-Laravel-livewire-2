<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SelectedChatController extends Controller
{
    public function index($id) {
        $user = DB::table('users')->where('id',$id)->first();
        return view('chat',compact('user'));
    }
}
