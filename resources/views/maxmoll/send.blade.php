@extends('layouts.layout')

@section('title')
    @parent{{$title}}
@endsection

@section('content')
    <div class="container">
        <form method="post" action="{{route('maxmoll.send')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Your message</label>
                <textarea type="text" class="form-control" id="text" name="text" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
