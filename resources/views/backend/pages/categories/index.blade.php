@extends('backend.layout.master')
@section('content')

    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <a href="{{route('category.create')}}" class="btn btn-success">Create</a>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Title</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($categories as $category)
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->title}}</td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
