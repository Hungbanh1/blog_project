<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Comment;
use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    //

    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['module_active' => 'post']);
            return $next($request);
        });
    }
    function add()
    {
        // return "ok";
        $list_cat_post = [
            'post' => 'Bài viết',
            'hardware' => 'Phần cứng',
            'software' => 'Phần mềm',
            'technology' => 'Công nghệ',

        ];
        $list_cat_post = Category::all();
        $user_id = Auth::user()->id;
        // $list_author_by_user_id = Author::where('user_id', $user_id)->pluck('name', 'id');
        $list_author_by_user_id = Author::where('user_id', $user_id)->get();

        // dd($list_author_by_user_id);

        return view('layouts.admin.post.add', compact('list_cat_post', 'list_author_by_user_id'));
    }

    function list(Request $request)
    {

        $status = $request->input('status');
        $list_post = Post::all();
        $count_active = Post::Count()->count();
        $count_trash = Post::onlyTrashed()->count();

        $count = [$count_active, $count_trash];
        $list_act = [
            'delete' => 'Xóa tạm thời'
        ];
        // dd($status);
        if ($status == 'trash') {
            $list_act = [
                'force_delete' => 'Xóa vĩnh viễn',
                'restore' => 'Khôi phục',
            ];
            echo "xoa";
            $list_post = Post::onlyTrashed()->paginate(10);
            // dd($posts);
            return view('layouts.admin.post.list', compact('list_post', 'list_act', 'count'));
        } else {
            $keyword = '';
            if ($request->input('keyword')) {
                $keyword = $request->input('keyword');
            }
            $list_post = Post::orderBy('updated_at', 'desc')->where('title_head', 'LIKE', "%$keyword%")->paginate(10);
            return view('layouts.admin.post.list', compact('list_post', 'list_act', 'count'));
        }


        return view('layouts.admin.post.list', compact('list_post', 'list_act', 'count'));
        // dd($list_post);
        // $post = Post::find(1); // Replace 1 with the actual post ID
        // $author = $post->author; // Access the related author
        // echo $author;

        // return view('admin.post.list', compact('posts', 'count', 'list_act', 'status'));
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


    // add bài viết (here)
    // function store(Request $request)
    // {

    //     $request->validate(
    //         [
    //             'title_head' => ['required', 'string', 'max:1000'],
    //             'desc' => ['required', 'string', 'max:1000'],
    //             'content'  => ['required', 'string', 'max:1000'],
    //             'slug' => ['required', 'string', 'max:1000'],
    //             'thumb_head' => ['required', 'image', 'max:1000'], // Adjust 'image' rule as needed
    //         ],

    //         [
    //             'required' => ':attribute không được để trống !!!',
    //             'max' => ':attribute có độ dài tối đa :max kí tự !!!',
    //             'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
    //             'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!',
    //             'image' => ':attribute phải là một hình ảnh.',
    //         ],
    //         [
    //             'title_head' => 'Tiêu đề bài viết',
    //             'content' => 'Nội dung bài viết',
    //             'desc' => 'Mô tả bài viết',
    //             'thumb_head' => 'Ảnh bài viết 1',
    //         ]
    //     );
    //     echo "o1";

    //     // dd($request->page_thumb1->getClientOriginalName());
    //     if ($request->hasFile('thumb_head')) {
    //         $file = $request->thumb_head;
    //         $thumbUrl = env('THUMB_URL');
    //         // dd($file->getClientOriginalName());
    //         $thumb_head = $file->move(('public/uploads/posts'), $file->getClientOriginalName());
    //         // $thumb_1 = $file->move(base_path('public/uploads/posts'), $file->getClientOriginalName());
    //         // echo $thumb_head;
    //     };

    //     // // echo $request->input('content');

    //     $post = Post::create([
    //         'category_id' => $request->input('category'),
    //         'author_id' => $request->input('author'),
    //         'title_head' => $request->input('title_head'),
    //         'thumb_head' => $thumb_head,
    //         'desc' => $request->input('desc'),
    //         'content' => $request->input('content'),
    //     ]);
    //     // $post = new Post;
    //     // $post->category_id = $request->input('category');
    //     // $post->author_id = $request->input('author');
    //     // $post->title_head = $request->input('title_head');
    //     // $post->thumb_head = $thumb_head;
    //     // $post->desc = $request->input('desc');
    //     // $post->content = $request->input('content');
    //     // // echo $request->input('category');
    //     // // echo $request->input('author');
    //     // // echo $request->input('title_head');
    //     // // echo $request->input('desc');
    //     // // echo $request->input('content');
    //     // $post->save();
    //     echo "ok";
    //     // return redirect('post/list')->with('status', 'Đã thêm bài viết thành công !!!');
    // }
    function store(Request $request)
    {

        $request->validate(
            [
                'title_head' => ['required', 'string', 'max:1000'],
                'desc' => ['required', 'string', 'max:1000'],
                'content'  => ['required', 'string', 'max:10000'],
                'thumb_head' => ['required', 'max:2048'], // Adjust 'image' rule as needed
            ],

            [
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'image' => ':attribute phải là một hình ảnh.',
            ],
            [
                'title_head' => 'Tiêu đề bài viết',
                'content' => 'Nội dung bài viết',
                'desc' => 'Mô tả bài viết',
                'thumb_head' => 'Ảnh bài viết 1',
            ]
        );


        // dd($request->page_thumb1->getClientOriginalName());
        if ($request->hasFile('thumb_head')) {
            $file = $request->thumb_head;
            $thumbUrl = env('THUMB_URL');
            // dd($file->getClientOriginalName());
            $thumb_head = $file->move(('public/uploads/posts'), $file->getClientOriginalName());
            // $thumb_1 = $file->move(base_path('public/uploads/posts'), $file->getClientOriginalName());
            // echo $thumb_head;
        };

        // // echo $request->input('content');


        $post = new Post;
        $post->category_id = $request->input('category');
        $post->author_id = $request->input('author');
        $post->title_head = $request->input('title_head');
        $post->thumb_head = $thumb_head;
        $post->desc = $request->input('desc');
        $post->content = $request->input('content');
        $post->save();
        return redirect('admin/post/list')->with('status', 'Đã thêm bài viết thành công !!!');
    }
    function edit($id)
    {


        $list_cat_post = Category::all();
        $user_id = Auth::user()->id;
        // $list_author_by_user_id = Author::where('user_id', $user_id)->pluck('name', 'id');
        $list_author_by_user_id = Author::where('user_id', $user_id)->get();

        $posts = post::find($id);
        return view('layouts.admin.post.edit', compact('posts', 'list_cat_post', 'list_author_by_user_id'));
    }

    function update(Request $request, $id)
    {
        // echo "chinh sua bai viet";
        // return "ok";
        $request->validate(
            [
                'title_head' => ['required', 'string', 'max:1000'],
                'desc' => ['required', 'string', 'max:1000'],
                'content'  => ['required', 'string', 'max:1000'],
                'slug' => ['required', 'string', 'max:1000'],
                'thumb_head' => ['required', 'image', 'max:2048'], // Adjust 'image' rule as needed
            ],

            [
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!',
                'image' => ':attribute phải là một hình ảnh.',
            ],
            [
                'title_head' => 'Tiêu đề bài viết',
                'content' => 'Nội dung bài viết',
                'desc' => 'Mô tả bài viết',
                'thumb_head' => 'Ảnh bài viết 1',
            ]
        );

        // if ($request->hasFile('page_thumb1')) {

        //     $file = $request->page_thumb1;

        //     $thumb_1 = $file->move('public/uploads/posts', $file->getClientOriginalName());
        // };

        // // dd($request->all());
        // if ($request->hasFile('page_thumb2')) {
        //     $file = $request->page_thumb2;
        //     // public_path();
        //     $thumb_2 = $file->move('public/uploads/posts', $file->getClientOriginalName());
        //     // return $thumb_2;
        // }


        // dd($request->page_thumb1->getClientOriginalName());
        // dd($thumb_1);
        // $post->category_id = $request->input('category');
        // $post->author_id = $request->input('author');
        // $post->title_head = $request->input('title_head');
        // $post->thumb_head = $thumb_head;
        // $post->desc = $request->input('desc');
        // $post->content = $request->input('content');
        $post = Post::find($id);

        if ($request->hasFile('thumb_head')) {
            unlink($post->thumb_head);

            $file = $request->thumb_head;
            $thumbUrl = env('THUMB_URL');
            // dd($file->getClientOriginalName());
            $thumb_head = $file->move(('public/uploads/posts'), $file->getClientOriginalName());
            // $thumb_1 = $file->move(base_path('public/uploads/posts'), $file->getClientOriginalName());
            // echo $thumb_head;
        };
        Post::where('id', $id)->update([
            'category_id' => $request->input('category'),
            'author_id' => $request->input('author'),
            'title_head' => $request->input('title_head'),
            'thumb_head' => $thumb_head,
            'desc' => $request->input('desc'),
            'content' => $request->input('content'),

        ]);


        return redirect('admin/post/list')->with('status', 'Đã cập nhật bài viết thành công !!!');
    }

    function delete($id)
    {
        // return $id;

        $users = Post::find($id)
            ->delete();
        return redirect('admin/post/list')->with('status', 'Bạn đã xóa bài viết thành công !!!');
    }


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
