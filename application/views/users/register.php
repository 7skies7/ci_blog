<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">

			<div class="col-md-4">

				<div class="pmd-card card-default pmd-z-depth loginCenter">	
					
					<div class="register-card">
						<div class="pmd-card-title card-header-border text-center">
							<?php if(validation_errors()){ ?> 
							<div class="alert alert-danger" role="alert"> 
								<?php echo validation_errors(); ?> 
							</div>
							<?php } ?>
							<?php if($this->session->flashdata('success')){ ?> 
							<div class="alert alert-success" role="alert"> 
								<?php echo $this->session->flashdata('success');?> 
							</div>
							<?php } ?>
							<h3>Sign Up </h3>
						</div>
						<?php echo form_open('user/create'); ?>
						  <div class="pmd-card-body">
						  
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label for="name" class="control-label pmd-input-group-label">Name</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
										<input class="form-control" id="name" name="name" type="text" required=""><span class="pmd-textfield-focused" ></span>
									</div>
								</div>
								
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label for="email" class="control-label pmd-input-group-label">Email address</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
										<input class="form-control" id="email" name="email" type="email" required=""><span class="pmd-textfield-focused" ></span>
									</div>
								</div>
								
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label for="password" class="control-label pmd-input-group-label">Password</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
										<input class="form-control" id="password" name="password" type="password"><span class="pmd-textfield-focused" required=""></span>
									</div>
								</div>

								<div class="form-group pmd-textfield pmd-textfield-floating-label">       
									<label for="role" class="control-label pmd-input-group-label">Role</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
										<select id="role" name="role" class="select-simple form-control pmd-select2">
											<option></option>
											<option value="2">Content Creator</option>
											<option value="3">User</option>

										</select>
									</div>
								</div>
							</div>
						  
						  	<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
							  	<input type="hidden" value="0" name="content_activate" id="content_activate">
								<input type="submit" value="Sign Up" class="btn pmd-ripple-effect btn-primary btn-block">
								<p class="redirection-link">Already have an account? <a href="<?php echo base_url('login'); ?>" class="register-login">Sign In</a>. </p>
						  	</div>
						</form>
					</div>
					
					<div class="forgot-password-card">
						<form>	
						  <div class="pmd-card-title card-header-border text-center">

							<h3>Forgot password?<br><span>Submit your email address and we'll send you a link to reset your password.</span></h3>
						</div>
						  <div class="pmd-card-body">
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
										<input class="form-control" id="exampleInputAmount" type="text"><span class="pmd-textfield-focused"></span>
									</div>
								</div>
							</div>
						
						  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
							<a href="index.html" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Submit</a>
							<p class="redirection-link">Already registered? <a href="javascript:void(0);" class="register-login">Sign In</a></p>
						  </div>
						</form>
					</div>
				</div>
				<!-- section content end -->  
			</div>
		</div>
	</div>
</div>

<div tabindex="-1" class="modal fade" id="roledialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<p>Please note that if you are registering as content creator then you will be registered as a normal user until Admin approves your request. If admin approves then your role would change to content creator.</p>
			</div>
		</div>
	</div>
</div>