<div class="container">
	<h2>Gallery Images</h2>
	<hr>
	<div class="head">
		<a href="<?php echo base_url('manage_gallery/'); ?>" class="glink">Manage</a>
	</div>
    <div class="gallery">
        <?php if(!empty($gallery)){ ?>
        <?php
			foreach($gallery as $row){
				$uploadDir = base_url().'uploads/images/';
                $imageURL = $uploadDir.$row["file_name"];
        ?>
		<div class="col-lg-3">
            <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>" >
                <img src="<?php echo $imageURL; ?>" alt="" />
				<p><?php echo $row["title"]; ?></p>
            </a>
		</div>
        <?php } ?>
		<?php }else{ ?>
			<div class="col-xs-12">
				<div class="alert alert-danger">No image(s) found...</div>
			</div>
		<?php } ?>
    </div>
</div>

<!-- Fancybox CSS library -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fancybox/jquery.fancybox.css'); ?>">

<!-- Fancybox JS library -->
<script src="<?php echo base_url('assets/fancybox/jquery.fancybox.js'); ?>"></script>

<!-- Initialize fancybox -->
<script>
	$("[data-fancybox]").fancybox();
</script>