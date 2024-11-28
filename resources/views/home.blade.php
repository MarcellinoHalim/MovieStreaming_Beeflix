@extends('layout')
@section('content')
@if (@session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div> 
@endif

<div class="row mt-2 mb-4">
    <div class="col">
        <img src="{{ asset('images/banner.jpg') }}" alt="" class="mb-1 rounded w-100">
    </div>
</div>
<div class="row my-4">
    <div class="col-4"></div>
    <div class="col-4 d-flex justify-content-center align-items-center">
        <a class="btn btn-dark w-100" href="{{ route('movie.input') }}">Add New Movie</a>
    </div>
</div>
<div class="row">
    @foreach ($movies as $movie)
        <div class="col-3 my-2 d-flex justify-content-center">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset($movie->photo) }}" class="card-img-top" alt="" style="height: 350px; width: 100%; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$movie->genre->name}}</h6>
                    <p class="card-text flex-grow-1">{{$movie->description}}</p>
                    <p class="text-muted">{{$movie->publish_date}}</p>               
                    <a href="{{ route('movie.delete', $movie->id) }}" class="btn btn-danger w-100">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    {{ $movies->links() }}
</div>

@endsection
