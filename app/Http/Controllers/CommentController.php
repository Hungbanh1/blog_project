<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    function post_comment($id_client, Request $request, $id_post)
    {
        // return redirect()->route('detail_post', ['id' => $id_post])->with('success', 'Đăng ký thành công!');papp

        $post_comment = new Comment;
        $post_comment->client_id = $id_client;
        $post_comment->post_id = $id_post;
        $post_comment->comment = $request->input('comment');
        $post_comment->comment_date = Carbon::now()->format('Y-m-d H:i:s');
        $post_comment->save();

        // Chuyển hướng người dùng trở lại trang trước đó
        // return redirect()->route('detail_post')->with('success', 'Đăng ký thành công!');
        // return redirect()->route('detail_post', ['id' => $id_post])->with('success', 'Đăng ký thành công!');
        return back();
    }
}
