<?php
include("header.php");

?>
<h2 class="h2">Featured Products</h2>

<!-- Products -->
<section class="tiles">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="text-primary">Our Products</h1>
            <div class="row g-4">
            <?php
                    $sql = "select * from product";
                    $result = mysqli_query($con, $sql);
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                <div class="col-md-4 col-lg-3">
                   
                        <article class="style1">
                            <span class="image">
                                <?php
                                echo "<img src=\"/admin/img/product/{$rows['product_image']} \" height=300px; width=300px>"
                                ?>
                            </span>
                            <a href="product-details.php">
                                <h2><?php echo $rows['product_name'] ?></h2>

                                <p><strong>Rs <?php echo $rows['price'] ?></strong></p>

                                <p><?php echo $rows['description'] ?></p>
                            </a>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </article>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>



<?php
include("footer.php");

?>