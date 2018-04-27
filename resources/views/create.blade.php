@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush
@section('content')
<section>
	<form method="POST" action="/create">
	{{ csrf_field() }}
		<input type="text" name="title" placeholder="Заголовок Вашего обявления" required>
		<textarea name="description" placeholder="Текст Вашего обявления" required></textarea>
		<button type="submit">Создать объявление</button>
	</form>
</section>
@endsection