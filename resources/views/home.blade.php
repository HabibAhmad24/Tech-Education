@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Your Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                      <strong>{{$message}}</strong>
                    </div>
                    @endif
                    <a href="{{url('/home/create')}}" class="btn btn-primary">Create New Post</a>
                    {{-- <a href="{{route('home')}}" class="btn btn-primary">Dashboard</a> --}}

                    <h2 class="text-center">Your Posts</h2>

                    <table id="post" style="text-align: center">
                        <tr style="align-items: center">
                          <th style="text-align: center">Title</th>
                          <th style="text-align: center">Description</th>
                          <th style="text-align: center">Post Category</th>
                          <th style="text-align: center">Images</th>
                          <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        @foreach ($posts as $post)
                            
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>
                                @if(empty($post->categories))
                                    No category Selected
                                @else
                                {{-- name --}}
                                    {{ $post->categories }} 
                                @endif
                            </td>
                            <td><img src="post/{{$post->image}}" alt="Loading" class="rounded-circle" width="50" height="50" style="border-radius: 20px"></td>
                            {{-- <td><a href="" class="btn btn-success">Show</a></td> --}}
                            <td><a href="home/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td><a href="home/{{$post->id}}/delete" class="btn btn-danger" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                
                                {{-- <script>
                                    public function del()

                                    Swal.fire({
                                        title: "Delete",
                                        text: "Are You Sure To Delete the Record?",
                                        icon: "question"
                                    });
                                    </script> --}}
                                    {{ __('Delete') }}
                            </a></td>
                            
                            {{-- <td><a href="home/{{$post->id}}/delete" class="btn btn-danger">Delete</a></td> --}}
                        </tr> 
                        @endforeach
                    </table>

                    {{-- {{ __('Welcome') }} --}}



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
