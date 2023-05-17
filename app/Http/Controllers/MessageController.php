<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    
    public function index() {

        $messages = Message::all();
    
        //return view('welcome', ['messages' => $messages]);

        return response()->json($messages, 200);

    }

    public function create() {
        return view('messages.create');
    }

    public function store(Request $request) {

        $message = new Message;

        $message->title = $request->title;
        $message->description = $request->description;

        $message->save();


        return response()->json($message, 200);


    }

    public function show($id) {
        $message = Message::findOrFail($id);

        //return view('messages.show', ['message' => $message]);
        return response()->json($message, 200);
    }

    public function destroy($id) {
        Message::FindOrFail($id)->delete();
        return response()->json(true, 200);
    }

    public function edit($id) {
        $message = Message::findOrFail($id);
        //return view('messages.edit', ['message' => $message]);
        return response()->json($message, 200);
    }

    public function update(Request $request) {
        Message::FindOrFail($request->id)->update($request->all());
        return response()->json(true, 200);
    }

}