


@foreach ($messages as $message)
    <div class="authId">
      <div class="author-img">
        <img src="{{$message->$user->profile_image}}" alt="">
      </div>
      <div class="who">
        <h5>{{$message->$user->name}}</h5>
      </div>
    </div>
    <div class="comment">
      <p>{{$message->message_input}}</p>
    </div>
@endforeach
