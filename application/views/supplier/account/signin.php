
<!-- login content section start -->
		<div class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="tb-login-form">
                            <p>Welcome login to your account</p>
                            <form id="supplierLoginForm" method="POST" class="form-style2">
                                 <div class="form-group">
                                    <div class="field-icon">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Email / supplier id/ mobile" value="<?= $this->input->get('username') ?>">
                                        <img class="login-icon" src="<?= base_url('dist/img/login.png') ?>">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="field-icon relative">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <img class="pass-icon" src="<?= base_url('dist/img/login-key.png') ?>">
                                    </div>
                                </div>
                                <div class="forgot-password1 form-group relative">
                                    <label class="inline2">
                                        <input type="checkbox" name="rememberme7">
                                        Remember me! <em>*</em>
                                    </label>
                                    <a class="forgot-password" href="javascript: void(0)" id="forgot-pass">Forgot Your password?</a>
                                </div>
                                <p class="login-submit text-center">
                                    <input class="button-primary" type="submit" value="Login">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- login  content section end -->