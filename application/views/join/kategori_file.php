    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="rowa">
                <div class="col-lg-12">
                    <h3 class="page-header"><?= $title; ?></h3>

                </div>
            </div>



            <div class="rowa">
                <div class="col-lg-12">
                    <section class="panel">

                        <div class="panel-body">
                            <div class="tab-pane" id="chartjs">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <section class="panel">

                                            <?= $this->session->flashdata('messsage'); ?>
                                            <form class="form-horizontal " method="post" action="<?= base_url(); ?>joint/kategori">


                                                <!-- Kategori File -->
                                                <table class="table table-striped table-dark">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Judul</th>
                                                            <th scope="col">File</th>
                                                            <th scope="col">Bulan</th>
                                                            <th scope="col">Tahun</th>
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col" colspan="2">AKSI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1; ?>
                                                        <?php foreach ($inject as $j) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i; ?></th>
                                                                <td><?= $j['judul']; ?></td>
                                                                <td><?= $j['file']; ?></td>
                                                                <td><?= $j['bulan']; ?></td>
                                                                <td><?= $j['tahun']; ?></td>
                                                                <td><?= $j['tanggal']; ?></td>
                                                                <td>

                                                                    <a href="<?php echo base_url() ?>Joint/edit/<?php echo $j['id'] ?>" class="badge badge-primary"> Edit</a>
                                                                    <a href="<?php echo base_url() ?>Joint/hapus_data/<?php echo $j['id'] ?>" class="badge badge-danger"> Hapus</a>
                                                                    <a href="<?php echo base_url(); ?>Joint/download/<?php echo $j['file']; ?>" class="badge badge-success"> Download</a>

                                                                </td>

                                                            </tr>

                                                            <?php $i++; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>

                                        </section>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
        </section>
        </div>
        </dixv>

    </section>
    <!--main content end-->
    </section>
    <!-- container section start -->