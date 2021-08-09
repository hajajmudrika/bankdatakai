<div class="container h-100">
    <div class="row justify-content-md-center h-100">
        <div class="card-wrapper">
            <div class="brand">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="logo">
            </div>

            <div class="card fat">
                <div class="card-body">
                    <div class="text-center">
                        <img src="<?= base_url() ?>assets/img/profil.png" alt="profil avatar" style="width: 75px;">
                    </div>

                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?php echo set_value('email'); ?>" size="50">
                            <?php echo form_error('email'); ?>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password
                                <a href="<?= base_url('auth/forgotpassword'); ?>" class="float-right">
                                    Forgot Password?
                                </a>
                            </label>
                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            <?php echo form_error('password'); ?>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-checkbox custom-control">
                                <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                <label for="remember" class="custom-control-label">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group m-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>
                        </div>
                        <div class="mt-4 text-center">
                            Don't have an account? <a href="<?= base_url('auth/registrasi'); ?>">Create One</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="footer">
                Copyright &copy; &mdash; PT Kereta Api Indonesia DIVRE III Palembang
                <br> 13 Ulu, Kec. Seberang Ulu II, Kota Palembang, Sumatera Selatan
            </div>

        </div>
    </div>
</div>