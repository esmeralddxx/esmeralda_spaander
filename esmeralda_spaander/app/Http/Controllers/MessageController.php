<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Show all messages
     */
    public function index()
    {
        $messages = Message::all();
        return view('messages.indexMessages', compact('messages'));
    }
    /**
     * Shows a message
     */
    public function show(Message $message)
    {
        return view('messages.showMessage', compact('message'));

    }
    /**
     * Goes to create message
     */
    public function create()
    {
        return view('messages.createMessage');
    }
    /**
     * Adds a message
     */
    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required',
            'content' => 'required',
        ]);

        Message::create($request->all());
        return redirect()->route('messages.index')
            ->with('success', 'Message created successfully.');
    }
    /**
     * Goes to edit page
     */
    public function edit(Message $message)
    {
        return view('messages.editMessage', compact('message'));
    }
    /**
     * Saves the message update
     */
    public function update(Request $request, Message $message)
    {
        $request->validate([
            'titel' => 'required',
            'content' => 'required',

        ]);
        $message->update($request->all());

        return redirect()->route('message.index')
            ->with('success', 'Message updated successfully');
    }
    /**
     * Delete message
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index')
            ->with('success', 'Message deleted successfully');
    }
}
