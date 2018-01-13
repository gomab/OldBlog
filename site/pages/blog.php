
<!--
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/bg10.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">A Place for Entrepreneurs to Share and Discover New Stories</h1>
                </div>
            </div>
        </div>
    </div>-->


        <div class="container">
            <h2 class="title text-center">Gomab Blog</h2>

            <div class="section">

                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-raised card-background" style="background-image: url('../assets/img/examples/card-project6.jpg')">
                            <div class="card-content">
                                <h6 class="category text-info">Marketing</h6>
                                <h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href="#pablo" class="btn btn-warning btn-round">
                                    <i class="material-icons">subject</i> Read Case Study
                                </a>
                                <a href="#pablo" class="btn btn-white btn-just-icon btn-simple" title="Save to Pocket" rel="tooltip">
                                    <i class="fa fa-get-pocket"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <h3 class="title text-center">Vous pourriez etre interressé par: </h3>
                <br />

                <?php
                $posts = get_posts();

                foreach ($posts as $post){
                    ?>
                <div class="card card-plain card-blog">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="card-image">
                                <!--  <img class="img img-raised" src="assets/img/post.jpeg" alt="<?= $post->title ?>" />-->
                                <img class="img-rounded img-responsive img-raised" src="assets/img/posts/<?= $post->image ?>" alt="<?= $post->title ?>"/>
                            </div>
                        </div>
                        <div class="col-md-7">
                                <!--<h6 class="category text-danger">
                                    <i class="material-icons">trending_up</i> Trending
                                </h6>-->
                                <h3 class="card-title">
                                    <a href="?page=post&id=<?= $post->id ?>"><?= $post->title ?></a>
                                </h3>
                                <p class="card-description">
                                    <?= substr(nl2br($post->content),0,1000); ?> ... <br>
                                    <a class="btn btn-simple" href="?page=post&id=<?= $post->id ?>"> <strong>Lire plus</strong> </a>
                                </p>
                                <p class="author">
                                    Par <a href="#"><b><?= $post->name ?></b></a>, Le <?= date("d/m/Y à H:i:s",strtotime($post->date)); ?>
                                    </a>
                            </div>





                </div>
                </div>
                <?php
                }

                ?>


            </div>
        </div>

        <div class="team-5 section-image" style="background-image: url('../assets/img/bg10.jpg')">

            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="assets/img/post.jpeg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <h6 class="category text-muted">Author of the Month</h6>

                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth...
                                    </p>

                                    <div class="footer">
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="../assets/img/faces/card-profile4-square.jpg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">Kendall Andrew</h4>
                                    <h6 class="category text-muted">Author of the Week</h6>

                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth...
                                    </p>

                                    <div class="footer">
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-linkedin"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-dribbble"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="subscribe-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">Get Tips & Tricks every Week!</h4>
                            <p class="description">
                                Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                            </p>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-plain card-form-horizontal">
                            <div class="card-content">
                                <form method="" action="">
                                    <div class="row">
                                        <div class="col-md-8">

                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">mail</i>
                                                    </span>
                                                <input type="email" value="" placeholder="Your Email..." class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


<!--  Footer   --------->

    <footer class="footer">
        <div class="container">
            <a class="footer-brand" href="#pablo">Material Kit PRO</a>


            <ul class="pull-center">
                <li>
                    <a href="#pablo">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Presentation
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Discover
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Payment
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Contact Us
                    </a>
                </li>
            </ul>

            <ul class="social-buttons pull-right">
                <li>
                    <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-just-icon btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-just-icon btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-just-icon btn-google btn-simple">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
            </ul>

        </div>
    </footer>


<!---------- End  Footer   --------->