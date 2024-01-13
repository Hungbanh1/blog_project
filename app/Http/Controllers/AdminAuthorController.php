<?php

namespace App\Http\Controllers;

use App\Author;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthorController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['module_active' => 'author']);
            return $next($request);
        });
    }
    function add()
    {
        // return "ok";

        echo $user_id = Auth::user()->id;

        return view('layouts.admin.author.add');
    }
    function store(Request $request)
    {

        $request->validate(
            [
                'name' => ['required', 'string', 'max:1000'],
                'phone' => [
                    'required',
                    'numeric',
                    'regex:/^0[0-9]+$/',
                    'digits:10', // Ensure exactly 10 digits
                    'max:9999999999', // Set the maximum value to 9999999999 (10 digits)
                    'unique:authors,phone', // Check uniqueness in the 'phone' column of the 'authors' table
                ],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:authors,email', // Check uniqueness in the 'email' column of the 'authors' table
                ],


            ],

            [
                'numeric' => ':attribute phải là số.',
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!',
                'unique' => ':attribute đã được sử dụng, vui lòng chọn lại',
                'regex' => '::attribute phải đúng định dạng',
                'digits' => 'Số điện thoại bao gồm 10 chữ số',

            ],

            [
                'name' => 'Tên tác giả',
                'phone' => 'Số điện thoại',
                'email' => 'Email',
            ]
        );

        echo "ok";

        $user_id = Auth::user()->id;
        $author = new Author();
        $author->user_id =  $user_id;
        $author->name = $request->input('name');
        $author->email = $request->input('email');
        $author->phone = $request->input('phone');
        // dd($author);
        $author->save();


        // return redirect('admin/author/list')->with('status', 'Đã thêm tác giả thành công !!!');
        return redirect('dashboard')->with('status', 'Đã thêm tác giả thành công !!!');
    }


    function list(Request $request)
    {

        // $status = $request->input('status');

        // $list_act = [
        //     'delete' => 'Xóa tạm thời'
        // ];
        // // dd($status);
        // if ($status == 'trash') {
        //     $list_act = [
        //         'force_delete' => 'Xóa vĩnh viễn',
        //         'restore' => 'Khôi phục',
        //     ];
        //     $posts = Post::onlyTrashed()->paginate(10);
        //     // dd($posts);
        // } else {
        //     $keyword = '';
        //     if ($request->input('keyword')) {
        //         $keyword = $request->input('keyword');
        //     }
        //     $posts = Post::orderBy('updated_at', 'desc')->where('page_title', 'LIKE', "%$keyword%")->paginate(10);
        // }

        // $count_active = Post::Count()->count();
        // $count_trash = Post::onlyTrashed()->count();


        // $count = [$count_active, $count_trash];

        // return view('admin.post.list', compact('posts', 'count', 'list_act', 'status'));
        $status = $request->input('status');

        $list_act = [
            'delete' => 'Xóa tạm thời'
        ];
        // dd($status);
        if ($status == 'trash') {
            $list_act = [
                'force_delete' => 'Xóa vĩnh viễn',
                'restore' => 'Khôi phục',
            ];
            $posts = Post::onlyTrashed()->paginate(10);
            // dd($posts);
        } else {
            $keyword = '';
            if ($request->input('keyword')) {
                $keyword = $request->input('keyword');
            }
            $posts = Post::orderBy('updated_at', 'desc')->where('title_head', 'LIKE', "%$keyword%")->paginate(10);
        }
        $authors = Author::all();
        return view('layouts.admin.author.list', compact('authors', 'list_act'));
    }

    function cat()
    {
        // $folder = Posts_folders::all();

        $list_folder = [
            'life' => "Đời sống",
            'parent' => "--Bậc cha mẹ",
            'children' => "---Con cái",
            'society' => "Xã hội",
            'sport' => "Thể thao",
            'footbal' => "--Bóng đá",
            'politics' => "Chính trị",
            'star' => "Ngôi sao",
            'US_UK' => '--US-UK',
            'rap' => '---Rapper',
            'vietnam' => '---VietMucsic'

        ];
        return view('admin.post.cat', compact('list_folder', 'folder'));
    }


    function edit($id)
    {

        $list_cat_post = [
            'world' => 'Thế giới',
            'sport' => 'Thể thao',
            'life' => 'Đời sống',
            'technology' => 'Công nghệ',
            'funny' => 'Ăn và chơi'

        ];

        $authors = Author::find($id);
        return view('layouts.admin.author.edit', compact('authors', 'list_cat_post'));
    }

    function update(Request $request, $id)
    {

        // return "ok";
        $request->validate(
            [
                'name' => ['required', 'string', 'max:1000'],
                'phone' => [
                    'required',
                    'numeric',
                    'regex:/^0[0-9]+$/',
                    'digits:10', // Ensure exactly 10 digits
                    'max:9999999999', // Set the maximum value to 9999999999 (10 digits)
                    'unique:authors,phone', // Check uniqueness in the 'phone' column of the 'authors' table
                ],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:authors,email', // Check uniqueness in the 'email' column of the 'authors' table
                ],


            ],

            [
                'numeric' => ':attribute phải là số.',
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!',
                'unique' => ':attribute đã được sử dụng, vui lòng chọn lại',
                'regex' => '::attribute phải đúng định dạng',
                'digits' => 'Số điện thoại bao gồm 10 chữ số',

            ],

            [
                'name' => 'Tên tác giả',
                'phone' => 'Số điện thoại',
                'email' => 'Email',
            ]
        );


        // dd($request->page_thumb1->getClientOriginalName());
        // dd($thumb_1);
        Author::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);


        return redirect('admin/author/list')->with('status', 'Đã cập nhật tác giả thành công !!!');
    }

    function delete($id)
    {
        // return $id;

        $users = Post::find($id)
            ->delete();
        return redirect('admin/post/list')->with('status', 'Bạn đã xóa bài viết thành công !!!');
    }

    // function add_folder_post(Request $request)
    // {
    //     //  return "ok";
    //     Posts_folders::create([
    //         'folder_name' => $request->input('folder_name'),
    //         'folder_parent' => $request->input('folder_parent'),
    //         'slug' => $request->input('slug'),

    //     ]);

    //     return redirect('admin/post/list/cat')->with('status', 'Đã thêm danh mục thành công !!!');
    // }

    // function edit_folder_post($id)
    // {
    //     $list_folder = [
    //         'life' => "Đời sống",
    //         'society' => "Xã hội",
    //         'sport' => "Thể thao",
    //         'politics' => "Chính trị",
    //         'star' => "Ngôi sao",

    //     ];

    //     $folder = Posts_folders::find($id);
    //     return view('admin.post.edit_folder_post', compact('list_folder', 'folder'));
    // }

    // function update_folder_post($id, Request $request)
    // {
    //     // return "qua day ok ";
    //     Posts_folders::where('id', $id)->update([
    //         'folder_name' => $request->input('folder_name'),
    //         'folder_parent' => $request->input('folder_parent'),
    //         'slug' => $request->input('slug'),

    //     ]);

    //     return redirect('admin/post/list/cat')->with('status', 'Đã cập nhật danh mục thành công !!!');
    // }

    // function delete_folder_post($id)
    // {
    //     // return "ok";
    //     $folder = Posts_folders::find($id)
    //         ->delete();

    //     return redirect('admin/post/list/cat')->with('status', 'Đã xóa danh mục thành công !!!');
    // }

    function action(Request $request)
    {


        $list_check = $request->input('list_check');



        if ($list_check) {

            if (!empty($list_check)) {
                $act = $request->input('act');
                // dd($act);

                if ($act == 'delete') {

                    post::destroy($list_check);
                    return redirect('admin/post/list')->with('status', 'Đã xóa bài viết thành công !!!');
                }
                if ($act == 'restore') {
                    post::withTrashed()
                        ->whereIn('id', $list_check)
                        ->restore();
                    return redirect('admin/post/list')->with('status', 'Đã khôi phục bài viết thành công !!!');
                }

                if ($act == 'force_delete') {
                    post::withTrashed()
                        ->whereIn('id', $list_check)
                        ->forceDelete();
                    return redirect('admin/post/list')->with('status', 'Đã xóa vĩnh viễn bài viết thành công !!!');
                }
                return redirect('admin/post/list')->with('status', 'Bạn phải chọn 1 trong những thao tác trên');
            }
        } else {
            return redirect('admin/post/list')->with('status', 'Mời bạn chọn lại !!!');
        }
    }


    function detail($id)
    {
        // return $id;
        return view('admin.post.detail', compact('id'));
    }
}
