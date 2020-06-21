<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Message;

class MessageController extends Controller {

    public function __construct() {
      $this->middleware('auth');
    }

    public function index() {
    // $messages = FoodItem::All();
    $messages = Message::paginate(3);
    return view('/messages/all', [
      'messages' => $messages
    ]);
  }

    public function create() {
      $messages = Message::All();
      return view('messages/create', [
        'messages' => $messages
      ]);
    }

    public function store(Request $request) {
      // return request()->all();
      request()->validate([
        'user_name' => ['required', 'string', 'max:255'],
        'message_input' => ['required', 'string'],
        'user_id' => ['required', 'integer']
      ]);

      $message = new Message();
      $message->user_name = $request->input('user_name');
      $message->message_input = $request->input('message_input');
      $message->user_id = $request->input('user_id');
      $message->save();
        return redirect()->back()->with(['status' => 'Message saved successfully.']);

      }

    //   public function welcome($slug) {
    // $user = User::where('id', '=', $slug)->first();
    // $messages = Message::where('user_id', '=', $user)->get();
    // return view('welcome', [
    //   "message" => $slug,
    //   "messages" => $messages
    // ]);

//     public function welcome()
// {
//     $messages = Message::with(['user'])->get();
//     $user = User::findOrFail(auth()->user()->id);
//     return view('welcome', [
//       'messages' => $messages
//     ]);
// }

public function home()
{
$user = User::all();
$messages = Message::with(['user'])->orderBy('user_id', 'asc')->get();
return view('/pages/home', [
  'messages' => $messages,
  'user' => $user
]);
}

public function edit($id) {
    $message = Message::find($id);
    return view('messages/edit', [
      'message' => $message,
    ]);
    }

    public function update($id) {
      request()->validate([
        'user_name' => ['required', 'string', 'max:255'],
        'message_input' => ['required', 'string'],
        'user_id' => ['required', 'integer']
      ]);

      $message = Message::find($id);
      $message->user_name = request('user_name');
      $message->message_input = request('message_input');
      $message->user_id = request('user_id');
      $message->save();
        return redirect('/');

      }

public function delete($id) {
       $message = Message::find($id);
       $message->delete();
       return redirect('/messages/all');
     }

// public function welcome()
// {
// $user = User::all();
// $messages = DB::table('message_controllers')->orderBy('id')->chunk(100, function ($messages) {
//
//     return view('welcome', [
//       'messages' => $messages,
//
//     ]);
//
// });
//
// }

    //   public function welcome() {
    // $user = User::find(2);
    // $messages = Message::all();
    // return view('welcome', [
    //   'user' => $user,
    //   'messages' => $messages
    // ]);
    //  }
}

//Property [profile_image] does not exist on this collection instance
