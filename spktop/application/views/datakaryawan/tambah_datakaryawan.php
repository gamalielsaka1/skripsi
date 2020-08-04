<section class="content-header">
  <h1>
    Tambah Data Karyawan
  </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?php echo base_url('Datakaryawan/insert/'); ?>" method="post">
          <div class="box-body">
            
            <div class="form-group">
              <label>Id Karyawan</label>
              <input class="form-control" name="id_karyawan" type="text" value="<?= $juka; ?>"readonly >
              <p class="text-red"><?php echo form_error('id_karyawan');?></p>
            </div>

            <div class="form-group">
              <label>KTP</label>
              <input class="form-control" name="ktp" type="text">
              <p class="text-red"><?php echo form_error('ktp');?></p>
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input class="form-control" name="nama" type="text">
              <p class="text-red"><?php echo form_error('nama');?></p>
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input class="form-control" name="alamat" type="text">
              <p class="text-red"><?php echo form_error('alamat');?></p>
            </div>

            <div class="form-group">
              <label>No telepon</label>
              <input class="form-control" name="no_tlp"  type="text">
              <p class="text-red"><?php echo form_error('no_tlp')?></p>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url('datakaryawan') ?>" class="btn btn-primary">Batal</a>
          </div>
        </form>
      </div>
</section>