@extends('layouts.app')

@section('content')

<div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Edit Messages</h2>
                        <p class="pageheader-text">Freedom to Edit your Speech.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">Messages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Messages</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit this Item</h5>
                            <div class="card-body">
                              <form method="POST" action="/messages/{{$message->id}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                      <label for="inputtitle">user_id</label>
                                        <input id="inputtitle" type="text" class="form-control form-control-lg @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id', $message->user_id) }}" required autocomplete="user_id" autofocus placeholder="user_id">
                                        @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="inputprice">user_name</label>
                                        <input id="inputprice" type="text" class="form-control form-control-lg @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name', $message->user_name) }}" required autocomplete="user_name" autofocus placeholder="user_name">
                                        @error('user_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                      <div class="form-group">
                                        <label for="inputdescription">message_input</label>
                                          <textarea id="inputdescription" type="text" class="form-control form-control-lg @error('message_input') is-invalid @enderror" name="message_input" value="" required autocomplete="description" autofocus placeholder="message_input">{{ old('message_input', $message->message_input) }}></textarea>
                                          @error('message_input')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6 pl-0">
                                            <p class="text-right">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic form -->
                    <!-- ============================================================== -->
                </div>
              </div>

@endsection
