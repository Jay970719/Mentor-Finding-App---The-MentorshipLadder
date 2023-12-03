<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

  <!-- Carousel -->
  <section class="container-fluid main-carousel">
    <div id="main-display" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <h1>Not a member?</h1>
          <a href="SignUp.php" type="button" class="btn btn-red">Register now</a>
        </div>
        <div class="carousel-item carousel-item-2">
          <h1>We got mentors for you!</h1>
          <a href="aisles/MeetMentors.php" type="button" class="btn btn-red">Find mentors</a>
        </div>
        <div class="carousel-item carousel-item-3">
          <h1>Do you want to become a mentor?</h1>
          <a href="aisles/BecomeMentors.php" type="button" class="btn btn-red">Become a mentor</a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#main-display" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#main-display" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  
  <hr />
  <!-- Features -->
  <section class="featured-products">
    <h2>Features</h2>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
          <div class="card mb-3 h-100">
            <div class="embed-responsive embed-responsive-4by3">
              <a href="aisles/MeetMentors.php"><img src="images/Meet.jpg" class="card-img-top embed-responsive-item" alt="Meet Mentors"></a>
            </div>
            <div class="card-body">
              <a href="aisles/MeetMentors.php"><h4 class="card-title">Find Mentors</h4></a>
              <p class="card-text">Find mentors at your school or somewhere else!</p>
              <a href="aisles/MeetMentors.php">Go to find mentors</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
          <div class="card mb-3 h-100">
            <div class="embed-responsive embed-responsive-4by3">
              <a href="aisles/BecomeMentors.php"><img src="images/Become.jpg" class="card-img-top embed-responsive-item" alt="Become Mentors"></a>
            </div>
            <div class="card-body">
              <a href="aisles/BecomeMentors.php"><h4 class="card-title">Be a Mentor</h4></a>
              <p class="card-text">Do you want to be a mentor and help other students? </p>
              <a href="aisles/BecomeMentors.php">Become a mentor</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
          <div class="card mb-3 h-100">
            <div class="embed-responsive embed-responsive-4by3">
              <a href="aisles/BestMentors.php"><img src="images/Best.jpg" class="card-img-top embed-responsive-item" alt="Best Mentors"></a>
            </div>
            <div class="card-body">
              <a href="aisles/BestMentors.php"><h4 class="card-title">Best mentors</h4></a>
              <p class="card-text">Here are the best mentors of this year! Congratulations!!</p>
              <a href="aisles/BestMentors.php">Go see best mentors</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr />
  <!-- our value -->
  <section class="container-fluid covid-news" id="news">
    <h2>Value</h2>
    <p>With the fast-paced industry and the increasing number of university students, most have realized the importance of finding a good mentor and how it boosts ones professional
and personal life. Although many initiatives of organizing such networking events with the mentor are arranged by some universities, they are hindered due to various restrictions surrounding it
making it less available and suitable for the majority. This is why we created this platform so that students can exchange their experience each other and become mentors or mentees whenever they want. 
    </p>
  </section>

  <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
