@extends('master')
@section('title','Accueil')
@section('content')
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Développeur full stack</div></div>
                                <div class="fs-3 fw-light text-muted">Créateur de solutions web dynamiques</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Découvrez mon univers !</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume">Mon CV</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects">Projets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">À propos de moi</span></h2>
                                <p class="lead fw-light mb-4">Salut, je suis Farouk Manai</p>
                                <p class="text-muted">développeur Full Stack junior dévoué à la création de sites web et d'applications performants et conviviaux. Je maîtrise les technologies clés telles que HTML, CSS, JavaScript, React, PHP et Laravel pour donner vie à des projets numériques. Toujours prêt à relever de nouveaux défis, j'aime approfondir mes compétences et mettre en pratique mes connaissances pour offrir des solutions web de qualité et aider à construire le futur numérique.</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @endsection         
