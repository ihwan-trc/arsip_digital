<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Form Edit Arsip</h1>
      </div>
      <div class="col">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">

          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <?php
          $id_arsip = $_GET['id'];
          $sql_edit = $conn->query("SELECT * FROM tb_arsip WHERE id_arsip = '$id_arsip'");
          $data = $sql_edit->fetch_assoc();

          ?>
          <form role="form" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <input type="hidden" name="id_arsip" value="<?= $data['id_arsip']; ?>">
              <div class="form-group">
                <label>Nama File</label>
                <input type="text" class="form-control" name="nama_file" value="<?= $data['nama_arsip']; ?>" placeholder="Nama File">
              </div>
              <div class="form-group">
                <label for="file">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file_arsip" id="file">
                    <label class="custom-file-label" for="file">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" name="edit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>