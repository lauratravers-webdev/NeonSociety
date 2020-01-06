@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Posts/Show</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-8">
                        <img src="/storage/{{ $post->image }}" alt="image" class="w-100">
                </div>
                <div class="col-4">
                    <h3>{{ $post->user->username }}</h3>
                    <p>{{ $post->caption }}</p>

                </div>
            </div>

        </div>
    </body>
</html>
@endsection
