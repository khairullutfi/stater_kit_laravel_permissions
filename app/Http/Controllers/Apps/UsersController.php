<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            // membuat relasinya
            $query = User::query();

            return Datatables::of($query)
            ->addColumn('edit', function($item){
                //edit
                if(auth()->user()->hasPermissionTo('users.edit')){
                    $edit = '
                    	<a href="'. route('apps.users.edit', $item->id) .'" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
						</a>
                        ';
            }else{
                $edit = '';
            }
            // delete 
            if(Auth::user()->hasPermissionTo('users.delete')){
            $delete = '
            <a href="javascript:void(0)" onclick="deleteData('. $item->id .')" class="btn btn-sm btn-clean btn-icon" title="Delete">
                <i class="la la-trash"></i>
            </a>
            ';
            }else{
                $delete = '';
            }
            return $edit . $delete;
            })
    
            ->rawColumns(['edit'])
            ->make();
        }

        return view('pages.apps.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();

        return view('pages.apps.users.create',[
            'role' => $role,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|unique:users',
            'password' => 'required' 
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->assignRole($request->roles);

        return redirect()->route('apps.users.index');
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
    public function edit($id)
    {
        //get user
        $user = User::with('roles')->findOrFail($id);

     
        $roles = Role::all();

        return view('pages.apps.users.edit',[
            'roles' => $roles,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
          $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|unique:users,email,'.$user->id,
            'password' => 'nullable' 
        ]);

        /**
         * check password is empty
         */
        if($request->password == '') {

            $user->update([
                'name'     => $request->name,
                'email'    => $request->email
            ]);

        } else {
                
            $user->update([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => bcrypt($request->password)
            ]);
            
        }

        //assign roles to user
        $user->syncRoles($request->roles);

        //redirect
        return redirect()->route('apps.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                   //find user
        $user = User::findOrFail($id);

        //delete user
        $user->delete();

        //redirect
        return redirect()->route('apps.users.index');
    }
}
