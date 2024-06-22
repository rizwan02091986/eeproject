<?php
include("header.php");

?>
<h2 class="h2">Featured Products</h2>

<!-- Products -->
<section class="tiles">
    <<?php
        $sql = "select * from product";
        $result = mysqli_query($con, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
        ?> <article class="style1">
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
        <?php } ?>`
</section>
<br>



<?php
include("footer.php");

?>