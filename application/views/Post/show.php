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

		 				<?php if($this->session->userdata('logged_in')){ ?>
			<!--Add Comment-->
		 	<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="pmd-card pmd-z-depth recent-post">      
					<div class="pmd-card-title">
						<div class="media-left set-svg">
							<span class="service-icon img-circle bg-fill-red">
								<svg version="1.1" id="XMLID_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
									<path fill="#FFFFFF" d="M10,22h6L32,6l-6-6L10,16V22z M13,17L25,5l2,2L15,19h-2V17z M22,28H4V10h8l4-4H0v26h26V16l-4,4V28z"/>
								</svg>
							</span>
						</div>
						<div class="media-body media-middle">
							<h2 class="pmd-card-title-text typo-fill-secondary">Add Comments</h2>
							
						
						</div>


					</div>
					
					

					<?php echo form_open('post/addcomment'); ?>
					<div class="pmd-card-body"> 
						<!-- Regular Floating Input -->
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<label for="post_comment" class="control-label">Add Comment</label>
							<input id="post_comment" class="form-control" type="text" name="post_comment" ><span class="pmd-textfield-focused" ></span>
						</div>
					</div>
					<div class="pmd-card-actions">
					 	<input id="user_comment" name="user_comment" type="hidden" value="<?php echo $this->session->userdata('id');?>">
					 	<input id="post_id" name="post_id" type="hidden" value="<?php echo $post['id'];?>">
						<button type="submit" class="btn minWidthC text-center pmd-btn-raised pmd-ripple-effect btn-info form-control">Save</button>	
							
					</div>
					</form>
					</div>
		 		</div><!-- end Recent Posts-->	
			<?php } ?>

		 <!--Comments List-->
		 <?php if($comments){ ?>
		 	<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="pmd-card pmd-z-depth recent-post">      
					<div class="pmd-card-title">
						<div class="media-left set-svg">
							<span class="service-icon img-circle bg-fill-red">
								<svg version="1.1" id="XMLID_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
									<path fill="#FFFFFF" d="M10,22h6L32,6l-6-6L10,16V22z M13,17L25,5l2,2L15,19h-2V17z M22,28H4V10h8l4-4H0v26h26V16l-4,4V28z"/>
								</svg>
							</span>
						</div>
						<div class="media-body media-middle">
							<h2 class="pmd-card-title-text typo-fill-secondary">Comments</h2>
					
						</div>
					</div>
					
					<ul class="list-group pmd-card-list pmd-list-avatar">
						<?php foreach($comments as $comment){ ?>
							<li class="list-group-item">
								<div class="media-left"> 
									<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
										<img alt="40x40" class="img-responsive" src="<?php echo base_url('assets/images/user-icon.png');?>" data-holder-rendered="true"> 
									</a> 
								</div>
								<div class="media-body media-middle">
									<h3 class="list-group-item-heading"><?= $comment['name'] ;?></h3>
									<span class="list-group-item-text"><?= $comment['post_comment'] ;?></span>
								</div>
								<div class="media-right post">
									<span class="post-time"><?= timespan(strtotime($comment['created_at'])); ?></span>
								</div>
							</li>
						<?php } ?>
					</ul>
				

			
					</div>
		 		</div><!-- end Recent Posts-->	
		 	<?php } ?>

		 
		 	
	</div>
</div>

</div><!--end content area-->

