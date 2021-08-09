    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="rowa">
          <div class="col-lg-12">
            <h3 class="page-header"><?= $title; ?></h3>
          </div>
        </div>

        <?= $this->session->flashdata('message'); ?>

        <div class="rowa">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <?php echo form_open_multipart('joint/do_upload'); ?>
                    <div class="modal-body">
                      <div class="form-group">
                        <select name="judul" id="judul" class="form-control">
                          <option value="kamera">Kamera</option>
                          <option value="cctv">CCTV</option>
                          <option value="benang">Benang</option>
                          <option value="tv">TV</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select name="bulan" id="bulan" class="form-control">
                          <option value="januari">Januari</option>
                          <option value="februari">Februari</option>
                          <option value="maret">Maret</option>
                          <option value="april">April</option>
                          <option value="mei">Mei</option>
                          <option value="juni">Juni</option>
                          <option value="juli">Juli</option>
                          <option value="agustus">Agustus</option>
                          <option value="september">September</option>
                          <option value="oktober">Oktober</option>
                          <option value="november">November</option>
                          <option value="desember">Desember</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select name="tahun" id="tahun" class="form-control">
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                        </select>
                      </div>
                      <br>
                      <div class="form-group">
                        <input type="file" name="userfile" size="20">
                      </div>


                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" value="upload">Tambah</button>
                    </div>
                    </form>
                  </div>
                </div>

              </div>

            </section>
          </div>
        </div>
      </section>
      <!--main content end-->
    </section>
    <!-- container section start -->