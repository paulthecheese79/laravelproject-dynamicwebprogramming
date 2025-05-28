<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    protected $game_list;

    public function __construct()
    {
        $this->game_list = require __DIR__ . '/../../../database/datasource.php';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('games.list', ['games' => $this->game_list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = collect($this->game_list)->firstWhere('id', (int) $id);

        if (!$game) {
            abort(404, 'Game not found');
        }

        return view('games.show', ['game' => $game]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $updatedList = array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] != (int) $id;
        });

        return response()->json([
            'message' => "Game with ID $id deleted.",
            'games' => array_values($updatedList) // Reindex the array
        ], 200);
    }
}
