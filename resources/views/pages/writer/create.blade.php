@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Add Writer</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('writer.store') }}" method="POST">
         @csrf
         {{-- Name --}}
         <div class="form-group">
            <label for="name" class="form-control-label">Writer Name</label>
            <input type="text" 
            name="name" 
            id="name" 
            value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Add Writer
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()