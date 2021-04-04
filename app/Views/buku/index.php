<?= $this->extend('layout/layout'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

        <h1 class="mt">Daftar Buku</h1> 
        <a href="/buku/create" class="btn btn-primary my-4">Tambah Buku</a>
        <?php if(session()->getFlashdata('pesan')) :  ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif; ?>
        <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; ?>
  <?php foreach ($book as $b) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?=$b['sampul']; ?>" alt="" class="sampul"></td>
      <td><?=$b['judul']; ?></td>
      <td><a href="/buku/<?=$b['slug']; ?>" class="btn btn-success">Detail</a></td>
    </tr>
    <?php endforeach ; ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
