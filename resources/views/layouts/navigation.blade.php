<main class="header">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tel:0783516222">
                            <i class="bi bi-telephone-fill me-2"></i>
                            Contactez-moi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('files/cv.pdf') }}" class="nav-link btn bg-primary bg-opacity-25 rounded-3 ms-3 px-3 py-2 text-primary">
                            <i class="bi bi-download me-2"></i>
                            Mon CV
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</main>
