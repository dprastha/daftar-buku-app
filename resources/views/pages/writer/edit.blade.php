@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Edit Writer</strong>
      <small>{{ $item->name }}</small>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('writer.update', $item->id) }}" method="POST">
         @method('PUT')
         @csrf
         {{-- Nama --}}
         <div class="form-group">
            <label for="name" class="form-control-label">name</label>
            <input type="text" 
            name="name" 
            id="name" 
            value="{{ old('name') ? old('name') : $item->name }} " class="form-control @error('name') is-invalid @enderror">
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
         </div>

         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Edit Writer
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()