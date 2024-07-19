<!DOCTYPE html>
<html lang="en">
<head>
@include('user.partials.head')
</head>
<body>
    <header>
        @include('user.partials.nav')
    </header>

    <main class="container mt-4">
        <div class="row">
            <main class="col-md">
                @yield('content')
            </main>
            @if(!empty($showAside) && $showAside)
            <aside class="col-md-3">
                @if(isset($featuredArticles) && $featuredArticles->count() > 0)
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="  font-weight-bold">Tin Nổi Bật</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($featuredArticles as $article)
                                <li class="list-group-item">
                                    <a href="{{ route('user.articles.show', $article->id) }}">{{ $article->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </aside>
        @endif
        </div>
    </main>
    <footer>
        @include('user.partials.footer')
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
