<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
<body>
<!-----NavigationBar----->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="pictures/businesslogo1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">OUR TEAM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRICE PLANS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TESTIMONIALS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!---Slider--->
<div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
            <li data-target="#headerSlider" data-slide-to="1"></li>
            <li data-target="#headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pictures/office1.jpg" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>How to Make A Website</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pictures/business4.jpg" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Create Responsive Website</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pictures/business6.jpg" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Business Website Disign</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!---About--->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <div class="about-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <button type="button" class="btn btn-primary">Read more>></button>
            </div>
            <div class="col-md-6 skills-bar">
                <p>Adobe Photoshop</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 80%;">80%</div>
                </div>
                <p>UI Design</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 85%;">85%</div>
                </div>
                <p>WordPress</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 75%;">75%</div>
                </div>
                <p>Graphics Design</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 50%;">50%</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!---Services--->
<section id="services">
    <div class="container">
        <h1>Our Services</h1>
        <div class="row services">
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3>Web Development</h3>
                <p>There are many variations,or randomised words which don't look even slightly believable. </p>
            </div>
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-tablet"></i>
                </div>
                <h3>App Development</h3>
                <p>There are many variations,or randomised words which don't look even slightly believable. </p>
            </div>
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-line-chart"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>There are many variations,or randomised words which don't look even slightly believable. </p>
            </div>
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-paint-brush"></i>
                </div>
                <h3>Graphics Designing</h3>
                <p>There are many variations,or randomised words which don't look even slightly believable. </p>
            </div>
        </div>

    </div>
</section>
    <!---Team Members--->
<section id="team">
    <div class="container">
        <h1>Our Team</h1>
        <div class="row">
            <div class="col-md-3 profile-pic text-center">
                <div class="img-box">
                    <img src="pictures/jon.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h2>Jon Toshmatov</h2>
                <h3>Web Developer</h3>
                <p>There are many variations,or randomised words which</p>
            </div>
            <div class="col-md-3 profile-pic text-center">
                <div class="img-box">
                    <img src="pictures/umi3.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h2>Umida Shukurullaevna</h2>
                <h3>Business Head</h3>
                <p>There are many variations,or randomised words which</p>
            </div>
            <div class="col-md-3 profile-pic text-center">
                <div class="img-box">
                    <img src="pictures/juliya.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h2>Julia Pulatova</h2>
                <h3>Marketing Head</h3>
                <p>There are many variations,or randomised words which</p>
            </div>
            <div class="col-md-3 profile-pic text-center">
                <div class="img-box">
                    <img src="pictures/parvina2.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h2>Parvina Alan</h2>
                <h3>UI Designer</h3>
                <p>There are many variations,or randomised words which</p>
            </div>
        </div>
    </div>
</section>
    <!-----promo----->
<section id="promo">
    <div class="container">
        <p>Get Free Domain Name and Web Hosting</p>
        <a href="#" class="btn btn-primary">Contact Us</a>
    </div>
</section>
    <!-----Price Plan----->
<section id="price">
    <div class="container">
        <h1>Price Plan</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="single-price">
                    <div class="price-head">
                    <h2>Free</h2>
                    <p>$0/<span>month</span></p>
                </div>
                <div class="price-content">
                    <ul>
                        <li><i class="fa fa-check-circle"></i>5GB Space</li>
                        <li><i class="fa fa-check-circle"></i>10GB Bandwidth</li>
                        <li><i class="fa fa-times-circle"></i>15 Email Account</li>
                        <li><i class="fa fa-times-circle"></i>Unlimited Domain</li>
                        <li><i class="fa fa-times-circle"></i>Unlimited Support</li>
                    </ul>
                </div>
                <div class="price-button">
                    <a class="buy-btn" href="#">Join Free</a>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-price">
                    <div class="price-head">
                        <h2>Start up</h2>
                        <p>$10/<span>month</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li><i class="fa fa-check-circle"></i>10GB Space</li>
                            <li><i class="fa fa-check-circle"></i>100GB Bandwidth</li>
                            <li><i class="fa fa-check-circle"></i>15 Email Account</li>
                            <li><i class="fa fa-times-circle"></i>Unlimited Domain</li>
                            <li><i class="fa fa-times-circle"></i>Unlimited Support</li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a class="buy-btn" href="#">Join Free</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-price">
                    <div class="price-head">
                        <h2>Business</h2>
                        <p>$50/<span>month</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li><i class="fa fa-check-circle"></i>20GB Space</li>
                            <li><i class="fa fa-check-circle"></i>200GB Bandwidth</li>
                            <li><i class="fa fa-check-circle"></i>50 Email Account</li>
                            <li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
                            <li><i class="fa fa-times-circle"></i>Unlimited Support</li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a class="buy-btn" href="#">Join Free</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-price">
                    <div class="price-head">
                        <h2>Abvanced</h2>
                        <p>$100/<span>month</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li><i class="fa fa-check-circle"></i>50GB Space</li>
                            <li><i class="fa fa-check-circle"></i>Unlimited Bandwidth</li>
                            <li><i class="fa fa-check-circle"></i>Unlimited Email Account</li>
                            <li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
                            <li><i class="fa fa-check-circle"></i>Unlimited Support</li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a class="buy-btn" href="#">Join Free</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    <!-----Testimonials----->
    <section id="testimonials">
    <div class="container">
        <h1>Testimonials</h1>
        <p class="text-center">Subcribe Easy Tutorials YouTube Channel to watch more videos.</p>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="profile">
                <img src="pictures/user3.jpg" class="user">
                    <blockquote>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</blockquote>
                    <h3>Rustam Mirakbarov <br><span>My-IT-Education's Student</span></h3>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="profile">
                    <img src="pictures/ansar.jpg" class="user">
                    <blockquote>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</blockquote>
                    <h3>Ansar Jan <br><span>My-IT-Education's Student</span></h3>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="profile">
                    <img src="pictures/farhod.jpg" class="user">
                    <blockquote>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</blockquote>
                    <h3>Farhod <br><span>My-IT-Education's Student</span></h3>
                </div>
            </div>
        </div>
    </div>
    </section>
        <!-------Get in Touch------->
    <section id="contact">
        <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                           <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="follow"><b>Address:</b><i class="fa fa-
                    map-marker"></i>1015 Avenue N, Brooklyn NY</div>
                    <div class="follow"><b>Phone:</b><i class="fa fa-
                    phone"></i>+1 1234567890</div>
                    <div class="follow"><b>Email:</b><i class="fa fa-
                    envelope-o"></i>example@website.com</div>
                    <div class="follow"><label><b>Get Social:</b></label>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-------Footer------->
<section id="footer">
    <div class="container text-center">
        <p>Made by <i class="fa fa-heart-o"></i> My-IT-Education's Student</p>
    </div>
</section>
</body>
</html>












































