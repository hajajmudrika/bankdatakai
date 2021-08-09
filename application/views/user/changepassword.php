    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="rowa">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Kereta Api Indonesia </h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i>Home</li>
                        <li><i class="fa fa-laptop"></i><?= $title; ?></li>
                    </ol>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('user/changepassword'); ?>" method="POST">
                            <div class="form-group">
                                <label for="current_password">Password lama</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                <?php echo form_error('current_password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="new_password1">Password Baru</label>
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?php echo form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="new_password2">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?php echo form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--main content end-->
        </section>
        <!-- container section start -->