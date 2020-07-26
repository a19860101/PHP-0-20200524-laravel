<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('post.index')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('post.create')}}">新增</a>
                </li>
                @endauth
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('product.index')}}">產品列表</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('product.create')}}">新增產品</a>
                </li>
            </ul>
        </div>
    </nav>