<?php include 'header.php';?>

    <div class="container">

        <div class="row">
            <div class="box" id="lightgallery">
                <?php for($i=1;$i<=24;$i++) { ?>
	              <div class="col-sm-3" data-src="Images/Spring<?php echo $i; ?>.JPG" data-sub-html="Title">
                  <a href="">
                    <img class="img-responsive img-border img-full" src="Images/Spring<?php echo $i;?>.JPG" alt="">
                    <span>Title</span>
                  </a>
                </div>
				<?php } ?>
			</div>
        </div>

    </div>
    <!-- /.container -->
<?php include 'footer.php';?>
