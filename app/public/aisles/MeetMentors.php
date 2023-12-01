<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "aisle-header.php") ?>


<!-- Title -->
<section class="jumbotron jumbotron-meet">
    <div class="container">
        <h1 class="aisle-title">Find Mentors</h1>
    </div>
</section>
<!-- Meet mentors -->
<section class="featured-products aisle-featured">
    <h2>Meet Mentors!</h2>
    <hr />
    <div class="container">
        <!-- Mentors Section -->
        <h4>Mentors</h4>
        <div class="row featured-products-cards">
            <?php display_aisle_products('aisle_bakery', 0); ?>
        </div> 
        <div class="row featured-products-cards">
            <?php display_aisle_products('aisle_bakery', 1); ?>
        </div> 
        <div class="row featured-products-cards">
            <?php display_aisle_products('aisle_bakery', 2); ?>
        </div> 
        <!-- end of row -->
        
    </div>
</section>

<?php include(TEMPLATE_FRONT . DS . "aisle-footer.php") ?>