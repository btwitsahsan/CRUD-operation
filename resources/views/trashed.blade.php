@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>
                            Trashed Posts
                        </h4>
                    </div>
                    {{-- <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('posts.create') }}" class="btn btn-success mx-1">Create</a>
                        <a href="" class="btn btn-warning mx-1">Trashed</a>
                    </div> --}}
                </div>

            </div>


            <div class="card-body">
                <table class="table table-hover table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            
                            <th scope="row">{{$post->id}}</th>
                            <td>
                                <img src="{{asset('storage/'.$post->image)}}"
                                width="60px" height="60px" style="border-radius: 100%" alt="">
                            </td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
                            <td>
                                <div style="display: flex; gap: 8px; justify-content: center">
            
                                <a href="{{route('posts.restore', $post->id)}}" class="btn-sm btn-primary">Restore</a>
                                {{-- <a href="" class="btn-sm btn-danger">Delete</a> --}}
                                <form action="{{route('posts.force_delete', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-danger">Delete</button>
                                </form>
                            </div>

                            </td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
