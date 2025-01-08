<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $postId,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'is_approved' => false, // Default to not approved
        ]);

        return redirect()->back()->with('success', 'Your comment has been submitted for approval.');
    }

   
}
