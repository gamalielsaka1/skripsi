<section class="content-header">
  <h1>
    Bobot Kriteria
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="mx-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah data</button>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Kriteria</h3>
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">id bobot</th>
              <th scope="col">nama</th>
              <th scope="col">umur</th>
              <th scope="col">pengalaman</th>
              <th scope="col">pendidikan</th>
              <th scope="col">dokumen</th>
              <th scope="col">penampilan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="id_bk">Id bobot kriteria</label>
            <input type="text" class="form-control" id="id_bk" readonly>
          </div>
          <div class="form-group">
            <label for="inputState">NAMA</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">UMUR</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">PENGALAMAN</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">PENDIDIKAN</label>
            <select id="inputState" class="form-control">
              <option selected>1</option>
              <option selected>12</option>
              <option selected>13</option>
              <option selected>14</option>
              <option selected>15</option>
              <option selected>16</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">DOKUMEN</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">PENAMPILAN</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->