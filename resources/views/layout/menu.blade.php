<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">CredBank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/page/institucional') }}">Institucional</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav" aling="left">
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
    </div>
</nav>
