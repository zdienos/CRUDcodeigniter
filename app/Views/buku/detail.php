<?= $this->extend('layout/layout'); ?>


<?= $this->section('content'); ?>

<div class="container">
<div class="row">
<div class="col">
<h2 class="mt-4 mb-4">Detail Buku</h2>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/img/<?=$book['sampul']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$book['judul']; ?></h5>
        <p class="card-text"><b>Penulis : </b><?=$book['penulis']; ?></p>
        <p class="card-text"><b>Penerbit : </b><?=$book['penerbit']; ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

        <a href="/buku/edit/<?=$book['slug'];?>" class="btn btn-warning">Edit</a>
        <form action="/buku/<?=$book['id'];?>" method="post" class="d-inline">
        <?= csrf_field(); ?> 
        <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
         </form>
        <br> <br>
        <a href="/buku"> Kembali ke daftar Buku</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<?= $this->endSection(); ?>