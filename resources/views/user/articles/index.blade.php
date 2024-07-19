@extends('user.layouts.app')

@section('content')
    <h1>Tất cả Bài Viết</h1>
    <div class="row">
        @foreach ($articles as $article)
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

    <div class="d-flex justify-content-center mt-4">
        {{ $articles->appends(request()->query())->links('pagination::simple-bootstrap-4') }}
    </div>
@endsection
