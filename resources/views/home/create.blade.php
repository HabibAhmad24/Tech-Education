@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-bottom: 20px !important;">
            {{-- <a href="{{route('home')}}" class="btn btn-primary">Dashboard</a> --}}
            <br>

            <div class="card" >
                <div class="card-header">{{ __('Create New Post') }}</div>
                

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


                    <form action="/home/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" >Title</label>
                            <input type="text" name="title" id="" class="form-control" value="{{old('title')}}">
                             @if ($errors->has('title'))
                             <span class="text-danger">{{$errors->first('title')}}</span>
                                 
                             @endif
                             <br>
                            <label for="" >Description</label>
                            <textarea class="form-control" name="description" rows="4" >{{old('description')}}</textarea>
                            {{-- <input type="text" name="description" id="" class="form-control"> --}}
                            @if ($errors->has('description'))
                            <span class="text-danger">{{$errors->first('description')}}</span>
                                
                            @endif
                            <br>
                            <label for="" style="color: white">Category</label>
                              <br>
                              <div class="dropdown" style="color: white">
                              <select class="form-select" aria-label="Default select example"  name="category" value= "{{old('category')}}" required>
                                
                                <option >Select Category</option>
                                <option value="Web Development" >Web Development</option>
                                <option value="Android Development">Android Development</option>
                                <option value="Data Science">Data Science</option>
                                <option value="MERN Development">MERN Development</option>
                                <option value="PHP/Laravel Development">PHP/Laravel Development</option>
                                <option value="My SQL">My SQL</option>
                                <option value="Python Development">Python Development</option>

                                
                              </select>
                            </div>
                            @if ($errors->has('category'))
                            <span class="text-danger">{{$errors->first('category')}}</span>
                                
                            @endif
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}"/>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                                
                            @endif
                            <br>
                            <div class="text-center">
                            <input type="submit" value="Submit" name="btn_submit" class="btn btn-success">
                            <input type="reset" value="Reset"  class="btn btn-danger">
                            <a href="/home" class="btn btn-secondary">Cancel</a>
                        </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
