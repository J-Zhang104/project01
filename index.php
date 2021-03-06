<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Computer Science Department</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
    <div class="masthead">
        <div class= "row">
            <div class="col-md-4">
                <img src="images/hajim-logo.png" class="left-image">
            </div>
            <div class="col-md-4">
                <h1><center><strong>Department of Computer Science</strong></center></h3>
            </div>
            <div class="col-md-4">
            </div>
        </div>

        <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <!-- logo space <a class="navbar-brand" href="#">Project name</a> -->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="html/aboutus.php">About Us</a></li>
              <li><a href="https://www.cs.rochester.edu/research/index.html">Research</a></li>
              <li><a href="https://www.cs.rochester.edu/news-events/events/index.php">Gallery</a></li>
              <li><a href="https://www.cs.rochester.edu/undergraduate/index.html">Student Resources</a></li>
              <li><a href="https://enrollment.rochester.edu/apply/">Future Students</a></li>
              <li><a href="https://www.cs.rochester.edu/about/contact.html">Contact Us</a></li>
            </ul>

                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/research.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Conduct cutting-edge research</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/facultiez.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Learn  from world-class faculty</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/knowledge.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Apply your knowledge to a range of fields</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/campus.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Collaborate across campus and discliplines</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

<!-- Portfolio Grid Section -->
    <aside>
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Majors</h2>
                        <a href="html/majors.php" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="images/major.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Minors</h2>
                        <a href="https://www.cs.rochester.edu/graduate/index.html" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="images/minor.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Graduates</h2>
                        <a href="html/graduate.php" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="images/graduate.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Faculty</h2>
                        <a href="https://www.cs.rochester.edu/people/faculty/index.html" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="images/faculty.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">News</h2>
                        <a href="https://www.cs.rochester.edu/news-events/index.html" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="images/news.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Calendar</h2>
                        <a href="https://www.rochester.edu/registrar/calendar.php" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="images/calendar.png" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </aside>

    <?php include "inc/footer.inc"; ?>

    </div>  <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Social Media -->
    <script src="js/docs.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3500 //changes the speed
    })
    </script>

  </body>
</html>
