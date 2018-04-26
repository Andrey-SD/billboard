@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
@section('content')
<section>
	@foreach ($adverds as $adverd)
	<div>
		<div class="div-ad">
			<a href="{{ asset('/$').$adverd->id }}">{{ $adverd->title }}</a>
			<p>{{ $adverd->description }}</p>
			
			<time datetime="{{ $adverd->created_at }}">{{ $adverd->created_at }}</time>
			<p class="author-name">{{ $adverd->author_name }}</p>
			@auth
				@if($adverd->author_name == Auth::user()->name)
					<a href="{{ asset('/delete/$').$adverd->id }}" class="edit-butt">Удалить</a>
					<a href="{{ asset('/edit/$').$adverd->id }}" class="edit-butt">Редактировать</a>
				@endif
			@endauth
		</div>
		
		
		
	</div>
	@endforeach
	<div class='pagination-div'>
		{{ $adverds->links() }}
	</div>
	
</section>
@endsection
