<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "product-header.php") ?>
<?php 
    $product_aisle = htmlspecialchars($_GET["category"]);
    $product_id =  htmlspecialchars($_GET["id"]);
    $product_category = ucfirst(explode("_", $product_aisle)[1]);
    $product_obj = getProductXml($product_aisle, $product_id);
?>

<body class="d-flex flex-column min-vh-100" onload="loadQty(<?php echo htmlspecialchars($_GET['id']); ?>)"
    onbeforeunload="saveQty(<?php echo htmlspecialchars($_GET['id']); ?>)">
    <!-- Navigation bar linking to home and menus -->
    <?php include(TEMPLATE_FRONT . DS . "product-navbar.php") ?>

    <main>
        <section <?php echo 'class="jumbotron jumbotron-mentor"'; ?>>
            <div class="container">
                <h1 class="display-5 text-white">Mentor</h1>
            </div>
        </section>
        <!-- Nav breadcrumbs to go back to upper directory -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item">Mentor</li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $product_obj->name; ?></li>
            </ol>
        </nav>
        <!-- Main content -->
        <div class="container-fluid">
            <div class="row">
                <!-- Mentor image -->
                <div class="col-md-6" id="productImage">
                    <img src="../uploads/<?php echo $product_obj->image; ?>" class="img-fluid"
                        alt="Image of <?php echo $product_obj->name; ?>." />
                </div>

                <!-- Mentor description, country, email, phone, send message button -->
                <div class="col-md-6" id="productDescription">
                    <h3 id="productName"><?php echo $product_obj->name; ?></h3>
                    <h5><?php echo $product_obj->university. " - ".  $product_obj->major; ?></h5>
                    <h6><?php echo $product_obj->year; ?></h6>
                    <h6><?php echo $product_obj->country; ?></h6>
                    <br>
                    <h5><span id="unit-price"><?php echo $product_obj->sentence; ?></span></h5>
                    <form action="<?php echo 'add-to-cart.php?category=' . $product_aisle . '&amp;id=' . $product_id; ?>" method="POST">
                        <!-- Optional Flavour or Cut control -->
                        <?php
                         if (count($product_obj->options) >= 1) {
                             getOptions($product_obj->options->children());
                         }
                         ?>
                        
                        
                        <button type="button" class="btn btn-outline-dark" onclick="moreDescription()">More
                            Description</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addedModal">Contact this mentor</button>
                        <!-- Pop up for send message -->
                        <div class="modal fade" id="addedModal" tabindex="-1" aria-labelledby="ProductLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h4 class="modal-title w-100" id="ProductLabel">Contact Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body w-100">
                                        <p>Country : <?php echo $product_obj->country; ?> </p>
                                        <p>Email : <?php echo $product_obj->email; ?> </p>
                                        <p>Phone : <?php echo $product_obj->phone; ?> </p>
                                        <textarea id="textarea" name="user_input" rows="5" cols="40" placeholder="Send Message to this mentor"></textarea> 
                                        <text>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"
                                            >Send Message </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="more-description" style="margin: 10px; display: none;">
                        <p>
                            <?php echo $product_obj->description; ?>
                            
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>