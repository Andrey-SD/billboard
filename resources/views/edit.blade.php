@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush
@section('content')
<section>
	<form method="POST" action="/edit/${{ $advert->id }}">
	{{ csrf_field() }}
		<input type="text" name="title" placeholder="Заголовок Вашего обявления" value="{{ $advert->description }}" required>
		<textarea name="description" placeholder="Текст Вашего обявления" required>{{ $advert->description }}</textarea>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<a href="{{ asset('/delete/$').$advert->id }}" class="edit-butt">Удалить</a>
			</div>
			<div class="col-md-6 col-sm-6">
				
				<button class="edit-butt" type="submit">Сохранить</button>
			</div>
		</div>
	</form>
</section>
@endsection