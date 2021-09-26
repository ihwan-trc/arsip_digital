<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Data Arsip Masuk</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Arsip Masuk</li>
    </ol>
  </div>
</div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <a href="?page=masuk&action=add" class="btn btn-outline-primary btn-sm"> <i class="fa fa-pencil-alt"></i> Tambah</a>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>No Surat</th>
            <th>Tanggal Surat</th>
            <th>Perihal</th>
            <th>Upload</th>
            <th>File Surat</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>005/290/IX/2021</td>
            <td>26/09/2021</td>
            <td>Pengajuan SPM</td>
            <td>Aris</td>
            <td>
              <a href="view.php" target="blank" data-toggle="tooltip" data-placement="top" title="Klik untuk melihat data"> Tes.pdf</a>
            </td>
            <td>Menunggu Verifikasi Kasi Tapem</td>
            <td>
              <a href="?page=masuk&action=edit" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
              <a href="" class="btn btn-sm btn-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->

    <!-- 
  Status
  1. menunggu verifikasi
  2. verifikasi kasubag / kasi
     - jika admin kasubag "verifikasi kasubag"
       * kasubag ada 2, 
         1. kasubag umpeg. 
         2. kasubag program & keuangan
     - jika admin kasi "verifikasi kasi"
       * kasi ada 4,
         1. kasi trantib & pu
         2. kasi tapem
         3. kasi kesra
         4. kasi permas
  3. verifikasi sekcam
  4. verifikasi camat
  -->