<section class="content-header">
  <h1>
    Tambah Kriteria
  </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?php echo base_url('Kriteria/insert'); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label>Id Kriteria</label>
              <input class="form-control" name="id_kriteria" type="text">"readonly >
              <p class="text-red"><?php echo form_error('id_kriteria');?></p>
            </div>
            <div class="form-group">
              <label>Nama Kriteria</label>
              <input class="form-control" name="nama_kriteria" type="text">
              <p class="text-red"><?php echo form_error('nama_kriteria');?></p>
            </div>
            <div class="form-group">
              <label>Bobot</label>
              <input class="form-control" name="bobot" type="text">
              <p class="text-red"><?php echo form_error('bobot');?></p>
            </div>            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url('Kriteria') ?>" class="btn btn-primary">Batal</a>
          </div>
        </form>
      </div>
</section>