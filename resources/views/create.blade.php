@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section>
        <form method="POST" action="/create">
            {{ csrf_field() }}
            <input type="text" name="title" placeholder="Заголовок Вашего обявления" required>
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
            <textarea name="description" placeholder="Текст Вашего обявления" required></textarea>
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
            <button type="submit">Создать объявление</button>
        </form>
    </section>
@endsection