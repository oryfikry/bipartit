<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
        // dd(User::all());
        $data = [
            'count_user' => User::latest()->count(),
            'all_user'   => User::all(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_user',
            'title'    => 'Table User'
        ];

        if ($request->ajax()) {
            $q_user = User::select('id','name','email','link','is_receive')->where('level','!=', 0)->orderByDesc('created_at');
            return Datatables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('is_receives', function($row){
     
              
                    if($row->is_receive == 0 ){
                        $status = '<div class="text-danger">x</div>';
                    }else{
                        $status = '<div class="fas fa-check-circle text-success"></div>' ;
                    }    
                      return $status;         
                    })
                    ->addColumn('action', function($row){
     
                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
 
                         return $btn;
                    })
                    ->rawColumns(['action','is_receives'])
                    ->make(true);
        }

        return view('layouts.v_template',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        User::updateOrCreate(['id' => $request->user_id],
                [
                 'name' => $request->name,
                 'email' => $request->email,
                 'link' => Hash::make(now(),['rounds'=>5]),
                 'level' => $request->level,
                 'is_receive' => $request->is_receive,
                 'password' => Hash::make($request->password),
                ]);        

        return response()->json(['success'=>'User saved successfully!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $User = User::find($id);
        return response()->json($User);

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['success'=>'Customer deleted!']);
    }
}
