<?php
include("header.php");

?>
<br>

<!-- Single Product Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-lg-8 col-xl-9">
                <div class="row g-4">
                <?php
                    $sql = "select * from product order by id asc limit 1";
                    $result = mysqli_query($con, $sql);
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-6">
                        <div class="border rounded">
                            <a href="#">
                            <?php
                                echo "<img src=\"/admin/img/product/{$rows['product_image']} \" height=300px; width=300px>"
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="fw-bold mb-3"><?php echo $rows['product_name'] ?></h4>
                        <h5 class="fw-bold mb-3">Rs <?php echo $rows['price'] ?></h5>
                        <div class="d-flex mb-4">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="mb-4"><?php echo $rows['description'] ?></p>
                        <div class="input-group quantity mb-5" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <a href="#" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Single Product End -->



        <?php
        include("footer.php");

        ?>