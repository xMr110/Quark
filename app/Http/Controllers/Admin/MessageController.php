<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.messages.index',compact('messages'));
    }
    public function show($id)
    {
        $msg = Message::findOrFail($id);
        if ($msg->status ==0) {
            $msg->status = 1;
            $msg->user_id = Auth::id();
            $msg->save();
        }
        return view('admin.messages.show',compact('msg'));
    }
}
