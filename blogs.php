<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css" />
    <!--custom css-->
    <link rel="stylesheet" href="css/blogs.css" />
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<body>
    <header class="introduction" id="mainNav">
        <section class="header">
            <nav class=" navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#">ONDARIDESIGNS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse display-flex align-items-center justify-content-between" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-lg-auto my-2 my-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php#projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="blog.php">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php#testimonials">Testimonials</a>
                            </li>

                        </ul>
                        <div class="">
                            <a class="btn btn-outline-primary px-4" href="#">Hire Me</a>

                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    <section class="jumbotron-fluid" style="height:30vh;padding-top:70px;">
        <div class="container">
            <p class="text-center" style="font-size:20px;">Welcome to the blog section<p>
        </div>
    </section>
    <hr>

    <section id="blog py-4">
        <div class="container">
            <h2 class="text-center py-3">My Blogs</h2>
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="text-primary py-2">What are the new UI trends in the market?</h4>
                    <p class="text-primary text-uppercase">Michael Ondari</p>
                    <p class="text-muted">Posted on 1ST AUGUST,2020 at 12.45am</p>
                    <img src="img/background/tech1.jpg" class="w-100 pb-3" alt="">
                    <p>UI stands for User Interface. It goes hand in hand with UX, initials for User Experience. Before we dig deep into the modern trends in the field of UI, let's find out what UI and UX entails.

                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, unde voluptatem. Repudiandae
                        vel
                        iusto corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, eius ratione
                        fugiat cum laboriosam aliquam quis ipsam officia cumque voluptatum voluptates veritatis
                        esse
                        earum ex?</p>
                    <div class="social-media-icons py-2">
                        <i class="fa fa-twitter mr-3"></i>
                        <i class="fa fa-facebook mr-3"></i>
                        <i class="fa fa-pinterest mr-3"></i>
                        <i class="fa fa-whatsapp mr-3"></i>
                    </div>
                    <hr>

                    <!--comments from other people-->
                    <h4 class="py-3">Comments</h4>
                    <div class="comments px-4">
                        <h6 class="text-primary">Michael <span class="text-dark">(Posted on 6th March,2020) at
                                8.00pm</span></h6>
                        <p class="py-1">Nice article. Keep it up!</p>
                        <div class="comment">
                            <a href="#" class="mr-2" style="font-size: 14px;">like</a>
                            <a href="#" class="mr-2" style="font-size: 14px;">reply</a>
                            <a href="#" class="mr-2" style="font-size: 14px;">comment</a>
                        </div>
                        <hr>
                    </div>
                    <div class="comments px-4">
                        <h6 class="text-primary">Terry <span class="text-dark">(Posted on 6th March,2020) at
                                8.00pm</span></h6>
                        <p class="">Nice article. Keep it up!</p>
                        <div class="reply" style="padding-left:30px;">
                            <h6 class="text-primary">Michael <span class="text-dark">(Posted on 6th March,2020) at
                                    8.00pm</span></h6>
                            <p class="">Thank you very much</p>
                        </div>
                        <div class="comment">
                            <a href="#" class="mr-2" style="font-size: 14px;">like</a>
                            <a href="#" class="mr-2" style="font-size: 14px;">reply</a>
                            <a href="#" class="mr-2" style="font-size: 14px;">comment</a>
                        </div>
                        <hr>
                    </div>
                    <!--add a comment-->
                    <h3 class="py-3">Please leave a reply</h3>
                    <form action="includes/comments.php" method="POST">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form mb-4">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label> Email</label>
                                            <input name="email" type="text" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" name="message" rows="4" placeholder="Write Your Requirements"></textarea>
                                </div>
                                <button type="submit" name="comments" class="btn btn-primary text-white font-weight-bold">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="about-author">
                        <h4>About the author</h4>
                        <div class="about-the-author text-center p-3" style="border: 0.5px solid #e9ecef;border-radius: 10px;" <img src="img/background/tech2.jpg" class="rounded-circle" width="200px" height="200px" alt="">
                            <div class="social-author">
                                <a href="#" class="mr-2" style="font-size: 14px;">Twitter</a>
                                <a href="#" class="mr-2" style="font-size: 14px;">LinkedIn</a>
                            </div>
                            <div class="author-profile">
                                <p class="text-primary">Michael Ondari</p>
                                <p>Michael is a dedicated upcoming blogger with his interest inclined into tech. Feel free to read my blogs and comment. </p>
                            </div>
                        </div>
                    </div>

                    <div class="related-articles py-4">
                        <div class="containers">
                            <h5 class="py-2">Related Articles</h5>
                            <div class="related-article p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <h6 text-dark>How can you make your app design amazing?</h6>

                                    </div>
                                    <div class="col-4">
                                        <img src="img/background/tech1.jpg" class="w-100" alt="">
                                    </div>
                                    <div class="col-12">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, sed...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="related-article p-3 my-3">
                                <div class="row">
                                    <div class="col-8">
                                        <h6 text-dark>How can you make your app design amazing?</h6>

                                    </div>
                                    <div class="col-4">
                                        <img src="img/background/tech1.jpg" class="w-100" alt="">
                                    </div>
                                    <div class="col-12">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, sed...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="related-article p-3 mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <h6 text-dark>How can you make your app design amazing?</h6>

                                    </div>
                                    <div class="col-4">
                                        <img src="img/background/tech1.jpg" class="w-100" alt="">
                                    </div>
                                    <div class="col-12">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, sed...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="category-btns p-4">
                                <h5 class="pb-3">CATEGORIES</h5>
                                <div class="list-grouptext-dark">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        Education
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">Health</a>
                                    <a href="#" class="list-group-item list-group-item-action">Safety</a>
                                    <a href="#" class="list-group-item list-group-item-action">Agriculture</a>
                                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Tourism</a>
                                </div>
                            </div>
                            <div class="newsletter pt-3 p-3 mt-4" style="border: 0.5px solid #e9ecef;border-radius: 10px;">
                                <h4>Sign up for the newsletter</h4>
                                <form action="includes/subscriber.php" method="POST">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="" placeholder="Your Email">
                                        </div>
                                        <button type="submit" name="subscribers" class="btn btn-primary text-white font-weight-bold">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--footer-->
            <p></p>
        </div>
    </section>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/main.js"></script>

</html>