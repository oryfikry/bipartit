<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\RateLimiter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        
        $id_url = $request->id;
        $cek = DB::table('users')->select('*')->where('link', '=', $id_url)->get();
        
        if($id_url == '' || $cek == ''){
            $secure = $this->middleware('auth');
        }            
            // var_dump($cek);
            // var_dump($id_url);
            // dd($id_url);
            // die();
            // return  "ok"; 
    }
    
    public function index()
    {
        $id_user = Auth::id();
        $cek = DB::table('users')->select('level')->where('id', '=', $id_user)->get();
        $idfinal = $cek[0]->level;
        // dd($idfinal);
        // cek for is voted user 
        $cek_isVoted = DB::table('users')->select('*')->leftJoin('vote','users.id','=','vote.emp_id')->where('users.id', '=', $id_user)->get();
        $is_voted = $cek_isVoted[0]->emp_id == null ? '1' : '0';
        
        $data = array(
            'count_user' => User::latest()->count(),
            'name' => array('Candidate 1', 'Candidate 2', 'Candidate 3' ),
            'is_voted' => $is_voted
        );

        if($idfinal == '0'){
            $data['menu'] = 'menu.v_menu_admin';
            $data['content'] = 'content.view_dashboard';
            return view('layouts.v_template',$data);
        }else{
            // $data['menu'] = 'menu.v_menu_user';
            // $data['content'] = 'content.vote_board';
          return view('content.vote_board',$data);

        }
        // $data['content'] = 'content.view_dashboard';
    }
}
