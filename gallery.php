<?php include 'header.php';?>

    <div class="container">

        <div class="row">
            <div class="box" id="lightgallery">
                <?php for($i=1;$i<=27;$i++) { ?>
				<div class="col-sm-3" data-src="Images/Spring<?php echo $i; ?>.JPG" data-sub-html="Spring<?php echo $i;?>">
                  <a href="">
                    <img class="img-responsive img-border img-full" src="Images/Spring<?php echo $i;?>.JPG" alt="">
					 <span>Spring<?php echo $i;?></span>
                  </a>
                </div>
				<?php } ?>
			</div>
        </div>

    </div>
    <!-- /.container -->
<?php include 'footer.php';?>
