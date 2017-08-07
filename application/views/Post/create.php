<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid ">
		<div class="row" id="card-masonry">
		 	<div class="col-md-12">
				<div class="pmd-card pmd-z-depth pmd-card-custom-form"> 
					<div class="pmd-card-body removeHeight">
						<h1 class="text-right"><?= $title; ?> </h1>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="pmd-card pmd-z-depth pmd-card-custom-form">
					
					<?php if(validation_errors()){ ?> 
						<div class="alert alert-danger" role="alert"> 
						<?php echo validation_errors(); ?> 
					</div>
					<?php } ?>
					<?php echo form_open_multipart('post/create'); ?>
					<div class="pmd-card-body"> 
						<!-- Regular Floating Input -->
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<label for="post_title" class="control-label">Post Title</label>
							<input id="post_title" class="form-control" type="text" name="post_title"><span class="pmd-textfield-focused" ></span>
							</div>
						<!-- Password Floating Input -->	
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<label for="post_desc" class="control-label">Post Content</label>
							<textarea id="post_desc" class="form-control" type="textarea" name="post_desc"></textarea><span class="pmd-textfield-focused" ></span>
							
						</div>
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<label for="post_image" class="control-label">Post Image</label>
							<input id="post_image" class="form-control" type="file" name="post_image"><span class="pmd-textfield-focused" ></span>
							
						</div>
							
						
						 <div class="pmd-card-actions">
						 	<input id="post_author" name="post_author" type="hidden" value="<?php echo $this->session->userdata('id');?>">
							<button type="submit" class="btn minWidthC text-center pmd-btn-raised pmd-ripple-effect btn-info form-control">Save</button>	
							
						</div>
					</div>
				</div>
							
			</div>
		 	
		 	
	</div>
</div>

</div><!--end content area-->

