@extends('layouts.default')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
{{--    @include('common.errors')--}}

    <!-- Форма новой задачи -->
        <form action="{{ route('news.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="news-name" class="col-sm-3 control-label">News</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="title-name" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="article" id="article-name" class="form-control">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> ADD news
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection