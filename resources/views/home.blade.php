@extends('user.layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mt-4">Tin mới nhất</h2>
        <div class="row">
            @foreach ($latestArticles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($article->image)
                            <img src="{{ asset('storage/images/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('user.articles.show', $article->id) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="mt-4">Tin xem nhiều</h2>
        <div class="row">
            @foreach ($popularArticles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($article->image)
                            <img src="{{ asset('storage/images/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('user.articles.show', $article->id) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@php
    $showAside = true;
@endphp
