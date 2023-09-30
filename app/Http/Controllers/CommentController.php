<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function show(string $id)
    {
        return Comment::find($id)->user;
    }
}
