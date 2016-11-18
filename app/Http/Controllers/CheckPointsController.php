<?php

namespace App\Http\Controllers;

use App\CheckPoint;
use Illuminate\Http\Request;

class CheckPointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkPoints = CheckPoint::all();
        return View('/checkPoints/index')->with(['checkPoints' => $checkPoints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('/checkPoints/create')->with([]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkpoint = CheckPoint::create($request->input());

        if ($checkpoint) {
            \Session::flash('message', 'Successfully addedd the check Point!');
        }
        return redirect()->intended('/checkpoints');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checkPoint = CheckPoint::find($id);
        return View('/checkPoints/edit')->with(['checkPoint' => $checkPoint]);

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
        $checkpoint = CheckPoint::find($id);
        $result = $checkpoint->update($request->input());
        if ($result) {
            \Session::flash('message', 'Successfully updated the check Point!');
            return redirect()->intended('checkpoints');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = CheckPoint::find($id)->delete();
        if ($result) {
            \Session::flash('message', 'Successfully deleted the check Point!');
            return redirect()->intended('checkpoints');
        }
    }
}
