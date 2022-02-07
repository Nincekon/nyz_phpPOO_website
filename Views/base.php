<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site personnel de Nincekon YORO Zandé">
    <meta name="author" content="Seeker225 AIJNWJ">
    
    <!-- Bootstrap CSS -->
    <link href=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap/css/bootstrap.min.css' ?>  rel="stylesheet">
    <link rel="stylesheet" href=<?= ASSETS . DIRECTORY_SEPARATOR . 'css/main.css' ?> >

    <title>Hello, world! | Seeker225 </title>
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Seeker225 AIJNWJ</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="index.php">Accueil</a>
                <a class="p-2 link-secondary" href="#">Biographie</a>
                <a class="p-2 link-secondary" href="#"></a>
                <a class="p-2 link-secondary" href="index.php?page=/portfolio">Portfolio</a>
                <a class="p-2 link-secondary" href="#"></a>
                <a class="p-2 link-secondary" href="index.php?page=/articles">Blog</a>
                <a class="p-2 link-secondary" href="#"></a>
                <a class="p-2 link-secondary" href="#"></a>
                <a class="p-2 link-secondary" href="#">Contact</a>
            </nav>
        </div>
    </div>
<body>

    <section class="bg-dark py-5">
        
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">A Bootstrap 5 template for modern businesses</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..."></div>
            </div>
        </div>
            
    </section>

    <div class="container py-3">
        <?= $content ?>

        
        
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Working with Start Bootstrap templates has saved me tons of development time when building new projects! Starting with a Bootstrap template just makes things easier!"</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="...">
                                <div class="fw-bold">
                                    Tom Ato
                                    <span class="fw-bold text-primary mx-1">/</span>
                                    CEO, Pomodoro
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">From our blog</h2>
                            <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="...">
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Blog post title</h5></a>
                                <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="...">
                                        <div class="small">
                                            <div class="fw-bold">Kelly Rowan</div>
                                            <div class="text-muted">March 12, 2021 · 6 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="...">
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Another blog post title</h5></a>
                                <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="...">
                                        <div class="small">
                                            <div class="fw-bold">Josiah Barclay</div>
                                            <div class="text-muted">March 23, 2021 · 4 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="...">
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">The last blog post title is a little bit longer than the others</h5></a>
                                <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="...">
                                        <div class="small">
                                            <div class="fw-bold">Evelyn Martinez</div>
                                            <div class="text-muted">April 2, 2021 · 10 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to action-->
                <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                    <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                        <div class="mb-4 mb-xl-0">
                            <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                            <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                        </div>
                        <div class="ms-xl-4">
                            <div class="input-group mb-2">
                                <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter">
                                <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                            </div>
                            <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <a href="https://twitter.com/nincekon" target="_blank" rel="noopener noreferrer">
                        <img src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap-icons/twitter.svg' ?>  alt="Twitter" width="32" height="32">
                    </a> &nbsp;
                    <a href="https://www.facebook.com/wilfried.yoro.56" target="_blank" rel="noopener noreferrer">
                        <img src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap-icons/facebook.svg' ?>  alt="Facebook" width="32" height="32">
                    </a> &nbsp;
                    <a href="https://github.com/TheSeeker225/" target="_blank" rel="noopener noreferrer">
                        <img src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap-icons/github.svg' ?>  alt="Github" width="32" height="32">
                    </a> &nbsp;
                    <a href="https://www.linkedin.com/in/zand%C3%A9-nincekon-yoro-44281110b/" target="_blank" rel="noopener noreferrer">
                        <img src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap-icons/linkedin.svg' ?>  alt="Linkedin" width="32" height="32">
                    </a>
                </div>
                <div class="col-6 col-md">
                    <h5>Portfolio</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Project One</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Project Two</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Project Three</a></li> 
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Articles</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Chrétien</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Informatique</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Musique</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>A propos</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Biographie</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Portfolio</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <p class="float-end"><a href="#">Back to top</a></p>
            <p class="d-block mb-3 text-muted">
                &copy; 2018–<script>document.write((new Date).getFullYear());</script> Seeker225 AIJNWJ 
                &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap/js/bootstrap.bundle.min.js' ?> ></script>

</body>
</html>
