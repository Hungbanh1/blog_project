<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchajax(Request $request, $suffitx = 'VNĐ')
    {
        // echo $request->input('keyword');
        $keyword = '';
        // return "keyword ajax:$keyword";

        // return "keyword ajax:$keyword";
        if ($request->input('keyword')) {
            $keyword = $request->input('keyword');
        }
        $posts = Post::where('title_head', 'LIKE', "%$keyword%")->get();
        // $products = Posts::where('page_title', 'LIKE', "%$keyword%")->get();
        // }
        $data = [
            'post' => $posts,
        ];
        return $data;

        return view('layouts.client.search.searchajax', compact('data'));
    }
    function search(Request $request)
    {
        // return "ok";
        // $keyword = 'a';
        // return "keyword ajax:$keyword";

        if ($request->input('keyword')) {
            $keyword = $request->input('keyword');
        }
        $list_post_search = Post::where('title_head', 'LIKE', "%$keyword%")->get();
        return view('layouts.user.search.search', compact('list_post_search', 'keyword'));
        // $products = Posts::where('page_title', 'LIKE', "%$keyword%")->get();
        // var_dump($posts);
        // return view('users.search.search', compact(('posts')));
    }

    // function sort($search_filter, Request $request)
    function sort(Request $request, $keyword)
    {
        $sort = $request->input('select');
        echo $sort;
        // echo "ok";
        if ($sort == 'A-Z') {
            $list_post_search = Post::where('title_head', 'LIKE', "%$keyword%")->orderBy('title_head', 'asc')
                ->get();
            // dd($products);
        } else if ($sort == 'Z-A') {
            $list_post_search = Post::where('title_head', 'LIKE', "%$keyword%")->orderBy('title_head', 'desc')
                ->get();
        } elseif ($sort ==  "newest") {
            $list_post_search = Post::where('title_head', 'LIKE', "%$keyword%")->orderBy('created_at', 'desc')
                ->get();
        } elseif ($sort == "latest") {
            $list_post_search = Post::where('title_head', 'LIKE', "%$keyword%")->orderBy('created_at', 'asc')
                ->get();
        } else {
            $list_post_search = Post::where('title_head', 'LIKE', "%$keyword%")->get();
        }
        return view('layouts.user.search.search', compact('list_post_search', 'keyword'));
    }
}
