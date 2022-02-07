<?php $post = $params['post'][0]; ?>

<nav aria-label="breadcrumb" class="border-bottom">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php"> Accueil </a></li>
        <li class="breadcrumb-item"><a href="index.php?page=/articles"> Mes articles </a></li>
        <li class="breadcrumb-item active" aria-current="page"> <?= $post->title ?> </li>
    </ol>
</nav>

<div class="row g-5">
    <div class="col-md-8">

        <article class="blog-post">
            <!-- Post header-->
            <header class="mb-4">
                <!-- Post title-->
                <h2 class="blog-post-title fw-bolder mb-1"><?= $post->title ?></h2>
                <!-- Post meta content-->
                <div class="blog-post-meta text-muted fst-italic mb-2">
                    <?= $post->createdAt ?> by <a href="https://twitter.com/nincekon" target="_blank">@nincekon</a>
                </div>
                <!-- Post categories-->
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
            </header>
            <!-- Preview image figure-->
            <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/700x350/ced4da/6c757d.jpg" alt="..." /></figure>

            <?= $post->content ?>
        </article>

        <!-- Comments section-->
        <section class="mb-5">
            <div class="card bg-light">
                <div class="card-body">
                    <!-- Comment form-->
                    <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                    <!-- Comment with nested comments-->
                    <div class="d-flex mb-4">
                        <!-- Parent comment-->
                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                            <div class="fw-bold">Commenter Name</div>
                            If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                            <!-- Child comment 1-->
                            <div class="d-flex mt-4">
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                </div>
                            </div>
                            <!-- Child comment 2-->
                            <div class="d-flex mt-4">
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    When you put money directly to a problem, it makes a good headline.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single comment-->
                    <div class="d-flex">
                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                            <div class="fw-bold">Commenter Name</div>
                            When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav class="blog-pagination" aria-label="Pagination">
            <a class="btn btn-outline-primary" href="#">Précédent</a>
            <a class="btn btn-outline-secondary disabled">Suivant</a>
        </nav>

    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">
                    Customize this section to tell your visitors a little bit about your publication,
                     writers, content, or something else entirely. Totally up to you.
                </p>
            </div>


            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!"> Chrétien </a></li>
                                <li><a href="#!"> Informatique </a></li>
                                <li><a href="#!"> Musique </a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2021</a></li>
                    <li><a href="#">February 2021</a></li>
                    <li><a href="#">January 2021</a></li>
                    <li><a href="#">December 2020</a></li>
                    <li><a href="#">November 2020</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li>
                        Github
                        <a href="https://github.com/TheSeeker225/" target="_blank" rel="noopener noreferrer">
                            <img src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap-icons/box-arrow-up-right.svg' ?>  alt="Link" width="12" height="12">
                        </a></li>
                    <li>
                        Twitter
                        <a href="https://twitter.com/nincekon" target="_blank" rel="noopener noreferrer">
                            <img src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap-icons/box-arrow-up-right.svg' ?>  alt="Link" width="12" height="12">
                        </a></li>
                    <li>
                        Facebook
                        <a href="https://www.facebook.com/wilfried.yoro.56" target="_blank" rel="noopener noreferrer">
                            <img src=<?= ASSETS . DIRECTORY_SEPARATOR . 'bootstrap-icons/box-arrow-up-right.svg' ?>  alt="Link" width="12" height="12">
                        </a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
