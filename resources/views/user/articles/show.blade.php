@extends('user.layouts.app')

@section('content')
    <div class="container container-body mt-4">
            <div class="row">
                <main class="col-md-9 mx-auto">
                        <h1>{{ $article->title }}</h1>
                        <p><strong>Ngày đăng:</strong> {{ $article->created_at->format('d/m/Y') }}</p>
                        <p><strong>Số lần xem:</strong> {{ $article->views }}</p>
                        <div class="text-center my-4">
                            @if($article->image)
                                <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}" width="400 px" height="800px" class="img-fluid">
                            @endif
                        </div>
                        <div>
                            {{ $article->content }}
                        </div>
                        <hr>
                        <h3>Bình luận</h3>
                        <div class="comments-container">
                            @if ($comments->count() > 0)
                                @foreach ($comments as $comment)
                                    <div class="comment">
                                        <p><strong>{{ $comment->user->name }}</strong> <span class="text-muted">({{ $comment->created_at->format('d/m/Y H:i') }})</span></p>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center">Không có bình luận nào.</div>
                            @endif
                        </div>




                        <div class="comment-form mt-4">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <textarea name="content" class="form-control" rows="3" placeholder="Viết bình luận..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                            </form>
                        </div>
                </main>
            </div>
    </div>
@endsection

