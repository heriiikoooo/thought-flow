<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [
            [
                'author' => 'heriiikoooo',
                'content' => 'A cup of coffee, a little sunlight, and a few deep breaths — it’s enough to reset your whole day.',
                'created_at' => '1m',
                'likes' => '122',
                'comments' => '12',
                'reposts' => 0
            ],
            [
                'author' => 'amazingriz',
                'content' => 'Be patient with yourself — growth is happening, even when you can’t see it yet.',
                'created_at' => '17h',
                'likes' => '2637',
                'comments' => '525',
                'reposts' => 124
            ],
            [
                'author' => 'dev_echo',
                'content' => `Happiness isn’t always in big milestones. Sometimes it’s in the soft laughter of a friend, the smell of rain, or a song that makes you feel understood.`,
                'created_at' => '1d',
                'likes' => '453',
                'comments' => '5',
                'reposts' => 1
            ]
        ];
        return view('feed', compact('posts'));
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
        //
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
        //
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
        //
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
