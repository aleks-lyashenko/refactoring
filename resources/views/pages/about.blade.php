@extends('layouts/layout')

@section('title')
    @parent
@endsection

@section('header')
    @parent
    <p>Добавлено к родительскому хедеру</p>
@endsection

@section('content')
    <div class="container">
        <h1>About Page</h1>
    </div>
@endsection
