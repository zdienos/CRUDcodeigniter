<?= $this->extend('layout/layout'); ?>


<?= $this->section('content'); ?>

<div class="container">
<div class="row">
<div class="col">
<h2 class="my-4">Form Tambah Data Buku</h2>
 <form action="/buku/save" method="post" enctype="multipart/form-data">
 <?= csrf_field(); ?>
  <div class="form-group row">                    
    <label for="judul" class="col-sm-1 col-form-label">Judul</label>
    <div class="col-sm-5">
      <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?> id="judul" name="judul" autofocus 
      value="<?= old('judul'); ?>" >
      <div class="invalid-feedback">
      <?= $validation->getError('judul') ; ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="penulis" class="col-sm-1 col-form-label">Penulis</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="penerbit" class="col-sm-1 col-form-label">Penerbit</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="sampul" class="col-sm-1 col-form-label">Sampul</label>
    <div class="col-sm-1">
    <img src="/img/default.png" class="img-thumbnail img-preview"></div>
    <div class="col-sm-4">
      <div class="custom-file">
        <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
        <div class="invalid-feedback">
        <?= $validation->getError('sampul') ; ?>
        </div>
        <label class="custom-file-label" for="Sampul">Pilih File Gambar...</label>
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

<?= $this->endSection(); ?>