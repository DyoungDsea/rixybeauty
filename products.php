<?php include 'head.php'; ?>
<body>



 <!-- ======================================= 
        ==Start Header section==  
    =======================================-->
    <?php include 'header.php'; ?>
    <!-- ======================================= 
        ==start Slider section==  
    =======================================-->




    <!-- ======================================= 
        ==Start Product gallery section== 
    =======================================-->
    <section class="product-gallery mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500">Products</h3>
                        <p>No information yet</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="filtering-area">
                        <div class="search-product">
                            <form action="products" class="form-inline">
                                <select class="form-control wide"  name="category" required>
                                    <option selected>Category</option>
                                    <?php
                                        $sqlx = $conn->query("SELECT * FROM dcategory ORDER BY dname");
                                        if($sqlx->num_rows>0){
                                            while($dop=$sqlx->fetch_assoc()){?>
                                            <option  value="<?php echo $dop['dname']; ?>"><?php echo $dop['dname']; ?></option>
                                        <?php    }
                                        }

                                        ?>
                                    <option value="all">Search All</option>
                                </select>
                                <div class="form-group search-wrapper">
                                    <input type="text" class="form-control" name="search" required placeholder="Search here">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        
                    </div>
                    <!--/filtering wrapper-->
                </div>
            </div>
            <!--/row-->

            <div class="row product-gallery-wrapper" id="product-gallery-v1">

            <?php
            if(isset($_GET['search']) ){
                $search = $_GET['search'];
                $category = $_GET['category'];
                $sql=$conn->query("SELECT * FROM dproducts WHERE pname LIKE '%$search%' OR dcategory LIKE '%$category%' OR pdesc LIKE '%$search%' OR dsub_cat LIKE '%$search%' ORDER BY id DESC");
            }else{
                $sql=$conn->query("SELECT * FROM dproducts ORDER BY id DESC");
            }
                if($sql->num_rows>0){
                    while($row=$sql->fetch_assoc()): 
                    ?>
                <!-- product-1 -->
                <div class="col-lg-3 col-md-4 mason">
                    <div class="single-product text-center pos-relative">
                        <div class="product-img pos-relative">
                            <img src="_product_images/<?php echo $row['dimg']; ?>" alt="product" class="img-fluid">
                            <div class="product-hover">
                                <ul >
                                    <li><a href="#" title="Add to Favourite"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="_product_images/<?php echo $row['dimg']; ?>" class="color-ff text-capitalize roboto venobox" data-gall="gallery1" title="<?php echo $row['pname']; ?>">View Product</a></li>
                                    <li><a href="#" title="Add to Favourite"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-price">
                            <h6 class="color-72 fw-500">&#8358;<?php echo number_format($row['pprice']); ?></h6>
                            <div class="product-divider"></div>
                            <a href="product-details?pid=<?php echo $row['pid']; ?>" class="roboto fw-500" title="View Details"><?php echo $row['pname']; ?></a>
                        </div>
                    </div>
                </div>
                <!--/col-->
                <?php endwhile; }else{?>
                    <strong class="text-danger">No Product added yet</strong>
                <?php   } ?>
               
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-12">
                    <ul class="pagination pt-20">
                        <li>
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#" class="current-item">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Product gallery section== 
    =======================================-->


     
    <!-- ======================================= 
            ==Start footer section==  
    =======================================-->
    <?php include 'footer.php'; ?>
    <!-- ======================================= 
            ==End footer section== 
    =======================================-->


    <?php include 'script.php'; ?>
</body>


<!-- Mirrored from beautylab.themecon.net/HTML/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 20:52:35 GMT -->
</html>
