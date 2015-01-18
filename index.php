<?php
$title = "Home";
include 'includes/header.php';
?>

<!-- Start Page Body -->

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/arena.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/profile-picture.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/resica.png" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Hi, I'm</small>
                    </h2>
                    <h1 class="brand-name">David Gibbons</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>and
                            <strong>It's nice to meet you!</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Student
                        <strong>Life</strong>
                    </h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3">
                            <img class="img-responsive img-border img-left" src="img/lion.png" alt="">
                            <legend>Courtesy of <a href="https://www.flickr.com/photos/drocpsu/">drocpsu</a></legend>
                        </div>
                        <div class="col-lg-9">
                            <p>My primary and most important occupation is as a student. I am currently studying Electrical &amp; Computer Engineering Technology at Penn State Erie, The Behrend College. I have enjoyed using electronics throughout my life, and fell in love with engineering over my time spent working as a camp counselor at Resica Falls Scout Reservation.</p>
                            <p>Why Technology? I prefer to see the implementation of technology and like to see projects through to their end as opposed to giving them up while they are still only in pen on paper. I do not stop until the requirements are met and satisfaction is achieved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Personal
                        <strong>Philosophies</strong>
                    </h2>
                    <hr>
                    <p>I am a student of Jesuit education and am a believer of <a hre="https://www.google.com/search?q=magis&oq=magis&aqs=chrome..69i57j69i60l5.531j0j7&client=ubuntu-browser&sourceid=chrome&es_sm=93&ie=UTF-8#q=jesuit+magis">Magis</a>. This has inspired me to go as far as I have and work as well as I have on all of my projects.</p>
                </div>
            </div>
        </div>

<!-- End Page Body -->

<?php include 'includes/footer.php'; ?>
