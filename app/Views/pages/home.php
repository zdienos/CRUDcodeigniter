<?= $this->extend('layout/layout'); ?>


<?= $this->section('content'); ?>

<div class="container container-home">
    <div class="row row-home justify-content-between">
        <div class="col col-md-4">
            <img src="/home_img/book_cover.svg" class="coverMain" alt="cover_buku" srcset="">
        </div>
        <div class="col-md-4">
            <h1>Lorem ipsum dolor sit.</h1> 
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, sequi.</p>
            <span> 
                <button type="button" class="btn btn-primary">Primary</button>
            </span>
        </div>
        
    </div>
    
    <div class="row row-ctn2 justify-content-between">
        <div class="col  col-md-4">
            <h1>Lorem ipsum dolor sit.</h1> 
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam numquam eaque quisquam voluptate non vero consectetur iure velit accusantium possimus.</p>
        </div>
        <div class="col-md-4">
            <img src="/home_img/book_shop.svg" class="coverCtn" alt="toko_buku" srcset="">
        </div>
    </div>

</div>



<?= $this->endSection(); ?>
