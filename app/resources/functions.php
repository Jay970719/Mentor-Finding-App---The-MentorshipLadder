<?php

function set_message($msg)
{
    if (empty($msg)) {
        $msg = "";
    } else {
        $_SESSION['message'] = $msg;
    }
}

function display_message($msg)
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function load_aisle_xml($aisle)
{
    $xml = simplexml_load_file(XML_DB . DS . "products.xml") or die("Error: Cannot create object");
    $aisle_xml = NULL;
    foreach ($xml->children() as $child) {
        if (strcasecmp($child->getName(), $aisle) === 0) {
            $aisle_xml = $child;
            break;
        }
    }

    return $aisle_xml;
}


// #################################### FRONT END FUNCTIONS

// ----- aisle page functions

function apply_mentor($aisle, $section)
{
    $aisle_xml = load_aisle_xml($aisle);
    // separate each section
    $section = $aisle_xml->aisle_section[$section];
    foreach ($section->children() as $product) {
        $div_media = (count($section) >= 3) ? "col-lg-4" : " ";
        $product_card = <<<DELIMITER
        <div class="col-sm-12 col-md-20 {$div_media} mb-3">
            <div class="h-50">
                <div class="embed-responsive embed-responsive-4by3">
                    <img src="../uploads/{$product->image}" class="card-img-top embed-responsive-item" alt="{$product->name}"></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{$product->name}</h4></a>
                    <p class="card-apply">{$product->description} </p>
                    <a href="../MentorSignup.php">Apply</a>
                   <div class="dropdown-divider"></div>
                </div>
            </div>
        </div>
        DELIMITER;

        echo $product_card;
    }
}
// get products - for mentors
function display_aisle_products($aisle, $section)
{
    $aisle_xml = load_aisle_xml($aisle);
    // separate each section
    $section = $aisle_xml->aisle_section[$section];
    if (count($section) === 0) {
        $no_product = <<<DELIMITER
        <div class="col-sm-12" style="margin-top:30px;">
            <p class="text-muted"># # #</p>
            <h5 class="text-muted" style="margin-top:25px; margin-bottom: 25px;">Restocking Shelves... Please Come Back Soon!</h5>
            <p class="text-muted"># # #</p>
        </div>
        DELIMITER;

        echo $no_product;
    }
    foreach ($section->children() as $product) {
        $div_media = (count($section) >= 3) ? "col-lg-4" : " ";
        $product_card = <<<DELIMITER
        <div class="col-sm-12 col-md-6 {$div_media} mb-3">
            <div class="card mb-3 h-100">
                <div class="embed-responsive embed-responsive-4by3">
                    <a href="../products/productDisplay.php?category={$aisle}&amp;id={$product->id}"><img src="../uploads/{$product->image}" class="card-img-top embed-responsive-item" alt="{$product->name}"></a>
                </div>
                <div class="card-body">
                    <a href="../products/productDisplay.php?category={$aisle}&amp;id={$product->id}"><h4 class="card-title">{$product->name}</h4></a>
                    <p class="card-text card-price">{$product->name} &#8211; {$product->university}</p>
                    <p class="card-text">{$product->major}  </p>
                    <p class="card-text">{$product->year}  </p>
                    <p class="card-text"><small class="text-muted">{$product->sentence}</small></p>
                    <a href="../products/productDisplay.php?category={$aisle}&amp;id={$product->id}">See details</a>
                </div>
            </div>
        </div>
        DELIMITER;

        echo $product_card;
    }
}
// function for displaying the best mentor
function display_bestMentors($aisle, $section)
{
    $aisle_xml = load_aisle_xml($aisle);
    // separate each section
    $section = $aisle_xml->aisle_section[$section];
    if (count($section) === 0) {
        $no_product = <<<DELIMITER
        <div class="col-sm-12" style="margin-top:30px;">
            <p class="text-muted"># # #</p>
            <h5 class="text-muted" style="margin-top:25px; margin-bottom: 25px;">Restocking Shelves... Please Come Back Soon!</h5>
            <p class="text-muted"># # #</p>
        </div>
        DELIMITER;

        echo $no_product;
    }
    foreach ($section->children() as $product) {
        $div_media = (count($section) >= 3) ? "col-lg-4" : " ";
        $product_card = <<<DELIMITER
        <div class="col-sm-12 col-md-6 {$div_media} mb-3">
            <div class="card mb-3 h-100">
                <div class="embed-responsive embed-responsive-4by3">
                    <a href="../products/productDisplay.php?category={$aisle}&amp;id={$product->id}"><img src="../uploads/{$product->image}" class="card-img-top embed-responsive-item" alt="{$product->name}"></a>
                </div>
                <div class="card-body">
                    <a href="../products/productDisplay.php?category={$aisle}&amp;id={$product->id}"><h4 class="card-title">{$product->name}</h4></a>
                    <p class="card-text card-price">{$product->name} &#8211; {$product->university}</p>
                    <p class="card-text">{$product->major}  </p>
                    <p class="card-text">{$product->year}  </p>
                    <p class="card-text"><small class="text-muted">{$product->sentence}</small></p>
                    <p> ------------------------------------------------------</p>
                    
                    <h4 class="card-text" style="font-size: 18px;">{$product->rate}</h4>
                    <h4 class="card-text" style="font-size: 18px;">{$product->review}</h4>
                    <h4 class="card-text" style="font-size: 18px;">{$product->review2}</h4>
                    <br>
                    <a href="../products/productDisplay.php?category={$aisle}&amp;id={$product->id}">See details</a>
                    
                </div>
            </div>
        </div>
        DELIMITER;

        echo $product_card;
    }
}

// ----- product page functions

function getJumbotron($aisle_name)
{
    $category = explode("_", $aisle_name)[1];
    return "jumbotron-" . $category;
}

function getProductXml($product_aisle, $product_id)
{
    $aisle_xml = load_aisle_xml($product_aisle);
    $product_xml = NULL;
    foreach ($aisle_xml->children() as $section) {
        foreach ($section->children() as $product) {
            if (strcasecmp($product->id, $product_id) === 0) {
                $product_xml = $product;
                break;
            }
        }
    }

    return $product_xml;
}

// dynamically generate the options that may be required for a product
function getOptions($options)
{
    $option_type = $options->getName();
    $option_uc = ucfirst($option_type);
    $select_open = <<<DELIMITER
        <select class="custom-select custom-select-lg mb-3 product-size" id="{$option_type}">
            <option selected>{$option_uc} - {$options[0]}</option>
    DELIMITER;
    echo $select_open;
    $i = 1;
    while ($i < count($options)) {
        $select_option = <<<DELIMITER
            <option value="{$i}">{$option_uc} - {$options[$i]}</option>
        DELIMITER;
        echo $select_option;
        $i++;
    }

    $select_close = <<<DELIMITER
        </select>
    DELIMITER;
    echo $select_close;
}