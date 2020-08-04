<section class="content-header">
  <h1>
    Tambah Bobot Kriteria
  </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?php echo base_url('Bobotkriteria/insert/'); ?>" method="post">
          <div class="box-body">
            
          <div class="form-group">
              <label>Id Bobot Kriteria</label>
              <input class="form-control" name="id_bk" type="text" value="<?= $jukabk; ?>"readonly >
              <p class="text-red"><?php echo form_error('id_bk');?></p>
            </div>


            <div class="form-group">
              <label>Nama</label>
              <div>
              <?php echo form_dropdown('nama' , $datakaryawan)?>
              </div>
              <p class="text-red"><?php echo form_error('datakaryawan');?></p>
            </div>

            <div class="form-group">
              <label>Umur</label>
              <div>
              <?php echo form_dropdown('umur' , $bobotumur)?>
              </div>
              <p class="text-red"><?php echo form_error('bobotumur');?></p>
            </div>

            <div class="form-group">
              <label>Pendidikan</label>
              <div>
              <?php echo form_dropdown('pendidikan' , $bobotpendidikan)?>
              </div>
              <p class="text-red"><?php echo form_error('bobotpendidikan');?></p>
            </div>
            
            <div class="form-group">
              <label>Pengalaman</label>
              <div>
              <?php echo form_dropdown('pengalaman' , $bobotpengalaman)?>
              </div>
              <p class="text-red"><?php echo form_error('bobotpengalaman');?></p>
            </div>

            <div class="form-group">
              <label>Dokumen</label>
              <div>
              <?php echo form_dropdown('dokumen' , $bobotdokumen)?>
              </div>
              <p class="text-red"><?php echo form_error('bobotdokumen');?></p>
            </div>

            <div class="form-group">
              <label>Penampilan</label>
              <div>
              <?php echo form_dropdown('penampilan' , $bobotpenampilan)?>
              </div>
              <p class="text-red"><?php echo form_error('bobotpenampilan');?></p>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url('bobotkriteria') ?>" class="btn btn-primary">Batal</a>
          </div>
        </form>
      </div>
</section>