@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-3 p-5">
              <img src="https://instagram.fzag1-1.fna.fbcdn.net/vp/525ea6a99d400296f5e523317a65ef60/5E169B87/t51.2885-19/s150x150/39381491_2016744545013825_6121577575153139712_n.jpg?_nc_ht=instagram.fzag1-1.fna.fbcdn.net" class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username ?? 'hey'}}</h1>
                    <a href="/p/create">Add new post</a>
                </div>
                <div class="d-flex ">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>

                    <div class="pr-5"><strong>111</strong>followers</div>
                    <div class="pr-5"><strong>270</strong>following</div>


                </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title ?? 'hey'}}</div>
                <div>{{$user->profile->description  ?? 'hey'}}
                    </div>
                <div><a href="{{$user->profile->url  ?? 'hey'}}">{{$user->profile->url  ?? 'hey'}}</a> </div>

            </div>

                <div class="row pt-5 pb-3">

                    @foreach($user->posts as $post)


                    <div class="col-4">
                        <a href="/p/{{$post->id}}">
                            <img src="/storage/{{$post->image}}" class="w-100 pb-xl-4">
                        </a>


                    </div>

                        @endforeach

                </div>

        </div>

    </div>
@endsection
