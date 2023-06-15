@extends('welcome')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/panelm.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Maven+Pro:500' rel='stylesheet' type='text/css'>
    <div class="container">
        <section class="list-wrap">

            <label for="search-text">Lista de usuarios</label>
            <input type="text" id="search-text" placeholder="buscar" class="search-box">
            <span class="list-count"></span>

            <ul id="list">
                @foreach ($users as $user)
                    <a href="{{route('admin-listuser',['id'=>$user->id])}}"><li class="in">{{ $user->name }}</li></a>
                @endforeach
                <span class="empty-item">sin resultados</span>
            </ul>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        (function(){
            $(document).ready(function () {
                var jobCount = $('#list .in').length;
                $('.list-count').text(jobCount + ' usuarios');

                $("#search-text").keyup(function () {
                    var searchTerm = $("#search-text").val();
                    var listItem = $('#list').children('li');

                    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                    $.extend($.expr[':'], {
                        'containsi': function (elem, i, match, array) {
                            return (elem.textContent || elem.innerText || '').toLowerCase()
                                .indexOf((match[3] || "").toLowerCase()) >= 0;
                        }
                    });

                    $("#list li").not(":containsi('" + searchSplit + "')").each(function (e) {
                        $(this).addClass('hiding out').removeClass('in');
                        setTimeout(function () {
                            $('.out').addClass('hidden');
                        }, 300);
                    });

                    $("#list li:containsi('" + searchSplit + "')").each(function (e) {
                        $(this).removeClass('hidden out').addClass('in');
                        setTimeout(function () {
                            $('.in').removeClass('hiding');
                        }, 1);
                    });

                    var jobCount = $('#list .in').length;
                    $('.list-count').text(jobCount + ' items');

                    if (jobCount === '0') {
                        $('#list').addClass('empty');
                    } else {
                        $('#list').removeClass('empty');
                    }
                });
            });
        })();
    </script>

@endsection
