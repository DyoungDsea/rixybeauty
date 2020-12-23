
    <!-- jQuary library -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!--bootstrap js-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--jquery-ui js-->
    <script src="js/jquery-ui.min.js"></script>

    <!--menuzord js-->
    <script src="js/menuzord.js"></script>

    <!--slick js-->
    <script src="js/slick.js"></script>

    <!--owl.carousel js-->
    <script src="js/owl.carousel.min.js"></script>

    <!--nice-select js-->
    <script src="js/jquery.nice-select.min.js"></script>

    <!--venobox js-->
    <script src="js/venobox.min.js"></script>

    <!--counterup js-->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>

    <!--vide js for background video-->
    <script type="text/javascript" src="js/jquery.vide.js"></script>

    <!--isotope js-->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    
    <!--google map js-->
    <script type="text/javascript" src="js/map.control.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuE-L3bIAAbYiHgFs5tVRBg03HiLojuks&amp;callback=myMap"></script>

    
    <!-- all jQuary activation code here and always it will be bottom of all script tag -->
    <script src="js/main.js"></script>

    <script src="js/toastr.min.js"></script>
  <script src="js/sweetalert.js"></script>
  <script src="js/sea.js"></script>

  <script>
      toastr.options = {
      "debug": false,
      "positionClass": "toast-bottom-right",
      "onClcik":null,
      "fadeIn":300,
      "fadeOut":1000,
      "timeOut":5000,
      "extendedTimeOut":1000
    }
  </script>
  <?php
    if(isset($_SESSION['msgs'])){ ?>
    <script>     
    toastr.success("<?php echo $_SESSION['msgs']; ?>"); 
    </script>
    <?php
unset($_SESSION['msgs']);
  } ?>

<?php
    if(isset($_SESSION['msg'])){ ?>
    <script>     
    toastr.error("<?php echo $_SESSION['msg']; ?>"); 
    </script>
    <?php
unset($_SESSION['msg']);
  } ?>



