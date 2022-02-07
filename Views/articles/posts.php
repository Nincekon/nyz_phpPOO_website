<?php $posts = $params['posts']; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php"> Accueil </a></li>
        <li class="breadcrumb-item active" aria-current="page"> Mes articles </li>
    </ol>
</nav>

<div class="row g-5 border-bottom">
    <div class="col-md-8">

    <?php foreach ($posts as $post) { ?>
        <!-- Blog post-->
                
        <div class="card mb-4">
            <a href="#!">
                <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted"><?= $post->createdAt ?></div>
                <h2 class="card-title h4"><?= $post->title ?></h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                <a class="btn btn-primary" href="<?= '?page=/articles/'.$post->id ?>">Read more →</a>
            </div>
        </div>
    <?php } ?>

    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">

        <?php if(isset($params['post'])): ?>
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">
                    Customize this section to tell your visitors a little bit about your publication,
                     writers, content, or something else entirely. Totally up to you.
                </p>
            </div>
        <?php endif ?>

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

            
        <?php if(isset($params['post'])): ?>
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
        <?php endif ?>
        </div>
    </div>
</div>