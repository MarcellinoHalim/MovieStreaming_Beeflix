@extends('layout')
@section('content')
    @if (@session('success'))
    <div class="alert alert-success">
        Data Saved!
    </div> 
    @endif

    <form action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select name="genre" class="form-select" aria-label="select example">
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}" {{old('genre') == $genre->id ? 'selected': ''}}>
                        {{$genre->name}}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">Example invalid select feedback</div>
            @error('genre')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input class="form-control" type="file" name="photo" id="photo" required>
            @error('photo')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description">{{old('description')}}</textarea>
            @error('description')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="publish_date" class="form-label">Publish Date</label>
            <input type="date" class="form-control" name="publish_date" id="publish_date" value="{{old('publish_date')}}">
            @error('publish_date')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <input class="btn btn-dark" type="submit" value="Submit">
    </form>
@endsection