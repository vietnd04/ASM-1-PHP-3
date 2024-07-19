    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="/">
            <img src="https://pbs.twimg.com/profile_images/1204704164745363456/WdAC_jIV_400x400.png"  height="60">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.categories.show', $category->id) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <form class="form-inline my-2 my-lg-0" method="GET" action="{{ url('/search') }}">
                <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a href="{{ route('login') }}" class="btn btn-outline-light ml-2">Đăng Nhập</a>
        </div>
    </nav>
