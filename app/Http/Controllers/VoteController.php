<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vote;
use App\Models\User;





class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        
    }
    public function data_chart()
    {
        $data = array(
           Vote::where('candidate_id','=',1)->get()->count(),
           Vote::where('candidate_id','=',2)->get()->count(),
           Vote::where('candidate_id','=',3)->get()->count()
        );
       return response()->json($data);

    }

    public function showboard(Request $request)
    {
        $link = htmlspecialchars($request->id);
        // dd($link);
        // validation 
        $validated = $request->validate([
            'id' => 'required|string'
        ]);
        // var_dump($link);

        // cek for user 
        $cek_user =  DB::table('users')
        ->where('link', '=', $link)
        ->get();
        if(count($cek_user) <1){ return response()->json(['message'=>'Oops you are not invited  !']);}
        // var_dump($cek_user);


        $cek_isVoted = DB::table('users')->select('*')->leftJoin('vote','users.id','=','vote.emp_id')->where('vote.emp_id', '=', $cek_user[0]->id)->get();
        // dd($cek_isVoted);
        if(count($cek_isVoted) > 0){
            // true 
            $is_voted = '1';
        }else{
            // false
            $is_voted = '0';
        };
        $data = array(
            'count_user' => User::latest()->count(),
            'no_urut' => array('1','2','3'),
            'name' => array('Joko Widodo', 'Prabowo Subianto', 'Anies Baswedan'),
            'username' => $cek_user[0]->name,
            'emp_id' => $cek_user[0]->id,
            'is_voted' => $is_voted
        );
        if($is_voted == '1'){
            $data2 = array( 
                'voted_candidate' => $cek_isVoted[0]->candidate_id,
                'voted_date' => $cek_isVoted[0]->created_at
            );
           $data = array_merge_recursive($data,$data2);
          
        }
        return view('content.vote_board',$data);
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
        // return response()->json($request);
        
      

        Vote::Create(
        [
         'emp_id' => $request->emp_id,
         'candidate_id' => $request->candidate_id,
        ]);        

        return response()->json(['message'=>'User saved successfully!']);
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
        dd($id);
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
           dd($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
