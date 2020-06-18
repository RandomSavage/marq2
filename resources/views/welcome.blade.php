<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>marq2</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script>
        window.onload = function () {
          var clockElement = document.getElementById( "clock" );

          function updateClock ( clock ) {
            clock.innerHTML = new Date().toLocaleTimeString();
          }

          setInterval(function () {
              updateClock( clockElement );
          }, 1000);

        }

        </script>
        <link rel="stylesheet" href="styles.css">
      </head>
        <body>
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
                          <img src="../../images/ponyMaskAlpha.png" alt="">
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
        </body>
      </html>
