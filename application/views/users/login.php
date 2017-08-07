<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">

			<div class="col-md-4">
				<!-- section content start-->
				<div class="pmd-card card-default pmd-z-depth loginCenter">
					<div class="login-card">
						
						<?php echo form_open('user/store'); ?>
							<div class="pmd-card-title card-header-border text-center">
	
								<h3>Sign In </h3>
							</div>
							
							<div class="pmd-card-body">
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
								<?php if($this->session->flashdata('error')){ ?> 
								<div class="alert alert-danger" role="alert"> 
									<?php echo $this->session->flashdata('error');?> 
								</div>
								<?php } ?>
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label for="email" class="control-label pmd-input-group-label">Email Address</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
										<input class="form-control" id="email" name="email" type="email"><span class="pmd-textfield-focused"></span>
									</div>
								</div>
								
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label for="password" class="control-label pmd-input-group-label">Password</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
										<input class="form-control" id="password" name="password" type="password"><span class="pmd-textfield-focused"></span>
									</div>
								</div>
							</div>
							<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
								<div class="form-group clearfix">
									<div class="checkbox pull-left">
										<label class="pmd-checkbox checkbox-pmd-ripple-effect">
											<input checked="" value="" type="checkbox">
											<span class="pmd-checkbox-label">&nbsp;</span><span class="pmd-checkbox"> Remember me</span>
										</label>
									</div>
						<!-- 			<span class="pull-right forgot-password">
										<a href="javascript:void(0);">Forgot password?</a>
									</span>
 -->								</div>
								<input type="submit" value="Login" class="btn pmd-ripple-effect btn-primary btn-block">
								<p class="redirection-link">Don't have an account? <a href="<?php echo base_url('register'); ?>" class="login-register">Sign Up</a>. </p>
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