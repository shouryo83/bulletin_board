<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Thread;
use App\Models\User;

class CommentController extends Controller
{
    public function store(Thread $thread, Request $request)
    {
        $request->validate([
            'body' => 'required|string|max:512'
        ]);
        
        $thread->comments()->create([
            'body' => $request->body,
            'user_id' => $request->user()->id
        ]);
        
        return back();
        
    }
    
    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }
}
