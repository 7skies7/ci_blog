<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">
		 	
		 	<?php foreach($posts as $post){ ?>
		 	<!--Recent Posts-->
		 	<div class="col-lg-4 col-sm-6 col-xs-12">
				<!-- Default card starts -->
				<div class="pmd-card pmd-card-default pmd-z-depth">

				    
				    <!-- Card media -->
				    <div class="pmd-card-media">
				        <img src="<?php echo base_url('/uploads/'.$post['post_image']); ?>" width="1184" height="666" class="img-responsive fixedwdImg">
				    </div>
				    
				    <!-- Card body -->
				    <div class="pmd-card-title">
				        <h2 class="pmd-card-title-text">
				        <?php echo substr(strip_tags($post['post_title']), 0, 25); ?></h2>
				        <!-- <span class="pmd-card-subtitle-text">Secondary text</span>	 -->
				    </div>	
				    
				    <div class="pmd-card-body">
				        <?php echo substr(strip_tags($post['post_desc']), 0, 150); ?>....
				    </div>
				    

				    
				    <!-- Card actions -->
				    <div class="pmd-card-actions">
				        <a href="<?=base_url('post/'.$post['id']);?>" class="btn pmd-btn-raised pmd-ripple-effect btn-primary" type="button">View</a>
				        <?php if ($this->session->userdata('logged_in') && $this->session->userdata('role_id') == 1){ ?>
					        <a href="<?=base_url('post/edit/'.$post['id']);?>" class="btn pmd-btn-raised	 pmd-ripple-effect btn-default">Edit</a>
					        <a href="<?=base_url('post/delete/'.$post['id']);?>" class="btn pmd-btn-raised	 pmd-ripple-effect btn-default">Delete</a>
					    <?php } ?>
				    </div>
				</div>
				<!--Default card ends -->
				
		 	</div><!-- end Recent Posts-->	
		 
		 	<?php } ?>
		 	
	</div>
	<div class="row" id="card-masonry">
		<div class="text-center"><?php echo $links; ?></div>
	</div>
</div>

</div><!--end content area-->

