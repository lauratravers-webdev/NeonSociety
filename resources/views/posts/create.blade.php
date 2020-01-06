@extends('layouts.app')
@section('content')
<!---POST/CREATE PAGE--->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <body>
        <main>
            <div>
                <div class="container">
                    <form action="/p" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-8 offset-2">
                                <div class="row">
                                    <h1>Add New Post</h1>
                                </div>
                                @csrf
                                <div class="form-group row">
                                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                                    <input id="caption"
                                    name="caption"
                                    type="text"
                                    class="form-control @error('caption') is-invalid @enderror"
                                    value="{{ old('caption') }}"
                                    required autocomplete="caption" autofocus>

                                    @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                                    <input type="file" class="form-control-file" id="image" name="image" required autocomplete="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row pt-4">
                                    <button formaction="/p" class="btn btn-primary" type="submit" name="button">Add New Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
@endsection
