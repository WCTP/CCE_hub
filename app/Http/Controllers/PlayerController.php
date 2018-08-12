<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $players = Player::orderBy('position', 'asc')->get();

      return view('players.index', compact('players'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editList()
    {
      $players = Player::orderBy('position', 'asc')->get();

      return view('players.edit-list', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
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
            'role' => 'required',
            'main' => 'required',
            'position' => 'required'
        ]);

        $player = new Player();
        $player->game_name = $request->input('game_name');
        $player->full_name = $request->input('full_name');
        $player->team = $request->input('team');
        $player->major = $request->input('major');
        $player->hometown = $request->input('hometown');
        $player->role = $request->input('role');
        $player->main = $request->input('main');
        $player->position = $request->input('position');
        $player->save();

        $players = Player::orderBy('position', 'asc')->get();

        return view('players.edit-list', compact('players'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
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

        $player->update($request->all());

        $players = Player::orderBy('position', 'asc')->get();

        return view('players.edit-list', compact('players'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        if (Auth::check()) {
          $player->delete();
        }

        return back();
    }
}
