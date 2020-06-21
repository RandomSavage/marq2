@extends('layouts.app')

@section('content')

    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Messages</h2>
                    <p class="pageheader-text">Edit and Delete</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Messages</li>
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
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">All Messages</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <th scope="row">{{$message->id}}</th>
                                            <td>{{$message->user_name}}</td>
                                            <td>{{$message->message_input}}</td>
                                            <td>{{date('m/d/Y', strtotime($message->updated_at))}}</td>
                                            <td><a href="/messages/{{$message->id}}/edit"><i class="far fa-edit"></i></a></td>
                                            <td>
                                              <!-- <a href="/admin/item/{{$message->id}}/delete" onclick="if(!  confirm('Are you sure you want to delete category?')) {return false;}"><i class="fas fa-trash-alt"></i></a> -->
                                            <a href="#"
                                               onclick="event.preventDefault();
                                                              if(!  confirm('Are you sure you want to delete item?')) {return false;} else {
                                                             document.getElementById('delete-item-{{$message->id}}').submit()};">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            <form id="delete-item-{{$message->id}}" action="/messages/all/{{$message->id}}/delete" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                            {{$messages->links()}}
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- striped table -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end striped table -->
                <!-- ============================================================== -->
            </div>

@endsection
