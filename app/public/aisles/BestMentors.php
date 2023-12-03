<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "aisle-header.php") ?>

<!--  Title -->
<section class="jumbotron jumbotron-best">
  <div class="container">
    <h1 class="aisle-title">Best Mentor of this year</h1>
  </div>
</section>
<!-- Best Mentors -->
<section class="featured-products aisle-featured">
    <h2>Congratulations!</h2>
    <hr />
    <div class="container">
        <!-- Best Mentor Section -->
        <div class="row featured-products-cards">
            <?php display_bestMentors('aisle_bakery', 1); ?>
        </div> 
        <!-- end of row -->
        
    </div>
</section>
<!-- how we select best mentors -->
<section class="container-fluid covid-news" id="news">
    <p>Selecting the best mentors involves a meticulous process that heavily relies on the valuable feedback provided by the mentees.
         We prioritize and curate our mentors based on the reviews and ratings they receive from the mentees they guide. 
         We continually assess and refine our pool of mentors to ensure that our mentees receive guidance from the best-suited individuals who can empower them in achieving their goals. The feedback loop created by mentees not only aids in mentor selection but also fosters an environment of continuous improvement for our mentors.
    </p>
  </section>
<?php include(TEMPLATE_FRONT . DS . "aisle-footer.php") ?>