@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">

      <div class="row">
          <div class="col-8">
              <img src="/storage/{{ $post->image }}" alt="">
          </div>
      </div>
    </div>
@endsection
