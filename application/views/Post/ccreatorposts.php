<!--content area start-->
<div id="content" class="pmd-content inner-page">

<!--tab start-->
<div class="container-fluid full-width-container data-tables">

		<!-- Responsive table -->
		<section class="row component-section">
		
			<!-- responsive table code and example -->
			<div class="col-md-12">
				<!-- responsive table example -->
			<a href="<?php echo base_url('post/create');?>" class="btn pmd-btn-raised pmd-ripple-effect btn-primary">Create Post</a>
				<div class="pmd-card pmd-z-depth pmd-card-custom-view">

					<table id="example" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Post Image</th>
								<th>Post Title</th>
								<th>Post Desc</th>
								<th>Actions</th>

							</tr>
						</thead>
						<tbody>
						<?php foreach($posts as $post){ ?>
							<tr>
								<td><img src="<?php echo base_url('uploads/'.$post['post_image']); ?>" width="50" height="50"></td>
								<td><?php echo strip_tags($post['post_title']); ?></td>
								<td><?php echo substr(strip_tags($post['post_desc']), 0, 30); ?></td>
								<td>
									<a href="<?=base_url('post/edit/'.$post['id']);?>" class="btn pmd-btn-raised	 pmd-ripple-effect btn-primary">Edit</a>
					        		<a href="<?=base_url('post/delete/'.$post['id']);?>" class="btn pmd-btn-raised	 pmd-ripple-effect btn-primary">Delete</a>
					        	</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div> <!-- responsive table example end -->
				
			</div> <!-- responsive table code and example end-->
		</section> <!-- Responsive table end -->
	</div>
</div>