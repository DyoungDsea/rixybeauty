
   
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="opening-time text-left"><i class="fa fa-clock-o color-d5"></i> <span>Opening Hour: Mon - Fri : 09:00 - 18:00</span> </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-mail text-right"> <a href="#"><i class="fa fa-envelope color-d5"></i><?php echo $rixy['demail']; ?></a> <span>/</span> <a href="#"><i class="fa fa-phone color-d5"></i><?php $explode =  explode(',', $rixy['dphone']); echo $explode[0].','.$explode[1] ?> </a> </div>
                </div>
            </div>
        </div>
    </div>

    <header class="beauty-header" id="beauty-header" style="border-bottom: 2px solid #d5275a;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="menuzord" class="menuzord">
                        <a href="home" class="menuzord-brand custom-logo"><img id="logo" src="images/logo.png" alt="logo"></a>
                        <ul class="menuzord-menu menuzord-right">                            
                            <li class="<?php echo findBaseName('home'); ?>"><a href="home" title="Home">Home</a></li>
                            <li class="<?php echo findBaseName('services'); ?>"><a href="services" title="Services">Services</a></li>                            
                            <li class="<?php echo findBaseName('products'); ?>"><a href="products" title="Products">Products</a></li>
                            <?php if(isset($_SESSION['rixy']) AND $_SESSION['cream'] ==true){ ?>                            
                            <li class="<?php echo findBaseName('dashboard'); ?>"><a href="dashboard" title="dashboard">Dashboard</a></li>     
                            <?php } ?>                       
                            <li class="<?php echo findBaseName('about'); ?>"><a href="about" title="About us">About Us</a></li>
                            <li class="<?php echo findBaseName('contact'); ?>"><a href="contact" title="Contact">Contact</a></li>
                        </ul>
                        <button type="button" id="search-button" data-toggle="modal" data-target="#search-modal"><i class="fa fa-search"></i></button>
                    </div>
                    <!--/#menuzord-->
                </div>
                <!--/col-md-12-->
            </div>
        </div>
    </header>
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->
