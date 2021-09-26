<div class="row">
  <div class="col-md-6 offset-3">
    <div class="card">
      <div class="card-header">
        Form Input
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group row">
            <label for="no_agenda" class="col-sm-4 col-form-label">No Agenda</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="no_agenda" name="no_agenda">
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_agenda" class="col-sm-4 col-form-label">Tanggal</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="tgl_agenda" name="tgl_agenda">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_arsip" class="col-sm-4 col-form-label">Nama Arsip</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_arsip" name="nama_arsip">
            </div>
          </div>
          <div class="form-group row">
            <label for="customFile" class="col-sm-4 col-form-label">File</label>
            <div class="col-sm-8">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="file">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="upload_by" class="col-sm-4 col-form-label">Upload by</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="upload_by" name="upload_by" readonly>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- extensi yg diperbolehkan hanya PDF max 5Mb -->