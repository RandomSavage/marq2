<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageController extends Model {

    protected $table = 'message_controllers';

    protected $fillable = [
      'user_name', 'message_input', 'user_id'
    ];

    public function messages() {
      return $this->belongsTo('App\User');
    }
}
