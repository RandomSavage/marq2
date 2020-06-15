<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $table = 'message_controllers';

    protected $fillable = [
      'user_name', 'message_input', 'user_id'
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }
}
