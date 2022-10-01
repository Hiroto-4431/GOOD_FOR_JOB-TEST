<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Entry;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return view('message/index', [
            'messages' => $messages,
        ]);
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
        // $input = $request->all();
        // $user_identifier = $request->session()->get('user_identifier', Str::random(20));
        // session(['user_identifier' => $user_identifier]);
        // $length = Message::all()->count();
        // $display = 5;
        // $messages = Message::offset($length - $display)->limit($display)->get();
        // Message::create([
        //     'content' => $request->content,
        //     // 'entry_id' => $request->entry_id,
        //     // 'send_by' => $request->send_by,
        // ]);
        // return redirect()->route(
        //     'user.message.show',
        //     compact([
        //         'messages',
        //         'user_identifier'
        //     ])
        // );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $input = $request->all();
        $user_identifier = $request->session()->get('user_identifier', Str::random(20));
        session(['user_identifier' => $user_identifier]);
        $length = Message::all()->count();
        $display = 5;
        $messages = Message::offset($length - $display)->limit($display)->get();
        $entry = Entry::findOrFail($id);

        return view(
            'message.show',
            compact([
                'messages',
                'user_identifier',
                'entry'
            ])
        );
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