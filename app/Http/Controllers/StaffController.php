<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $staff = Staff::orderBy('position', 'asc')->get();

      return view('staff.index', compact('staff'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editList()
    {
      $staff = Staff::orderBy('position', 'asc')->get();

      return view('staff.edit-list', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(), [
          'game_name' => 'required',
          'full_name' => 'required',
          'team' => 'required',
          'major' => 'required',
          'hometown' => 'required',
          'job' => 'required',
          'main' => 'required',
          'position' => 'required'
      ]);

      $member = new Staff();
      $member->game_name = $request->input('game_name');
      $member->full_name = $request->input('full_name');
      $member->team = $request->input('team');
      $member->major = $request->input('major');
      $member->hometown = $request->input('hometown');
      $member->job = $request->input('job');
      $member->main = $request->input('main');
      $member->position = $request->input('position');
      $member->save();

      $staff = Staff::orderBy('position', 'asc')->get();

      return view('staff.edit-list', compact('staff'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $this->validate(request(), [
            'game_name' => 'required',
            'full_name' => 'required',
            'team' => 'required',
            'major' => 'required',
            'hometown' => 'required',
            'role' => 'required',
            'main' => 'required',
            'position' => 'required'
        ]);

        $staff->update($request->all());

        $staff = Staff::orderBy('position', 'asc')->get();

        return view('staff.edit-list', compact('staff'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        if (Auth::check()) {
          $staff->delete();
        }

        return back();
    }
}
