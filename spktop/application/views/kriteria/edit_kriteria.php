<section class="content-header">
  <h1>
    Edit Kriteria
  </h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?php echo base_url('Kriteria/edit/'.$kriteria[0]->id_kriteria); ?>" method="post">
        <div class="box-body">
            <div class="form-group">
              <label>Id Kriteria</label>
              <input class="form-control" name="id_kriteria" type="text" value="<?php echo $kriteria[0]->id_kriteria ?>"readonly>
              <p class="text-red"><?php echo form_error('id_kriteria');?></p>
            </div>
          
            <div class="form-group">
              <label>Nama Kriteria</label>
              <input class="form-control" name="nama_kriteria" type="text" value="<?php echo $kriteria[0]->nama_kriteria ?>"readonly>
              <p class="text-red"><?php echo form_error('nama_kriteria');?></p>
            </div>

            <!-- <div class="form-group">
              <label>Bobot</label>
              <input class="form-control" name="bobot" type="text" value="<?php echo $kriteria[0]->bobot ?>">
              <p class="text-red"><?php echo form_error('bobot');?></p>
            </div> -->

            <div class="form-group"> 
            <label for="inputState">Bobot</label>
            <select id="inputState" class="form-control" name="bobot" type="text" value="<?php echo $kriteria[0]->bobot ?>">
              <option selected>1</option>>
              <option selected>2</option>>
              <option selected>3</option>>
              <option selected>4</option>>
              <option selected>5</option>>
            </select>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url('Kriteria') ?>" class="btn btn-primary">Batal</a>
          </div>
        </form>
      </div>
</section>