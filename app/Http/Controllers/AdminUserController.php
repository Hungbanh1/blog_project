<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    //
    protected $redirectTo = '/admin';

    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['module_active' => 'user']);
            return $next($request);
        });
    }
    function admin()
    {
        // echo "ok";
        return view('auth.login-admin');
    }

    // function login(Request $request)
    // {

    //     // Auth::guard('client')->logout();
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'email' => 'required',
    //         'password' => 'required|min:6',
    //     ]);
    //     if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
    //         return redirect()->intended($this->redirectTo);
    //     } else {
    //         return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Tài khoản hoặc mật khẩu không đúng.']);
    //     }
    // }
    function add()
    {
        // return "ok";
        $role = role::all();
        return view('layouts.admin.user.add', compact('role'));
        // return view('layouts.admin.user.add');
    }

    function detail($id)
    {
        // return $id;

        $users = user::find($id);
        return view('layouts.admin.user.detail', compact('users'));
    }


    function store(Request $request)
    {

        // dd($request->all());
        $request->validate(
            [
                // tạo điều kiện
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:4'],
            ],

            //chú thích key word
            [
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!'
            ],
            //chú thích
            [
                'name' => 'Tên người dùng',
                'email' => 'Email',
                'password' => 'Mật khẩu',
            ]
        );
        // return "ok";
        // return $request()->all();
        // dd($request());
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->permission = $request->input('permission');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        // foreach ($list_check as  $v) {
        DB::table('role_users')->insert(
            [
                'user_id' => $user->id,
                'role_id' => $request->input('permission'),
            ],
        );
        // }


        return redirect('admin/user/list')->with('status', 'Đã thêm thành viên thành công !!!');
    }

    function list(Request $request)
    {

        // return $request->input('keyword');
        $id = auth()->user()->id;
        // echo $id;
        $users = User::all()->sortByDesc(function ($user) use ($id) {
            return $user->id == $id ? 1 : 0;
        });
        // dd($users);
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
            $users = User::onlyTrashed()->paginate(10);
        } else {
            $keyword = '';
            if ($request->input('keyword')) {
                $keyword = $request->input('keyword');
            }
            $users = user::where('name', 'LIKE', "%$keyword%")->paginate(10);
        }

        $count_active = User::Count()->count();
        $count_trash = User::onlyTrashed()->count();

        // dd($count_trash);
        $count = [$count_active, $count_trash];

        // dd($count[1]);

        // $test1 = role::find(6)
        //     ->user;
        // dd($test1);

        // dd($users);
        //    return  $users->name;
        return view('layouts.admin.user.list', compact('users', 'count', 'list_act', 'status'));
    }


    function delete($id)
    {
        // return $id;
        if (auth::id() != $id) {
            $users = User::find($id)
                ->delete();
            return redirect('admin/user/list')->with('status', 'Bạn đã xóa thành viên thành công !!!');
        } else {
            return redirect('admin/user/list')->with('status', 'Bạn không thể tự xóa chính mình !!!');
        }
    }

    function edit($id)
    {
        // return $id;
        // $id = auth()->user()->id;
        $users = User::find($id);
        $role = role::all();
        return view('layouts.admin.user.edit', compact('users', 'role'));
    }

    function update(Request $request, $id)
    {

        // dd($request->all());
        // $request->validate(
        //     [
        //         // tạo điều kiện
        //         'name' => ['required', 'string', 'max:255'],
        //         'password' => ['required', 'string', 'min:8'],
        //     ],

        //     //chú thích key word
        //     [
        //         'required' => ':attribute không được để trống !!!',
        //         'max' => ':attribute có độ dài tối đa :max kí tự !!!',
        //         'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
        //         'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!'
        //     ],
        //     //chú thích
        //     [
        //         'name' => 'Tên người dùng',
        //         'password' => 'Mật khẩu',
        //     ]
        // );

        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'password' => Hash::make($request->input('password')),
        ]);
        // echo $id;
        // echo $request->input('permission');
        // DB::table('role_users')->where('id', $id)->update(
        //     [
        //         'user_id' => $id,
        //         'role_id' => $request->input('permission'),
        //     ],
        // );
        DB::table('role_users')
            ->where('user_id', $id)
            ->update([
                'role_id' => $request->input('permission'),
            ]);
        // // echo "Ok";

        return redirect('admin/user/list')->with('status', 'Đã cập nhật thành viên thành công !!!');
    }

    function update_pass($id)
    {
        // echo $id;
        $users = User::find($id);
        return view('layouts.admin.user.update', compact('users'));
    }

    function pass_have_update(Request $request, $id)
    {
        $request->validate(
            [
                // tạo điều kiện
                // 'name' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ],

            //chú thích key word
            [
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!'
            ],
            //chú thích
            [
                // 'name' => 'Tên người dùng',
                'password' => 'Mật khẩu',
            ]
        );

        User::where('id', $id)->update([
            // 'name' => $request->input('name'),
            // 'permission' => $request->input('permission'),
            'password' => Hash::make($request->input('password')),
        ]);

        // echo "Ok";

        return redirect('admin/user/list')->with('status', 'Đã cập nhật mật khẩu thành công !!!');
    }

    function update_account($id)
    {
        // echo $id;
        $users = User::find($id);
        return view('layouts.admin.user.update_account', compact('users'));
    }

    function account_have_update(Request $request, $id)
    {
        $request->validate(
            [
                // tạo điều kiện
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'max:255'],

                // 'password' => ['required', 'string' , 'min:8'],
            ],

            //chú thích key word
            [
                'required' => ':attribute không được để trống !!!',
                'max' => ':attribute có độ dài tối đa :max kí tự !!!',
                'min' => ':attribute có độ dài tối thiểu :min kí tự !!!',
                'confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng check lại !!!'
            ],
            //chú thích
            [
                'name' => 'Tên người dùng',
                'email' => "Email",
                // 'password'=>'Mật khẩu',
            ]
        );

        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),

            // 'permission' => $request->input('permission'),
            // 'password' => Hash::make($request->input('password')),
        ]);

        // echo "Ok";

        return redirect('admin/user/list')->with('status', 'Đã cập nhật tài khoản thành công !!!');
    }

    function action(Request $request)
    {


        $list_check = $request->input('list_check');

        if ($list_check) {
            foreach ($list_check as $k => $id) {
                if (Auth::id() == $id) {
                    unset($list_check[$k]);
                }
            }
            if (!empty($list_check)) {
                $act = $request->input('act');
                // dd($act);

                if ($act == 'delete') {

                    user::destroy($list_check);
                    return redirect('admin/user/list')->with('status', 'Đã xóa thành viên thành công !!!');
                }
                if ($act == 'restore') {
                    user::withTrashed()
                        ->whereIn('id', $list_check)
                        ->restore();
                    return redirect('admin/user/list')->with('status', 'Đã khôi phục thành viên thành công !!!');
                }

                if ($act == 'force_delete') {
                    user::withTrashed()
                        ->whereIn('id', $list_check)
                        ->forceDelete();
                    return redirect('admin/user/list')->with('status', 'Đã xóa vĩnh viễn thành viên thành công !!!');
                }
                return redirect('admin/user/list')->with('status', 'Bạn phải chọn 1 trong những thao tác trên');
            }
        }
    }
}
