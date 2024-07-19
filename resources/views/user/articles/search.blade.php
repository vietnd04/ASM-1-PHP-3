@extends('user.layouts.app')

@section('content')
    <h1>Kết Quả Tìm Kiếm</h1>
    <div class="row">
        @if ($articles->count() > 0)
            @foreach ($articles as $article)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        @if($article->image)
                            <img src="{{ asset('storage/images/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text flex-grow-1">{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('user.articles.show', $article->id) }}" class="btn btn-primary mt-auto">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12 text-center my-4">
                <h5>Không tìm thấy kết quả nào.</h5>
            </div>
        @endif
    </div>
@endsection

@php
    $showAside = false;
@endphp
