<?php
    $post = get_posts();

    if($post == false){
       // header("Location:index.php?page=error");
        ?>
        <script>
            window.location.replace("index.php?page=error");
        </script>
        <?php
    }else{
        ?>

        <div class="container">
            <div class="section section-text">
                <div class="row">
                    <!-- <div class="col-md-8 col-md-offset-1">
                         <h3 class="title">The Castle Looks Different at Night...</h3>
                     </div> -->



                    <div class="section col-md-10 col-md-offset-1">
                        <h3 class="title"><?= $post->title ?><small>&middot; Yesterday</small></h3>
                        <div class="image parallax-image">
                            <!--<img class="img-rounded img-responsive img-raised" alt="" src="assets/img/post.jpeg"-->

                             <img class="img-rounded img-responsive img-raised" src="assets/img/posts/<?= $post->image ?>" alt="<?= $post->title ?>"/>
                        </div>
                    </div>

                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="title">Rest of the Story:</h3>
                       <di class="media">
                           <div class="media-body">
                               <p><?= nl2br($post->content) ?></p>
                           </div>
                       </di>
                    </div>
                </div>
            </div>


            <div class="section section-blog-info">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-tags">
                                    Tags:
                                    <span class="label label-primary">Photography</span>
                                    <span class="label label-primary">Stories</span>
                                    <span class="label label-primary">Castle</span>
                                </div>
                            </div>

                        </div>

                        <hr>

                    </div>
                </div>
            </div>
        </div>

            <?php

            }

            ?>

    <div class="container">

        <!--                 comments -->
        <div id="">
            <div class="section section-comments">
                <div class="row">

                    <!--
                    <div class="col-md-8 col-md-offset-2">
                        <div class="media-area">
                            <h3 class="title text-center">3 Comments</h3>
                            <div class="media">
                                <a class="pull-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" src="../assets/img/faces/card-profile4-square.jpg" alt="..."/>
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Tina Andrew <small>&middot; 7 minutes ago</small></h4>
                                    <h6 class="text-muted"></h6>

                                    <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country. Panda! Don't be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>

                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-danger btn-simple pull-right">
                                            <i class="material-icons">favorite</i> 243
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                -->











































                    <div class="title">
                        <h3>Comments</h3>
                    </div>

                    <!----Affichage commentaires --->

                    <div class="col-md-8 col-md-offset-2">
                        <?php

                        $responses = get_comments();

                        if($responses != false){
                            foreach ($responses as $response ){
                                ?>
                        <div class="media-area">


                            <!--<h3 class="title text-center">10 Comments</h3>-->
                            <div class="media">
                                <a class="pull-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" alt="64x64" src="assets/img/christian.jpg">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?= $response->name ?> <small>&middot; Le <?= date("d/m/Y à H:i:s", strtotime($response->date)) ?></small></h4>
                                    <p><?= $response->comment ?></p>

                                    <!--<div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-danger btn-simple pull-right">
                                            <i class="material-icons">favorite</i> 243
                                        </a>
                                    </div>-->

                                </div>
                            </div>
                            <!--<div class="pagination-area text-center">
                                <ul class="pagination">
                                    <li><a href="#pablo">&laquo;</a></li>
                                    <li><a href="#pablo">1</a></li>
                                    <li><a href="#pablo">2</a></li>
                                    <li class="active"><a href="#pablo">3</a></li>
                                    <li><a href="#pablo">4</a></li>
                                    <li><a href="#pablo">5</a></li>
                                    <li><a href="#pablo">&raquo;</a></li>
                                </ul>
                            </div>-->

                        </div>
                        <?php
                        }
                        }else{
                            ?>
                            <h3 class="text-left"><small>Soyez le premier à commenter...</small></h3>
                            <?php
                        }


                        ?>






                        <!-- end media-post -->

                        <h3 class="text-center">Laisser un commentaire...<br><small>- Not Logged In User -</small></h3>

                        <?php
                        if(isset($_POST['submit'])){
                            $name = htmlspecialchars(trim($_POST['name']));
                            $email = htmlspecialchars(trim($_POST['email']));
                            $comment = htmlspecialchars(trim($_POST['comment']));
                            $errors = [];

                            if(empty($name) || empty($email) || empty($comment)){
                                $errors['empty'] = 'Tous les champs n\'ont pas été remplis';
                            }else{
                                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                    $errors['email'] = 'L\'adresse email n\'est pas valide';
                                }
                            }

                            if(!empty($errors)){
                                ?>
                                <?php
                            foreach ($errors as $error){
                                ?>
                                <div class="section cd-section section-notifications" id="notifications">
                                    <!--
                                    <div class="alert alert-danger">
                                        <div class="container">
                                            <div class="row">
                                                <div class="alert-icon">
                                                    <i class="material-icons">error_outline</i>
                                                </div>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                </button>
                                                <b>Error Alert:</b> :
                                            </div>
                                        </div>
                                    </div>
                                    -->

                                    <div class="alert alert-danger">
                                        <div class="container-fluid">
                                            <div class="alert-icon">
                                                <i class="material-icons">error_outline</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            <b>Error Alert:</b> <?php echo $error.'<br>';?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>



                                </div>
                            <?php

                            }
                            ?>

                            <?php
                            }else{
                            comments($name,$email,$comment);
                            ?>
                                <script>
                                    window.location.replace("index.php?page=post&id=<?= $_GET['id'] ?>");
                                </script>
                                <?php
                            }

                        }


                        ?>


                        <div class="media media-post">
                            <a class="pull-left author" href="#">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64" src="assets/img/christian.jpg"/>
                                </div>
                            </a>
                            <div class="media-body">
                                <form method="post" class="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" name="name" id="name" class="form-control" placeholder="Nom"/>
                                                <label for="name"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="email" name="email" id="email" class="form-control" placeholder="Adreese email"/>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea class="form-control" name="comment" id="comment" placeholder="Write some nice stuff or nothing..." rows=""></textarea>
                                    <div class="media-footer">
                                        <h6>Sign in with</h6>
                                        <a href="" class="btn btn-just-icon btn-round btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="" class="btn btn-just-icon btn-round btn-facebook">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="" class="btn btn-just-icon btn-round btn-google">
                                            <i class="fa fa-google-plus-square"></i>
                                        </a>

                                        <button type="submit" name="submit" class="btn btn-primary pull-right">Commenter</button>
                                    </div>
                                </form>

                            </div><!-- end media-body -->

                        </div> <!-- end media-post -->


                    </div>
                </div>

            </div>


        </div>
        <!--                 end comments                 -->

    </div>


<!--      Articles similaires --->

</di>

<div class="section">
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h2 class="title text-center">Similar Stories</h2>
                <br />
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="../assets/img/examples/blog6.jpg" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-info">Enterprise</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="../assets/img/examples/blog8.jpg" />
                                </a>
                            </div>
                            <div class="card-content">
                                <h6 class="category text-success">
                                    Startups
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Lyft launching cross-platform service this week</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="../assets/img/examples/blog7.jpg" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-danger">
                                    <i class="material-icons">trending_up</i> Enterprise
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">6 insights into the French Fashion landscape</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
</div>

