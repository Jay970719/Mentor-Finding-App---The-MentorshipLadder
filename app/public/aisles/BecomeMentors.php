<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "aisle-header.php") ?>

<!-- Aisle Title -->
<section class="jumbotron jumbotron-become">
    <div class="container">
        <h1 class="aisle-title">Become a mentor</h1>
    </div>
</section>
<!-- Becoming a mentor -->
<section class="featured-products aisle-featured">
    <h2>Do you want to become a mentor?</h2>
    <hr />
    <div class="container">
        <!-- Become a mentor Section -->
        <h6>By considering the role of a mentor, you're acknowledging the profound impact your knowledge and guidance can have on others' lives. Your willingness to share your expertise and support others on their journey is not only commendable but also an invaluable contribution to shaping future generations. 
            </h6>
            <br>
        <div class="row featured-products-cards">
            <?php apply_mentor('aisle_produce', 0); ?>
        </div> 
        <!-- end of row -->
        <h6>Thank you for considering the path of mentorship, a path that fosters growth, inspires confidence, and cultivates a legacy of positivity.</h6>
        <br>
        <br>
    </div>
</section>

<?php include(TEMPLATE_FRONT . DS . "aisle-footer.php") ?>