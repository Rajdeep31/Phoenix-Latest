<?php
    require('top.php');
?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: #f7f7f7 no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Login</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
		<section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="login-form" action="user_login.php" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" name="login_email" id="login_email" placeholder="Enter Your Email*" style="width:100%" required>
										</div>
										<span class="field_error" id="login_email_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="login_password" id="login_password" class="password" placeholder="Enter Your Password*" style="width:100%" required>
                                        </div>
										<span class="field_error" id="login_password_error"></span>
									</div>
                                    <div>
                                        <a href="forget.php" class="text">Forgot password?</a>
                                        </div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn" onclick="user_login()">Login</button>
									</div>
                                
								</form>
								<div class="form-output login_msg">
									<p class="form-messege field_error"></p>
								</div>
							</div>
						</div> 
				</div>
				

					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="register-form" action="user_register.php" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id="name" placeholder="Enter Your Name*" name="name" style="width:100%" required>
										</div>
										<span class="field_error" id="name_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" id="email" placeholder="Enter Your Email*" name="email" style="width:100%" required>
										</div>
										<span class="field_error" id="email_error"></span>
									</div>
									
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" id="password" name="password" placeholder="Enter Your Password*" name="password" style="width:100%" required>
										</div>
										<span class="field_error" id="password_error"></span>
									</div>
                                    <div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" id="confirm_password" name="confirmpassword" placeholder="Confirm Password*" style="width:100%" required>
										</div>
										<span class="field_error" id="confirmpassword_error"></span>
									</div>
                                    <div class="checkbox-text">
                                        <div class="checkbox-content">
                                            <input type="checkbox" id="termCon" required>
                                            <label for="termCon" class="text" >I accepted all terms and conditions</label>
                                        </div>
                                    </div>  
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn" onclick="user_register()">Register</button>
									</div>
								</form>
								<div class="form-output register_msg">
									<p class="form-messege"></p>
								</div>
							</div>
						</div>                 
				</div>					
            </div>
        </section>
        <!-- End Contact Area -->
<?php
    require('footer.php');
?>