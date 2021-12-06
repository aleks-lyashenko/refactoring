@if(session('success'))
    <div class="my-3 alert alert-success">
        {{session('success')}}
    </div>

@endif

@if(session('error'))
    <div class="my-3 alert alert-danger">
        {{session('error')}}
    </div>

@endif

@if($errors->any())
    <div class="my-3 alert alert-danger">
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
            @endforeach
        </ul>

    </div>
@endif
