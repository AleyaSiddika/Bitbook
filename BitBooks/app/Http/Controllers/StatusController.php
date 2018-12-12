<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Status;
//use Faker\Provider\Image;
use Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class StatusController extends Controller
{
    public function index()
    {
        $userid = Auth::user()->id;

        $friend = DB::table('informations')->where('u_id', $userid)->get();

        $status = DB::table('statuses')->where('u_id', $userid)->orderBy('id','DESC')->get();

        return view('newsfeeds.newsfeed')->with(['status' => $status,'friend' => $friend]);
    }
    public function indexTimeline()
    {
//        $myStatus = Status::all();
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        $myallstatus = DB::table('statuses')->where('u_id', $userid)->orderBy('id','DESC')->get();
//        dd($myallstatus);
        return view('timelines.timeline')->with(['myallstatus' => $myallstatus,'friend' => $userInfo]);
    }



    public function findFriends()
    {
        $friend = DB::table('informations')->orderBy('id','DESC')->get();
        return view('/newsfeeds.newsfeed')->with(['friend' => $friend]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $img = Status::create($data);
            if ($request->hasFile('img')) {
                $image = Input::file('img');
                $basename = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path() . "/upload/" . $basename;
                $data2 = Image::make($image->getRealPath())->save($path);

            }
            $myimg = Status::find($img->id);

            $myimg->update(['img' => "/upload/" . $basename]);
            return redirect('/Newsfeed');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $statuss =  Status::find($id);
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
        return view('newsfeeds.edit_newsfeed')->with(['status' => $statuss,'friend' => $userInfo ]);
    }

    public function update(Request $request, $id)
    {
        $edit =  Status::find($id);
        $data = $request->all();
        $edit->update($data);
        return redirect('/Newsfeed');
    }


    public function image($id)
    {
        $immage =  Status::find($id);
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
        return view('newsfeeds.edit_image')->with(['status' => $immage,'friend' => $userInfo ]);
    }

    public function updateImage(Request $request, $id)
    {
//        $edit =  Status::find($id);
//        $data = $request->all();
//        $edit->update($data);

        return redirect('/Newsfeed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status =  Status::find($id);
        $status->delete();
        return redirect('/Newsfeed');
    }



}
