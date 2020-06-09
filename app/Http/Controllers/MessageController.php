<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class MessageController extends Controller {

    public function create() {
      $messages = User::All();
      return view('messages/create', [
        'messages' => $messages
      ]);
    }
}
