<?php include 'header.php';?>

    <div class="container">

        <div class="row">
            <div class="box" id="lightgallery">
                <?php for($i=1;$i<=24;$i++) { ?>
				<div class="col-sm-3" data-src="img/Images/Spring<?php echo $i; ?>.JPG">
                  <a href="">
                    <img class="img-responsive img-border img-full" src="Images/Spring<?php echo $i;?>.JPG" alt="">
                  </a>
                </div>
				<?php } ?>
			</div>
        </div>

    </div>
    <!-- /.container -->
<?php include 'footer.php';?>
