<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">P3MI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" ata-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{($title === 'Home') ? 'active' : ''}}"  href="/">HOME</a>
                <a class="nav-link {{($title === 'About') ? 'active' : ''}}" href="/about">ABOUT</a>
                <a class="nav-link {{($title === 'Posts') ? 'active' : ''}}" href="/blog">BLOG</a>
            </div>
        </div>
    </div>
</nav>