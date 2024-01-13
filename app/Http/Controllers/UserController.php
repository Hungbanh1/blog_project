<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //\

    function dashboard()
    {
        $list_category = Category::all();
        $list_post = Post::orderBy('created_at', 'desc')->get();

        // dd($list_category);
        // return view('layouts.user.dashboard', compact('list_category'));
        return view('layouts.user.dashboard', compact('list_category', 'list_post'));
    }
    function detail_post($id)
    {
        $list_category = Category::all();
        $post_item_id = Post::where("id", $id)->get();
        $list_cmt_by_id = Comment::where('post_id', $id)->orderBy('comment_date', 'DESC')->get();

        $count_list_cmt_by_id = $list_cmt_by_id->count();
        $id_client = auth()->guard('client')->user()->id;
        // echo $id_client;
        return view('layouts.user.detail', compact('post_item_id', 'list_category', 'list_cmt_by_id', 'count_list_cmt_by_id', 'id_client'));
    }
    function test($id)
    {
        return view('layouts.user.detail_ba');
    }
    function list($category_name)
    {
        // echo $category_name;
        $category_id = Category::where('name', $category_name)->pluck('id');
        // echo $category_id;
        $list_post = Post::where('category_id', $category_id)->orderBy('created_at', 'desc')->get();
        // $test = $list_post->category;
        // echo $test;
        $list_category = Category::all();
        return view('layouts.user.list', compact('list_post', 'list_category', 'category_name'));
    }
    function account($id)
    {
        $client = Client::find($id);
        // echo $client->img;

        return view('layouts.user.account', compact('client'));
    }
    function update_account_client($id, Request $request)
    {
        // echo "ok";
        $request->validate(
            [
                // tạo điều kiện
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:5'],
                'phone' => [
                    'required',
                    'numeric',
                    'regex:/^0[0-9]+$/',
                    'digits:10', // Ensure exactly 10 digits
                    'max:9999999999', // Set the maximum value to 9999999999 (10 digits)
                    'unique:authors,phone', // Check uniqueness in the 'phone' column of the 'authors' table
                ],
            ],

            //chú thích key word
            [
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!',
                'numeric' => ':attribute phải là số.',
                'unique' => ':attribute đã được sử dụng, vui lòng chọn lại',
                'regex' => '::attribute phải đúng định dạng',
                'digits' => 'Số điện thoại bao gồm 10 chữ số',
            ],
            //chú thích
            [
                'name' => 'Tên người dùng',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'phone' => 'Số điện thoại'
            ]
        );
        $client = Client::find($id);
        $img = $client->img; // Khởi tạo biến $img
        // echo $client->img;
        if ($request->hasFile('img')) {
            // if ($client->img) {
            if ($client->img && file_exists($client->img)) {
                // Xóa hình ảnh hiện tại nếu tệp tồn tại
                unlink($client->img);
            }
            // }

            $file = $request->img;
            $thumbUrl = env('THUMB_URL');
            // dd($file->getClientOriginalName());
            $img = $file->move(('public/uploads/clients'), $file->getClientOriginalName());
            // $thumb_1 = $file->move(base_path('public/uploads/posts'), $file->getClientOriginalName());
            // echo $thumb_head;
        };
        Client::where('id', $id)->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'img' => $img,
            'password' => Hash::make($request->input('password')),
        ]);
        // return view('layouts.user.account', compact('client'))->with('status', 'Đã cập nhật thành công !!!');
        return redirect('/')->with('status', 'Đã cập nhật thành công !!!');
    }

    // function login()
    // {
    //     return view('auth.login');
    // }
}
