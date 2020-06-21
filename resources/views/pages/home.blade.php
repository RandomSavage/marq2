@extends('layouts.main')

@section('title')
  Marq2 - MessageBoard
@endsection

@section('content')
<div class="container">
  <div class="header-wrapper">
    <section class='top-header'>
      <div class="left-info">
        <span class="burger" style="font-size:30px;cursor:pointer">&#9776;</span>
      </div>
      <div class="middle-info">
        <div class="hotbox">
          <marquee behavior="alternate" direction="right" scrollamount="1">
            <div class="img-box">
              <div class="img">
                <img src="../../images/mail.jpg" alt="">
              </div>
            </div>
          </marquee>
        </div>
      </div>
      <div class="right-info">
        <span id="clock"></span>
      </div>
    </section>
    <section class='bottom-header'>
    </section>
    <div id="feedback">
      <marquee behavior="scroll" direction="up" scrollamount="3">
        @foreach ($messages as $message)
        <section class="marqee-section">
          <div class="authId">
            <div class="author-img">
              <img src="{{$message->user->profile_image}}" alt="">
            </div>
            <div class="who">
              <h5>{{$message->user->name}}</h5>
            </div>
          </div>
          <div class="hands">
            <div class="thumbs-up">
              <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              <p>1</p>
            </div>
            <div class="thumbs-down">
              <i class="fa fa-thumbs-down" aria-hidden="true"></i>
              <p>2</p>
            </div>
          </div>
          <div class="comment">
            <p>{{$message->message_input}}</p>
          </div>
    </section>
    @endforeach
  </marquee>
  </div>
  <footer>
    <form class="" action="index.html" method="post">

    </form>
  </footer>
</div>
@endsection
