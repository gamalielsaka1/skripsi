<section class="content-header">
  <h1>
    Bobot Kriteria
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('Bobotkriteria/insert') ?>"><i class="fa fa-plus"></i> Tambah data</a></li>
  </ol>
  <div class="row">

    <div class="col-xs-12">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Keterangan</h4>
            </div>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Umur</th>
                  <th>Pendidikan</th>
                  <th>Pengalaman</th>
                  <th>Dokumen</th>
                  <th>Penampilan</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>
                    umur 17 - 23 "nilai = 5"</br>
                    umur 24 - 30 "nilai = 4"</br>
                    umur 31 - 37 "nilai = 3"</br>
                    umur 38 - 44 "nilai = 2"</br>
                    umur 45 - 50 "nilai = 1"</br>
                  </td>
                  <td>
                    Sarjana "nilai = 5"</br>
                    Diploma "nilai = 4"</br>
                    SMA/SMK "nilai = 3"</br>
                    SMP "nilai = 2"</br>
                    SD "nilai = 1"</br>
                  </td>
                  <td>
                    Sangat Baik "nilai = 5"</br>
                    Baik "nilai = 4"</br>
                    Cukup "nilai = 3"</br>
                    Kurang "nilai = 2"</br>
                    Sangat Kurang "nilai = 1"</br>
                  </td>
                  <td>
                    Sangat Lengkap "nilai = 5"</br>
                    Lengkap "nilai = 4"</br>
                    Cukup Lengkap "nilai = 3"</br>
                    Kurang Lengkap "nilai = 2"</br>
                    Sangat Kurang Lengkap "nilai = 1"</br>
                  </td>
                  <td>
                    Rapi "nilai = 5"</br>
                    Tidak Rapi "nilai = 4"</br>
                    Tindikan (Kusus Pria) "nilai = 3"</br>
                    Bertato "nilai = 2"</br>
                    Tindikan & Bertato "nilai = 1"</br>
                  </td>

                  <td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Bobot Kriteria</h3>        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id Bobot Kriteria</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Pendidikan</th>
                <th>Pengalaman</th>
                <th>Dokumen</th>
                <th>Penampilan</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
              foreach ($bobotkriteria as $data) {
              ?>
                <tr>
                  <td><?php echo $data->id_bk ?></td>
                  <td><?php echo $data->nama ?></td>
                  <td><?php echo $data->umur ?></td>
                  <td><?php echo $data->pendidikan ?></td>
                  <td><?php echo $data->pengalaman ?></td>
                  <td><?php echo $data->dokumen ?></td>
                  <td><?php echo $data->penampilan ?></td>
                  <td>
                    <a href="<?php echo base_url('Bobotkriteria/edit/' . $data->id_bk); ?>">
                      <button type="button" class="btn btn-primary btn-xs">Edit</button>
                    </a>
                    <a href="<?php echo base_url('Bobotkriteria/delete/' . $data->id_bk); ?>">
                      <button type="button" class="btn btn-primary btn-xs">Delete</button>
                    </a>
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