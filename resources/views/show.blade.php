@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>
                            Show Post
                        </h4>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <table class="table table-hover table-dark table-striped table-bordered">
                  <tr>
                    <td>Id</td>
                    <td>{{$post->id}}</td>
                  </tr>
                  <tr>
                    <td>Image</td>
                    <td><img src="{{asset('storage/'.$post->image)}}" width="200px"/></td>
                  </tr>
                  <tr>
                    <td>Title</td>
                    <td>{{$post->title}}</td>
                  </tr>
                  <tr>
                    <td>Category</td>
                    <td>{{$post->category->name}}</td>
                  </tr>
                  <tr>
                    <td>Description</td>
                    <td>{{$post->description}}</td>
                  </tr>
                  <tr>
                    <td>Publish Date</td>
                    <td>{{date('d-m-y',strtotime($post->created_at))}}</td>
                  </tr>
                </table>
            
            </div>
        </div>

    </div>
@endsection
