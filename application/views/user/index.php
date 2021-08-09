            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <div class="row">
                    <div class="col-lg-6">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                            </div>
                            <div class="team-content">
                                <h3 class="name"><?= $user['name']; ?></h3>
                                <h4 class="title"><?= $user['role_id']; ?></h4>
                            </div>
                            <ul class="social">
                                <li class="sejak">Sejak <?= date('d M Y', $user['date_created']); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->