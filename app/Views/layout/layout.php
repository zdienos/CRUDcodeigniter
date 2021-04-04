<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
    <title><?= $title; ?></title>
  </head>
  <body>

     <?= $this -> include('layout/navbar'); ?> 
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#63C9FF" fill-opacity="1" d="M0,224L40,213.3C80,203,160,181,240,160C320,139,400,117,480,101.3C560,85,640,75,720,96C800,117,880,171,960,202.7C1040,235,1120,245,1200,224C1280,203,1360,149,1400,122.7L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

    <?= $this -> renderSection('content'); ?>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <!-- <script>
    function previewImg() {
      const sampul = document.querySelector('#sampul');
      const sampulLabel = document.querySelector('.custom-file-label');
      const imgPreview = document.querySelector('.img-preview');

      sampulLabel.textContent = sampul.files[0].name;

      const fileSampul = new FileReader();
      fileSampul.readAsDataURL(sampul.files[0]);

      fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
      }
      
    }
    


  

    </script> -->

  </body>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#63c9ff" fill-opacity="1" d="M0,128L40,117.3C80,107,160,85,240,96C320,107,400,149,480,176C560,203,640,213,720,192C800,171,880,117,960,117.3C1040,117,1120,171,1200,197.3C1280,224,1360,224,1400,224L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  <footer class="text-center fw-bold">
    <p>created by Frederyk Abryan Palinoan</p>
  </footer>
</html>