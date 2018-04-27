@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section>
        @foreach ($adverts as $advert)
        <div>
            <div class="div-ad">
                <a href="{{ asset('/show/$').$advert->id }}">{{ $advert->title }}</a>
                <p class="descript">{{ $advert->description }}</p>
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
        @endforeach
        <div class='pagination-div'>
            {{ $adverts->links() }}
        </div>
    </section>
@endsection
