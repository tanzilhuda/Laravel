<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="/posts/create">create post</a>
            <a class="nav-link" href="/register">register</a>
            <a class="nav-link" href="/login">Login</a>

            @if(Auth::check())

            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
            <a class="nav-link ml-auto" href="/logout">Logout</a>

            @endif
        </nav>
    </div>
</div>