<?php

namespace App\Http\Controllers;

use App\Models\Kitob;
use App\Models\Yangilik;
use Illuminate\Http\Request;

class KitobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /////////////////////////////////////////////
    public function index()
    {
      return view('admin.kitoblar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /////////////////////////////////////////////
    public function create(Request $request)
    {

        $data = new Kitob();
        $data->nomi=$request->nomi;
        $data->avtor=$request->muallifi;
        $image=$request->rasm;
        $book=$request->kitob;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->rasm->move('newsimage',$imagename);

        $data->rasm=$imagename;

        $bookname=time().'.'.$book->getClientOriginalExtension();
        $request->kitob->move('bookimage',$bookname);
        $data->file=$bookname;

        $data->save();

        $dat=Kitob::all();
        return  view('admin.kitoblar.showbook',compact('dat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /////////////////////////////////////////////
    public function store(Request $request)
    {
      $dat=Kitob::all();
      return  view('admin.kitoblar.showbook',compact('dat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /////////////////////////////////////////////
    public function show($id)
    {

        $data = Kitob::find($id);
        return view('admin.kitoblar.editbook', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /////////////////////////////////////////////
    public function update(Request $request, $id)
    {
        $data = Kitob::find($id);

        $data->nomi=$request->nomi;
        $data->avtor=$request->muallifi;

        if($request->rasm !=null){
            $image=$request->rasm;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->rasm->move('newsimage',$imagename);
            $data->rasm=$imagename;
        }

        if($request->kitob !=null){

            $book=$request->kitob;
            $bookname=time().'.'.$book->getClientOriginalExtension();
            $request->kitob->move('bookimage',$bookname);
            $data->file=$bookname;
        }

        $data->save();
        $dat=Kitob::all();
        return  view('admin.kitoblar.showbook',compact('dat'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $data=Kitob::find($id);
        $data->delete();

        $dat=Kitob::all();
        return  view('admin.kitoblar.showbook',compact('dat'));
    }


    public function kitoblar()
    {
        $data = Kitob::paginate(8);
        return view('user.kitoblar',compact('data'));
    }

    public function getDownload($id){
        //PDF file is stored under project/public/download/info.pdf

        $file = Kitob::find($id);
        $path=public_path("bookimage/$file->file");
        return response()->download($path);
    }




}
