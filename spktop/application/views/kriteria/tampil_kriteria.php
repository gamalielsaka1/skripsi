<section class="content-header">
  <h1>
    Kriteria
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- <ol class="breadcrumb">
    <li><a href="<?php echo base_url('Kriteria/insert')?>"><i class="fa fa-plus"></i> Tambah data</a></li>
  </ol> -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Kriteria</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
                foreach ($kriteria as $data) {
              ?>
                  <tr>
                    <td><?php echo $data->id_kriteria ?></td>
                    <td><?php echo $data->nama_kriteria ?></td>
                    <td><?php echo $data->bobot ?></td>
                    <td>
                      <a href="<?php echo base_url('Kriteria/edit/'.$data->id_kriteria);?>">
                        <button type="button" class="btn btn-primary btn-xs">Edit</button>
                      </a>
                      <!-- <a href="<?php echo base_url('Kriteria/delete/'.$data->id_kriteria);?>">
                        <button type="button" class="btn btn-primary btn-xs">Delete</button>
                      </a> -->
                    </td>
                  </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <div>
          <?php echo $this->session->flashdata('pesan'); ?>
        </div>
      </div>
    </div>
  </div>
</section>