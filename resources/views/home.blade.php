@extends('layouts.layout')

@section('title')
    @parent{{$title}}
@endsection

@section('content')

    <div class="container">
        @include('layouts.alert')
    </div>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1>{{$title}}</h1>
                <p class="lead text-muted">Что-то краткое о коллекции ниже - ее содержание, создатель и т.д. Сделайте ее короткой и увлекательной, но не слишком короткой, чтобы люди не пропустили ее полностью.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Призыв к действию</a>
                    <a href="#" class="btn btn-secondary my-2">Второе действие</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($posts as $post)
                    <div class="col">

                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveaspectratio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{$post->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
                                    </div>
                                    <small class="text-muted">
{{--                                        {{$post->created_at}}--}}
                                        {{$post->getPostDate()}}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection


{{--       Управляющие структуры blade         --}}
{{--                @if(count($data1) > 20)--}}
{{--                    В массиве больше 20 элементов--}}
{{--                @else--}}
{{--                   В массиве меньше или равно 20 элементов--}}
{{--                @endif--}}
{{--
                    @empty($_GET)--}}
{{--                    Array GET empty--}}
{{--                @endempty--}}

{{--                @foreach($data2 as $item=>$value)--}}
{{--                    {{$item}}--}}
{{--                @endforeach--}}

{{--                @for($i=0;$i<count($data1);$i++)--}}
{{--                    @if($data1[$i] % 2 == 0)--}}
{{--                    @continue--}}
{{--                    @endif--}}
{{--                    {{$data1[$i]}}--}}
{{--                @endfor--}}
