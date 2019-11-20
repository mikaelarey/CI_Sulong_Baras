<!DOCTYPE hmtl>
<hmtl>
<head>
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Changa|Doppio+One|Palanquin|Saira+Extra+Condensed|Yellowtail&display=swap" rel="stylesheet">
    <!--
        font-family: 'Palanquin', sans-serif;
        font-family: 'Yellowtail', cursive;
        font-family: 'Doppio One', sans-serif;
        font-family: 'Saira Extra Condensed', sans-serif;
        font-family: 'Changa', sans-serif;                  //header
    -->
    <style>
        .card-hover {
            transition:0.5s;
        }
        .card-hover:hover {
            transform:scale(1.05);
            box-shadow:1px 1px 5px 2px grey;
            transition:0.5s;
        }
        .btn-main-color {
            padding:0.6rem 2rem;
            background-color:rgb(83, 66, 194);
            color:white;
        }
        .btn-main-color:hover {
            background-color:rgb(50, 35, 165);
            color:white;
        }
        .custom-dropdown-item:hover {
            background-color:rgb(130, 110, 240);
            color:white;
        }
    </style>
</head>
<body>

    <!-- header -->
    <div class="container-fluid p-5 text-center" style="background:url('<?php echo base_url();?>assets/img/christmas.gif');">
        <h1 style="font-family: 'Yellowtail', cursive;text-shadow:2px 2px 2px red;" id="demo" class="text-white"></h1>
        <h4 class="text-white" style="font-family: 'Palanquin', sans-serif;text-shadow:2px 2px 2px red;">Before Christmas</h4>
    </div>
    
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:rgb(83, 66, 194);">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/img/LOGO.png" style="width:3rem;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Travel</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item custom-dropdown-item" href="#">Log in</a>
                <a class="dropdown-item custom-dropdown-item" href="#">Sign up</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Type your search here ..." aria-label="Search">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- banner -->
    <div class="container">

        <div class="row py-4 my-5">
            
            <div class="col-lg-12 mb-3">
                <h1 class="text-center p-4 text-white" style="font-family: 'Changa', sans-serif;font-weight:bold;background-color:rgb(83, 66, 194);">CATANDUNGAN FESTIVAL</h1>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height:30rem;" src="<?php echo base_url();?>assets/img/1.JPG" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h1 style="text-shadow: 0 0 3px black, 0 0 5px black;">SULONG BARAS</h1>
                            <p style="text-shadow: 0 0 3px black, 0 0 5px black;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img style="height:30rem;" src="<?php echo base_url();?>assets/img/2.JPG" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h1 style="text-shadow: 0 0 3px black, 0 0 5px black;">SULONG BARAS</h1>
                            <p style="text-shadow: 0 0 3px black, 0 0 5px black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img style="height:30rem;" src="<?php echo base_url();?>assets/img/3.JPG" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h1 style="text-shadow: 0 0 3px black, 0 0 5px black;">SULONG BARAS</h1>
                            <p style="text-shadow: 0 0 3px black, 0 0 5px black;">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="p-3">
                    <h2 class="text-center m-3" style="font-family: 'Changa', sans-serif;font-weight:bold;color:rgb(83, 66, 194);">CATANDUNGAN FESTIVAL</h2>
                    <p class="text-justify" style="text-indent:2rem;font-size:1.2rem;">Philippine festivals are celebrations that show the rich culture of the country. Almost every province and city have all kinds of fiestas to celebrate all year round.</p> 
                    <p class="text-justify" style="text-indent:2rem;font-size:1.2rem;">Feasts are a huge part of parish life in Catanduanes. Each town holds its annual feast dedicated to its Patron Saint. Just last August, Baras held its annual fiesta for St. Lawrence but this time... The festivity is much louder, colorful, and bolder.</p> 
                    <p class="text-justify" style="text-indent:2rem;font-size:1.2rem;">A typical fiesta lasts 1 to 3 days but the local government of Baras made it a week long event filled with various activities to better showcase the beauty and wealth of the place</p>
                </div>
            </div>
        </div>
    </div>



    <!-- Events -->
    <div class="container">
        <div class="row py-4 my-5">

            <div class="col-lg-12">
                <h1 class="text-center p-4 text-white" style="font-family: 'Changa', sans-serif;font-weight:bold;background-color:rgb(83, 66, 194);">EVENTS</h1>
            </div>

            <!-- Upcoming Events -->

            <div class="col-lg-6 col-md-12 col-sm-12 my-3">

                <h2 class="text-center m-3" style="font-family: 'Changa', sans-serif;font-weight:bold;color:rgb(83, 66, 194);">UPCOMING SPECIAL EVENTS</h2>

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header text-center" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5><strong>Event Title</strong><h5>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="card mb-3" style="width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="<?php echo base_url();?>assets/img/3.JPG" class="card-img" alt="..." style="height:12rem;">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5><strong>Event Title</strong><h5>
                                </button>
                            </h2>
                        </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                            <img src="<?php echo base_url();?>assets/img/1.JPG" class="card-img" alt="..." style="height:12rem;">
                                        </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5><strong>Event Title</strong><h5>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url();?>assets/img/2.JPG" class="card-img" alt="..." style="height:12rem;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Holidays Events -->
            <div class="col-lg-6 col-md-12 col-sm-12 my-3">

                <h2 class="text-center m-3" style="font-family: 'Changa', sans-serif;font-weight:bold;color:rgb(83, 66, 194);">HOLIDAYS EVENTS</h2>

                <div class="accordion" id="accordionExample1">
                    <div class="card">
                        <div class="card-header text-center" id="headingOne1">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h5><strong>Event Title</strong><h5>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                            <div class="card-body">
                                <div class="card mb-3" style="width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="<?php echo base_url();?>assets/img/2.JPG" class="card-img" alt="..." style="height:12rem;">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header text-center" id="headingTwo2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                <h5><strong>Event Title</strong><h5>
                                </button>
                            </h2>
                        </div>
                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample1">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                            <img src="<?php echo base_url();?>assets/img/3.JPG" class="card-img" alt="..." style="height:12rem;">
                                        </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center" id="headingThree1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                <h5><strong>Event Title</strong><h5>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url();?>assets/img/1.JPG" class="card-img" alt="..." style="height:12rem;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <h5 class="text-center p-4" style="font-family: 'Changa', sans-serif;color:rgb(83, 66, 194);text-decoration:underline;">Click here to view all events</h1>
            </div>

        </div>
    </div>



    <!-- Article -->
    <div class="container">
        <div class="row py-4 my-5">

            <div class="col-lg-12">
                <h1 class="text-center p-4 text-white" style="font-family: 'Changa', sans-serif;font-weight:bold;background-color:rgb(83, 66, 194);">LATEST ARTICLES</h1>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card card-hover" style="width:100%;">
                    <img src="<?php echo base_url();?>assets/img/2.JPG" class="card-img-top" alt="..." style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-main-color">Continue Reading</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card card-hover" style="width:100%;">
                    <img src="<?php echo base_url();?>assets/img/3.JPG" class="card-img-top" alt="..." style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-main-color">Continue Reading</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card card-hover" style="width:100%;">
                    <img src="<?php echo base_url();?>assets/img/1.JPG" class="card-img-top" alt="..." style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-main-color">Continue Reading</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card card-hover" style="width:100%;">
                    <img src="<?php echo base_url();?>assets/img/3.JPG" class="card-img-top" alt="..." style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-main-color">Continue Reading</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card card-hover" style="width:100%;">
                    <img src="<?php echo base_url();?>assets/img/1.JPG" class="card-img-top" alt="..." style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-main-color">Continue Reading</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card card-hover" style="width:100%;">
                    <img src="<?php echo base_url();?>assets/img/2.JPG" class="card-img-top" alt="..." style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-main-color">Continue Reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <div class="container-fluid">
        <div class="row pt-4 mt-5" style="background-color:rgb(83, 66, 194);">

            <div class="col-lg-12 p-0">
                <div class="py-5">
                    <h1 class="text-center p-4 pb-0 mb-0 text-white" style="font-family: 'Changa', sans-serif;font-weight:bold;background-color:rgb(83, 66, 194);">SUBSCRIBE</h1>
                    <p class="text-center text-white"><small>Be the first to know about the latest updates.</small></p>
                </div>
            </div>

            <form class="mx-auto">
                <div class="form-group">
                    <input type="text" class="form-control p-3" style="width:25rem;" placeholder="Enter your E-mail address here ...">
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-danger" style="width:25rem;" value="Subscribe">
                </div>
            </form>

            <div class="col-lg-12 p-4"></div>

            <div class="col-lg-sm-12 col-md-6 p-0" style="background-color:rgb(53, 36, 164);">
                <div class="p-5 text-center text-white">
                    <span><i class="fa fa-facebook-square text-primary" style="font-size:2.5rem;width:4rem;"></i></span>
                    <span><i class="fa fa-instagram text-info" style="font-size:2.5rem;width:4rem;"></i></span>
                </div>
            </div>

            <div class="col-lg-sm-12 col-md-6 p-0" style="background-color:rgb(53, 36, 164);">
                <div class="p-5 mt-3 text-center text-white">
                    <p class="text-center text-white"><small>Copyright &copy; <a href="#" class="text-info"><b>Sulongbaras.com</b></a>. All rights reserved.</small></p>                    
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 25, 2019 00:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + " days " + hours + " hours "
        + minutes + " minutes " + seconds + " seconds";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
        }, 1000);
    </script>

</body>
</html>