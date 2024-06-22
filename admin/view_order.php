<?php
include("./connection.php");
include("./header.php");
?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <span class="badge badge-warning badge-counter">2</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                                    having.</div>
                                <div class="small text-gray-500">Udin Cilok · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                                <div class="status-indicator bg-default"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                                    say this to all dogs, even if they aren't good...</div>
                                <div class="small text-gray-500">Jaenab · 2w</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-tasks fa-fw"></i>
                        <span class="badge badge-success badge-counter">3</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Task
                        </h6>
                        <a class="dropdown-item align-items-center" href="#">
                            <div class="mb-3">
                                <div class="small text-gray-500">Design Button
                                    <div class="small float-right"><b>50%</b></div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item align-items-center" href="#">
                            <div class="mb-3">
                                <div class="small text-gray-500">Make Beautiful Transitions
                                    <div class="small float-right"><b>30%</b></div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item align-items-center" href="#">
                            <div class="mb-3">
                                <div class="small text-gray-500">Create Pie Chart
                                    <div class="small float-right"><b>75%</b></div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="../me.png" style="max-width: 60px">
                        <span class="ml-2 d-none d-lg-inline text-white small">Muhammad Yazdan</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to logout?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <a href="login.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-11 mx-auto">
            <div class="bg-light rounded h-100 p-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-Dark">Client Name :
                                <?php

                                $sql = "select `order` .* ,  `client`.`name` from `order` inner join `client` on `client`.`id` = `order`.`client_id_FK`";
                                $result = mysqli_query($con, $sql);

                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <?php echo $rows['name'] ?></h6>
                        </div><br>
                        <div class="col-lg-8 card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-Dark">Delivery Address :
                                <?php echo $rows['delivery_address'] ?></h6>

                        </div><br>
                        <div class="col-lg-8 card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-Dark">Payment Method :
                                <?php
                                    echo $rows['payment_method'] ?>
                                </h6>
                            <h6 class="m-0 font-weight-bold text-Dark">Order Status :
                                <?php if ($rows['status'] == 0) : ?>
                                    <span class="badge badge-light border px-3 rounded-pill">Pending</span>
                                <?php elseif ($rows['status'] == 1) : ?>
                                    <span class="badge badge-primary px-3 rounded-pill">Packed</span>
                                <?php elseif ($rows['status'] == 2) : ?>
                                    <span class="badge badge-warning px-3 rounded-pill">Out for Delivery</span>
                                <?php elseif ($rows['status'] == 3) : ?>
                                    <span class="badge badge-success px-3 rounded-pill">Delivered</span>
                                <?php else : ?>
                                    <span class="badge badge-danger px-3 rounded-pill">Cancelled</span>
                                <?php endif; ?>
                            </h6>
                        </div><br>
                        <div><a href="./update_status.php"><button type="submit" name="submit" class="btn btn-primary h-75 m-2">Update Status</button></a></div>
                        <div class="col-lg-8 card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-Dark">Payment Status :
                                <?php
                                    if ($rows['paid'] == 0) : ?>
                                    <span class="badge badge-light border px-2 rounded-pill">No Paid</span>
                                <?php else : ?>
                                    <span class="badge badge-success px-2 rounded-pill">Paid</span>
                                <?php endif; ?>
                        </div><br>
                    <?php  } ?>
                    <div class="col-lg-8 card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Order Table :</h6>
                    </div>
                    <div class="col-lg-4 card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="./order_show.php">
                            <h6 class="m-0 font-weight-bold text-success">Order Show</h6>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="table-responsive table-bordered text-center text-dark e1">
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">Qty </th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>



                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $sql = "select * from order_list";
                                $result = mysqli_query($con, $sql);
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>

                                    <td><?php echo $rows['quantity'] ?></td>
                                <?php  } ?>
                                <?php
                                $sql = "select `order_list` .* ,  `product`.`product_name` from `order_list` inner join `product` on `product`.`id` = `order_list`.`product_id_FK`";
                                $result = mysqli_query($con, $sql);
                                while ($rows = mysqli_fetch_assoc($result)) {
                                    // 
                                ?>
                                    <td><?php echo $rows['product_name'] ?></td>
                                <?php  } ?>
                                <?php
                                $sql = "select * from order_list";
                                $result = mysqli_query($con, $sql);
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>

                                    <td><?php echo number_format($rows['price']) ?></td>
                                    <td><?php echo number_format($rows['total']) ?></td>


                            </tr>
                        <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php
    include("./footer.php");
    ?>