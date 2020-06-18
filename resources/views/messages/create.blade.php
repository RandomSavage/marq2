<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>create</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
    <h1>Create a new Message</h1>
  </header>
  <main>

    <form id="Msg" method="POST" action="{{ route('messages.create.store') }}">
       @csrf



      <div><label>Message Number: <br><input type="text" @error('user_id') is-invalid @enderror name="message_number" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus placeholder="user_id"></label></div>

      <div><label>User Name: <br><input type="text" @error('user_name') is-invalid @enderror name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus placeholder="user_name"></label></div>

      <div><label>Message:<br>
          <textarea form="Msg" @error('message_input') is-invalid @enderror name="message_input" value="{{ old('message_input') }}" required autocomplete="message_input" autofocus placeholder="message_input" rows="10" cols="30">
      When the sky's cotton candy melts and stirs into a sipping-pink lemonade.
      </textarea>
        </label></div>
      <div><button type="submit" name="submit">Save</button></div>
    </form>

  </main>
  <footer>
    <a href="index.html">Back to main menu</a>
  </footer>
</body>

</html>
  </body>
</html>
