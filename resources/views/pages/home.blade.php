@extends('layouts.app')

@section('content')
    <section class="py-5 mt-5">
        <img class="svg-rect" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzI1IiBoZWlnaHQ9Ijk5MCIgdmlld0JveD0iMCAwIDcyNSA5OTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHg9IjY2My45NzMiIHk9Ii00NTQiIHdpZHRoPSIxMjcwLjAzIiBoZWlnaHQ9IjkzOSIgcng9IjE1IiB0cmFuc2Zvcm09InJvdGF0ZSg0NSA2NjMuOTczIC00NTQpIiBmaWxsPSJ1cmwoI3BhaW50MF9saW5lYXIpIi8+CjxkZWZzPgo8bGluZWFyR3JhZGllbnQgaWQ9InBhaW50MF9saW5lYXIiIHgxPSI2NjMuOTczIiB5MT0iLTQ1NCIgeDI9IjE1NTkuNjMiIHkyPSI3NTcuNDEyIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CjxzdG9wIHN0b3AtY29sb3I9IiM2QTk4RjAiLz4KPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjNDk2MURDIi8+CjwvbGluZWFyR3JhZGllbnQ+CjwvZGVmcz4KPC9zdmc+Cg==" alt="" style="    width: 40%; position: absolute; top: 50px; right: 0px; z-index: -1;">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="row px-5">
                    <div class="col-md-6">
                        <div class="fs-5">👋 Salut ! Je suis</div>
                        <h2 class="display-2 fw-bold mb-5">
                            Mathias DE BARROS
                        </h2>
                        <h5 class="display-5 mb-5">
                            Développeur web à <span class="text-danger fw-bold">Grenoble</span>, et <span class="text-primary fw-bold">partout ailleurs</span>.
                        </h5>
                        <div class="mb-5">
                            <a href="tel:0783516222" class="btn btn-lg btn-primary px-4 py-3 rounded-3">
                                <i class="bi bi-telephone-fill me-2"></i>
                                Contactez-moi
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="card border-0 rounded-4 p-4 bg-light shadow-lg">
                            <div class="card-body fs-6">
                                <div class="line my-2">
                                    <span class="text-muted">1</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;class <span class="fw-bold">Person</span> {
                                </div>
                                <div class="line my-2">
                                    <span class="text-muted">2</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function __construct__() {
                                </div>
                                <div class="line my-2">
                                    <span class="text-muted">3</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->name = "<span class="fw-bold">Mathias DE BARROS</span>";
                                </div>
                                <div class="line my-2">
                                    <span class="text-muted">4</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->traits = ["<span class="fw-bold">Web Dev</span>", "<span class="fw-bold">Music</span>", "<span class="fw-bold">CyberSecurity</span>"];
                                </div>
                                <div class="line my-2">
                                    <span class="text-muted">5</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                                </div>
                                <div class="line my-2">
                                    <span class="text-muted">6</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-5 pb-5">
        <div class="bg-dark rounded-5 py-5">
            <div class="d-flex justify-content-center align-items-center py-5 my-5">
                <div class="col-8 text-center">
                    <h4 class="display-4 fw-bold text-light text-uppercase mb-5">
                        🔨 Artisan web passionné
                    </h4>
                    <p class="text-light fs-2 pt-5">
                        Développeur web passionné, je créé du code de qualité, lisible, testé et facile à faire évoluer.
                        <br><br>
                        J’adhère entièrement à la philosophie de <b>l'artisanat du logiciel</b>, afin de vous livrer un travail sur lequel vous pourrez évoluer en toute sérénité pour la suite de votre projet.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 mt-5">
        <img src="{{ asset('images/home-skills-bg.png') }}" alt="" class="w-100">
    </section>
    <section class="bg-dark py-5">
        <div class="container my-5 ">
            <h2 class="display-2 text-light mb-5">😎 A propos de moi </h2>
            <p class="fs-3 text-light mb-5">
                Salut! je suis Mathias DE BARROS. <br>
                Je suis passionné par la <b>sécurité numérique</b> et la <b>création de site web</b>. <br><br>
                En effet, j'ai pu accumuler plus de 2000 points sur la célèbre plateforme <a href="https://www.root-me.org/Math_syo" class=" text-light">Root-Me.org</a>.
                Je me positionne donc à la 3000e place sur 170 000+ utilisateurs. <br>
                De plus, je concois des applications web depuis plus de 3 ans d'auto apprentissage, d'innovations et d'améliorations. <br><br>
                Je propose mes services car je me suis lassé de créer des petits projets personnels ça et là,
                je préfère que mes compétences vous servent directement.
            </p>
            <a href="tel:0783516222" class="btn btn-lg btn-light px-4 py-3 rounded-3">
                <i class="bi bi-telephone-fill me-2"></i>
                Contactez-moi
            </a>
        </div>
    </section>

    {{-- <section class="my-5 py-5">
        <div class="container">
            <div class="border-top border-start border-primary border-opacity-25 p-5" style="--bs-border-width: 25px;">
                <h2 class="display-3 ">Une gestion de projet organisée</h2>
                <h4>pour un déroulement fluide et efficace.</h4>
            </div>
        </div>
    </section> --}}

    <section class="py-5 my-5">
        <div class="container py-5 my-5">
            <h2 class="display-2 mb-5">
                🛠️ Quelques réalisations
            </h2>
            <div class="pt-5">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <img src="{{ asset('images/project-ordonnances.png') }}" alt="" class="w-100 rounded-4">
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h3 class="text-uppercase fw-bold mb-2">
                                Dr. Philippe DRANSART
                            </h3>
                            <h3 class="text-muted mb-3">
                                Gestionnaire d'ordonnances et de patients en ligne personnalisé
                            </h3>
                            <div>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #F9322C">
<i class="bi bi-boxes me-2"></i>
                                    Laravel 9
                                </span>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #7530F8">
<i class="bi bi-bootstrap me-2"></i>
                                    Bootstrap 5
                                </span>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #FA71A9">
                                    <i class="bi bi-stars me-2"></i>
                                    Livewire
                                </span>
                            </div>
                        </div>
                        <p class="fs-5">
                        </p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <img src="{{ asset('images/project-arvateis.png') }}" alt="" class="w-100 rounded-4">
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h3 class="text-uppercase fw-bold mb-2">
                                ARVATEIS
                                <a href="https://arvateis.deokonai.fr" class="ms-2 fs-6" target="_blank">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </h3>
                            <h3 class="text-muted mb-3">
                                Portfolio pour un artiste de rue
                            </h3>
                            <div>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #F9322C">
                                    <i class="bi bi-boxes me-2"></i>
                                    Laravel 9
                                </span>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #7530F8">
                                    <i class="bi bi-bootstrap me-2"></i>
                                    Bootstrap 5
                                </span>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #FA71A9">
                                    <i class="bi bi-stars me-2"></i>
                                    Livewire
                                </span>
                            </div>
                        </div>
                        <p class="fs-5">
                        </p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <img src="{{ asset('images/project-rtesdevoirs.png') }}" alt="" class="w-100 rounded-4">
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h3 class="text-uppercase fw-bold mb-2">
                                RTesDevoirs
                                <a href="https://github.com/Mathsyo/RTesDevoirs" class="ms-2 fs-6" target="_blank">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </h3>
                            <h3 class="text-muted mb-3">
                                Liste dynamique des devoirs attribués en cours
                            </h3>
                            <div>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #F9322C">
                                    <i class="bi bi-boxes me-2"></i>
                                    Laravel 9
                                </span>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #7530F8">
                                    <i class="bi bi-bootstrap me-2"></i>
                                    Bootstrap 5
                                </span>
                                <span class="text-light px-3 py-1 rounded-pill mx-1" style="background-color: #FA71A9">
                                    <i class="bi bi-stars me-2"></i>
                                    Livewire
                                </span>
                            </div>
                        </div>
                        <p class="fs-5">
                            Cette application permet aux étudiants de Réseaux et Télécommunications de Première année
                            d'ajouter, voir et marqué comme "fait" les devoirs attribués en classe.
                            Elle permet également de lister les professeurs et les cours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container py-5 my-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-center text-uppercase fw-bold mb-2">
                        😉 On travaille ensemble ?
                    </h1>
                    <h3 class="text-center mb-5">
                        Écrivez-moi sur <a href="mailto:mathias.debarros@deokonai.fr" class="text-decoration-none">mathias.debarros@deokonai.fr</a>
                    </h3>
                    <form action="{{ route('messages.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Votre email :</label>
                            <input type="email" name="email" class="form-control p-2 px-3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Votre message : </label>
                            <textarea type="email" name="content" class="form-control p-2 px-3" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
