<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <p>Создатель &copy;AleksLyashenko</p>
        <p class="text-muted">{{date('d-M-Y H-i-s')}}</p>
        <p class="float-right mb-1">
            <a href="#">Наверх</a>
        </p>
    </div>
    <div class="container">
        <ul>
            @foreach($rubrics as $rubric)
                <li>
                    <a href="">{{$rubric->title}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</footer>
