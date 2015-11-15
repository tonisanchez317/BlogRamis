<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkRequest;
use App\Work;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::where('user_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();

        return view('pages.myWorks', ['works' => $works]);
        //return view('works.index', compact('works'));
        //return view('works.index')->with(['works', => $works]);
        //return view('works.index')->with(compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addWork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        Work::create(array_add($request->all(), 'user_id', Auth::user()->id));

        return redirect()->route('website.index');
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
     * @param  $work
     * @return \Illuminate\Http\Response
     */
    public function edit($work)
    {
        return view('pages.editWork', compact('work'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $work
     * @return \Illuminate\Http\Response
     */
    public function update(WorkRequest $request, $work)
    {
        $work->update($request->all());

        return redirect()->route('works.index');
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
