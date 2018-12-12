<?php

namespace App\Http\Controllers;

use Auth;
use App\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    public function store(Request $request, $id)
    {
        $data = $request->all();

        Comments::create($data);

        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        $status = DB::table('statuses')
//            ->leftJoin('comments', 'comments.s_id', '=', 'statuses.id')
            ->where('id', '=', $id)->get();

        $comment = DB::table('comments')
            ->leftJoin('informations', 'informations.u_id', '=', 'comments.u_id')
            ->where('comments.s_id', '=', $id)->get();


        return view('newsfeeds.comment')->with(['comment' => $comment,'status' => $status,'friend' => $userInfo ]);

//        dd($_POST);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
