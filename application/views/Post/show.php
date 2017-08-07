<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">
		 	<div class="col-md-12">
				<div class="pmd-card pmd-z-depth pmd-card-custom-form"> 
					<div class="pmd-card-body removeHeight">
						<h1 class="text-right"><?= $title; ?> </h1>
					</div>
				</div>
			</div>
		 	<!--Recent Posts-->
		 	<div class="col-lg-12 col-sm-12 col-xs-12">
				<!-- Default card starts -->
				<div class="pmd-card pmd-card-default pmd-z-depth"> 


				    <!-- Card media -->
				    <div class="pmd-card-media">
				        <img src="<?php echo base_url('/uploads/'.$post['post_image']); ?>" width="1184" height="666" class="img-responsive">
				    </div>
				    
				    <!-- Card body -->
				    <div class="pmd-card-title">
				        <h2 class="pmd-card-title-text"><?php echo $post['post_title']; ?></h2>
				        <!-- <span class="pmd-card-subtitle-text">Secondary text</span>	 -->
				    </div>	
				    
				    <div class="pmd-card-body">
				        <?php echo $post['post_desc']; ?>
				    </div>
				    

				    
				    <!-- Card actions -->
				    <div class="pmd-card-actions text-center">
				    	<?php if ($this->session->userdata('logged_in') && $this->session->userdata('role_id') != 3){ ?>
				        <a href="<?=base_url('post/edit/'.$post['id']);?>" class="btn pmd-btn-raised pmd-ripple-effect btn-primary" type="button">Edit</a>
				        <?php } ?>
				        <a href="<?=base_url('posts');?>" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Back</a>
				    </div>
				</div>
				<!--Default card ends -->
				
		 	</div><!-- end Recent Posts-->	
		 
		 	
	</div>
</div>

</div><!--end content area-->

