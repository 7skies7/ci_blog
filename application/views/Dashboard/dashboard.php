<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid full-width-container data-tables">
		<div class="row" id="card-masonry">
		<?php if($this->session->flashdata('success')){ ?> 
		<div class="alert alert-success" role="alert"> 
			<?php echo $this->session->flashdata('success');?> 
		</div>
		<?php } ?>
		 <!--Statistics-->
		 <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="pmd-card pmd-z-depth statistics-content">      
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-green">
							<svg version="1.1" id="Layer_1" x="0px" y="0px" width="36px" height="26.25px" viewBox="279.765 332.782 36 26.25" enable-background="new 279.765 332.782 36 26.25" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M312.318,332.782c-1.928,0-3.485,1.558-3.485,3.485c0,0.89,0.334,1.706,0.89,2.336l-6.117,8.898
										c-0.371-0.112-0.742-0.186-1.148-0.186c-0.557,0-1.077,0.111-1.521,0.334l-4.82-4.932c0.296-0.519,0.445-1.075,0.445-1.706
										c0-1.927-1.557-3.485-3.485-3.485c-1.928,0-3.485,1.558-3.485,3.485c0,0.853,0.296,1.595,0.779,2.225l-6.155,8.972
										c-0.296-0.074-0.63-0.148-0.964-0.148c-1.928,0-3.485,1.558-3.485,3.486c0,1.927,1.557,3.485,3.485,3.485
										c1.928,0,3.485-1.558,3.485-3.485c0-0.89-0.333-1.706-0.889-2.336l6.118-8.935c0.333,0.111,0.742,0.185,1.112,0.185
										c0.593,0,1.187-0.148,1.669-0.445l4.782,4.931c-0.334,0.556-0.556,1.187-0.556,1.854c0,1.927,1.556,3.485,3.485,3.485
										c1.927,0,3.484-1.558,3.484-3.485c0-0.816-0.297-1.595-0.78-2.188l6.155-9.009c0.296,0.074,0.63,0.148,0.964,0.148
										c1.93,0,3.485-1.558,3.485-3.486C315.765,334.339,314.244,332.782,312.318,332.782z"/>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Statistics</h2>
					</div>
				</div>
				<div class="pmd-card-body statistics text-center">
					<ul class="list-group list-inline">

						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="17.711px" viewBox="280.699 426.316 34 17.711" enable-background="new 280.699 426.316 34 17.711" xml:space="preserve">
									<g>
										<path fill="#40AC45" d="M297.696,444.027c-9.155,0-16.394-7.752-16.698-8.085c-0.397-0.434-0.397-1.106,0-1.54
											c0.304-0.333,7.543-8.086,16.698-8.086c9.156,0,16.402,7.753,16.706,8.086c0.397,0.434,0.397,1.106,0,1.54
											C314.09,436.275,306.852,444.027,297.696,444.027z M283.449,435.169c2.018,1.887,7.702,6.588,14.247,6.588
											c6.559,0,12.236-4.693,14.247-6.581c-2.018-1.888-7.702-6.581-14.247-6.581C291.137,428.588,285.46,433.281,283.449,435.169z"/>
										<path fill="#40AC45" d="M297.696,440.368c-2.864,0-5.2-2.336-5.2-5.199c0-2.864,2.336-5.2,5.2-5.2c0.629,0,1.135,0.506,1.135,1.136
											c0,0.629-0.506,1.135-1.135,1.135c-1.613,0-2.929,1.316-2.929,2.93c0,1.612,1.316,2.929,2.929,2.929s2.929-1.31,2.929-2.929
											c0-0.63,0.506-1.136,1.135-1.136c0.63,0,1.136,0.506,1.136,1.136C302.896,438.039,300.56,440.368,297.696,440.368z"/>
										<circle fill="#40AC45" cx="297.696" cy="435.024" r="1.685"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2"><?php echo $cposts; ?></div>
							<div class="source-semibold typo-fill-secondary">Posts</div>
						</li>
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="28.541px" viewBox="281.64 332.265 32 28.541" enable-background="new 281.64 332.265 32 28.541" xml:space="preserve">
									<g transform="translate(0,-952.36218)">
										<path fill="#40AC45" d="M297.64,1284.627c-4.044,0-7.352,3.307-7.352,7.351c0,4.045,3.307,7.352,7.352,7.352
											c4.045,0,7.352-3.307,7.352-7.352C304.991,1287.934,301.685,1284.627,297.64,1284.627z M297.64,1287.222
											c2.643,0,4.757,2.114,4.757,4.757s-2.114,4.757-4.757,4.757s-4.757-2.114-4.757-4.757S294.997,1287.222,297.64,1287.222z
											 M297.64,1300.195c-4.283,0-8.164,1.021-11.067,2.743s-4.933,4.255-4.933,7.203v1.73c0,0.716,0.581,1.297,1.297,1.297h29.406
											c0.716,0,1.297-0.581,1.297-1.297v-1.73c0-2.948-2.028-5.48-4.933-7.203C305.804,1301.215,301.923,1300.195,297.64,1300.195z
											 M297.64,1302.789c3.862,0,7.332,0.948,9.743,2.378c2.411,1.43,3.662,3.235,3.662,4.973v0.433h-26.811v-0.433
											c0-1.737,1.251-3.542,3.662-4.973C290.308,1303.737,293.778,1302.789,297.64,1302.789z"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2"><?php echo $cusers; ?></div>
							<div class="source-semibold typo-fill-secondary">Users</div>
						</li>

						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="28.196px" viewBox="281.64 306.578 32 28.196" enable-background="new 281.64 306.578 32 28.196" xml:space="preserve">
									<g>
										<path fill="#40AC45" d="M311.166,317.292c-1.711-0.186-3.422-0.297-5.059-0.409c-1.562-0.111-3.124-0.223-4.761-0.372l1.004-2.009
											l0.037-0.111c0.596-2.12,0.224-4.389-1.004-6.211l-0.483-0.744c-0.372-0.558-1.004-0.893-1.674-0.855
											c-0.669,0.037-1.265,0.409-1.599,1.041c-0.558,1.116-1.265,2.12-2.046,3.013c-0.707,0.818-1.302,1.339-2.008,1.897
											c-0.632,0.558-1.376,1.153-2.231,2.083c-1.004,1.079-1.897,2.306-2.678,3.57l-4.91,0.744c-1.153,0.186-2.008,1.19-2.008,2.343
											l0.111,8.741c0,1.264,1.079,2.306,2.343,2.306h6.844l11.679,2.455c0.446,0.111,0.93,0.148,1.376,0.148
											c2.642,0,5.096-1.525,6.212-4.017c0.595-1.302,1.153-2.715,1.674-4.166c0.706-1.971,1.302-4.017,1.711-6.1
											c0.148-0.781-0.037-1.6-0.483-2.232C312.691,317.776,311.948,317.367,311.166,317.292z M284.386,321.458l1.897-0.298l-0.297,8.555
											h-1.525L284.386,321.458z M309.492,325.847c-0.521,1.376-1.041,2.715-1.6,3.98c-0.78,1.785-2.752,2.79-4.649,2.38l-11.939-2.492
											h-2.678l0.297-8.926l1.414-0.224l0.297-0.558c0.707-1.302,1.6-2.529,2.604-3.645c0.744-0.818,1.339-1.302,2.009-1.86
											c0.707-0.595,1.45-1.19,2.269-2.194c0.67-0.781,1.302-1.637,1.822-2.529c0.67,1.116,0.855,2.455,0.559,3.72l-2.604,5.133
											l1.86,0.223c2.343,0.297,4.575,0.446,6.732,0.595c1.636,0.112,3.31,0.223,4.983,0.409c0.074,0,0.149,0.075,0.187,0.112
											s0.074,0.111,0.037,0.186C310.72,322.091,310.199,324.025,309.492,325.847z"/>
									</g>
								</svg>
							</div>
							<div class="pmd-display2"><?php echo $crequests; ?></div>
							<div class="source-semibold typo-fill-secondary">Requests Pending</div>
						</li>

					</ul>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end statistics-->
		 
		 		 <!--Recent Posts-->
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
						<h2 class="pmd-card-title-text typo-fill-secondary">Content Creator Requests</h2>
					</div>
				</div>

				
				<table id="requests" class="table pmd-table table-hover display responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email Address</th>
								
								<th>Actions</th>

							</tr>
						</thead>
						<tbody>
						<?php foreach($requests as $req){ ?>
							<tr>
								<td><?php echo $req['name'];?></td>
								<td><?php echo $req['email'];?></td>
								
								<td>
					        		<a href="<?=base_url('user/access/'.$req['id']);?>" class="btn pmd-btn-raised	 pmd-ripple-effect btn-primary" >Confirm Access</a>
								
					        	</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>			
			
		 </div><!-- end Recent Posts-->	

		 <!--Recent Posts-->
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
						<h2 class="pmd-card-title-text typo-fill-secondary">All Posts</h2>
					</div>
				</div>

				
				<table id="example" class="table pmd-table table-hover display responsive nowrap" cellspacing="0" width="100%">
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
				</div>			
			
		 </div><!-- end Recent Posts-->	
		 
		 <!--Recent Posts-->
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
						<h2 class="pmd-card-title-text typo-fill-secondary">All Users</h2>
					</div>
				</div>

				
				<table id="exampleUsers" class="table pmd-table table-hover display responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email Address</th>
								<th>Role</th>
								<th>Actions</th>

							</tr>
						</thead>
						<tbody>
						<?php foreach($users as $user){ ?>
							<tr>
								<td><?php echo $user['name'];?></td>
								<td><?php echo $user['email'];?></td>
								<td><?php echo $user['role_name'];?></td>
								<td><?php if($user['role_id'] == 1){ $disabled="disabled=''";}else{$disabled = '';}?>
					        		<a href="<?=base_url('user/delete/'.$user['id']);?>" class="btn pmd-btn-raised	 pmd-ripple-effect btn-primary" <?php echo $disabled;?>>Delete</a>
								
					        	</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>			
			
		 </div><!-- end Recent Posts-->	

	</div>
</div>

</div><!--end content area-->