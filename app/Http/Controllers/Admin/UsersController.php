<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\User;
use App\Models\Role;
use App\Traits\Authenticator;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    use Authenticator;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $user_instance = User::query()
                                ->with('roles')
                                ->orderByDesc('created_at');

            return datatables()->eloquent($user_instance)
                    ->addIndexColumn()   
                    ->make(true);

        }

        $roles = Role::latest()->get();

        return view('admin.pages.users.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:5|max:80',
            'email' => [
                'required',
                'email',
                'string',
                Rule::unique('users')->withoutTrashed()
            ],
            'password' => 'required|min:8|max:100',
            'roles' => 'required|integer|exists:roles,id'
        ]);

        $user = User::create($request->only('name', 'email') + [
            'password' => bcrypt($request->input('password'))
        ]);

        $user->roles()->sync($request->input('roles'));

        return response()->json([
            'status' => true,
            'message' => 'User berhasil dibuat!'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user->load('roles');

        return view('admin.pages.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        $user->delete();

        return response()->json([
            "status" => true,
            "message" => "User berhasil di hapus!"
        ], 200);
    }
}
