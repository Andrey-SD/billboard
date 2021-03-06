@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
@section('content')
<section>
	<div>
		<div class="div-ad">
			<a href="{{ asset('/show/$').$advert->id }}">{{ $advert->title }}</a>
			<p>{{ $advert->description }}</p>
			
			<time datetime="{{ $advert->created_at }}">{{ $advert->created_at }}</time>
			<p class="author-name">{{ $advert->author_name }}</p>
			@auth
				@if($advert->author_name == Auth::user()->name)
					<a href="{{ asset('/delete/$').$advert->id }}" class="edit-butt">Удалить</a>
					<a href="{{ asset('/edit/$').$advert->id }}" class="edit-butt">Редактировать</a>
				@endif
			@endauth
		</div>
		
		
		
	</div>
</section>
@endsection