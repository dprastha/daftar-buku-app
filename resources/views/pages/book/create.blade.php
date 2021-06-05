@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Add Book</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         {{-- Id --}}
         <div class="form-group">
            <label for="id_writer" class="form-control-label">Writer Name</label>
            <select name="id_writer" id="id_writer" class="form-control @error('id_writer') is-invalid @enderror">
               @foreach ($writers as $writer)
                  <option value="{{ $writer->id }}">{{$writer->name}}</option>
               @endforeach
            </select>
            @error('id_writer') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Title --}}
         <div class="form-group">
            <label for="title" class="form-control-label">Title</label>
            <input type="text" 
            name="title" 
            id="title" 
            value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
            @error('title') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Genre --}}
         <div class="form-group">
            <label for="genre" class="form-control-label">Genre</label>
            <input type="text" 
            name="genre" 
            id="genre" 
            value="{{ old('genre') }}" class="form-control @error('genre') is-invalid @enderror">
            @error('genre') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Pages --}}
         <div class="form-group">
            <label for="pages" class="form-control-label">Pages</label>
            <input type="number" 
            name="pages" 
            id="pages" 
            value="{{ old('pages') }}" class="form-control @error('pages') is-invalid @enderror">
            @error('pages') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Publish Time --}}
         <div class="form-group">
            <label for="publish_date" class="form-control-label">Publish Date</label>
            <input type="date" 
            name="publish_date" 
            id="publish_date" 
            value="{{ old('publish_date') }}" class="form-control @error('publish_date') is-invalid @enderror">
            @error('publish_date') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Picture --}}
         <div class="form-group">
            <label for="picture" class="form-control-label">Picture</label>
            <input type="file" 
            name="picture" 
            id="picture" 
            value="{{ old('picture') }}"
            accept="image/*"
            class="form-control @error('picture') is-invalid @enderror">
            @error('picture') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Add Book
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()