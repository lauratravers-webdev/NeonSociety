@extends('layouts.app')
@section('content')
<!---PROFILE PAGE--->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>NEON SOCIETY</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3 p-5">
                    <img src="/img/logo.png" alt="profile picture" class="rounded-circle img-fluid">
                </div>
                <div class="col-9 pt-2">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-flex align-items-center pb-3">
                            <div class="h4" >{{ $user->username }}</div>
                            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        </div>



                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
                </div>
                    @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">
                        Edit Profile
                    </a>
                    @endcan


                    <div class="d-flex">
                        <div class="pr-5"><strong>{{ $user->posts->count() }} </strong>posts</div>
                        <div class="pr-5"><strong>{{ $user->profile->followers->count() }} </strong> Followers</div>
                        <div class="pr-5"><strong>{{ $user->following->count() }}</strong> Following</div>
                    </div>
                    <div class="pt-4 font-weight-bold">
                        {{ $user->profile->title}}
                    </div>
                    <div class="">
                        {{ $user->profile->description }}
                    </div>
                    <div class="">
                        <a href="#">{{ $user->profile->url }}</a>
                    </div>
                </div>

                    <div class="row pt-4">
                        @foreach($user->posts as $post)
                        <div class="col-4 pb-4 hvr-grow">
                            <a href="/p/{{ $post->id }}">
                                <img src="/storage/{{ $post->image }}" alt="image" class="w-100">
                            </a>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </body>
</html>
@endsection
