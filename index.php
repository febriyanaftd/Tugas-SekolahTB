<?php
$koneksi =new mysqli("localhost","root","","ujilevel2")
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style type="text/css">
  
    .navbar{
    background-color: #a2d9ff;
    font-size:18px;
    margin: auto;
    }

    .jumbotron{
        text-align: center;
        
    }
    img {
   width: 200px;
   height: 200px;
   margin-top: -13%;

}

.container1{
   margin-top: -1%;
}
.cards{
  background-color:#a2d9ff ;
  margin-top:-20% ;
}




 
</style>
  <body>

     <!-- NAVBAR -->
     <section id="home">
    <nav class="navbar navbar-expand-lg navbar-light  ">
        <div class="container-fluid">
          <a class="navbar-brand ps-5" href="#">Febriyana Tungga Dewi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="margin navbar-margin ms-auto me-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
              <a class="nav-link" href="#about">About</a>
              <a class="nav-link" href="#galery">Galery</a>
              <a class="nav-link" href="#contact">Contact</a>
             
         
            </div>
          </div>
        </div>
      </nav>
       <!-- AKHIR NAVBAR -->


      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 78 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,160L40,181.3C80,203,160,245,240,218.7C320,192,400,96,480,80C560,64,640,128,720,133.3C800,139,880,85,960,85.3C1040,85,1120,139,1200,149.3C1280,160,1360,128,1400,112L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    
      <section class="jumbotron text-center">
        <img src="fotoakuu.jpg" alt="Arif" width="200" class="rounded-circle img-thumbnail"/>

      <!-- JUMBOTRON-->
      
      <div class="jumbotron jumbotron-fluid">
        <div class="jumbotron ">
          <h1 class="display-4 ">Hai, I'am Febriyana 
          </h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
       <!-- AKHIR JUMBOTRON -->
       


      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,32L30,42.7C60,53,120,75,180,74.7C240,75,300,53,360,69.3C420,85,480,139,540,181.3C600,224,660,256,720,250.7C780,245,840,203,900,186.7C960,171,1020,181,1080,181.3C1140,181,1200,171,1260,144C1320,117,1380,75,1410,53.3L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>


      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,192L24,202.7C48,213,96,235,144,229.3C192,224,240,192,288,154.7C336,117,384,75,432,80C480,85,528,139,576,176C624,213,672,235,720,213.3C768,192,816,128,864,138.7C912,149,960,235,1008,272C1056,309,1104,299,1152,266.7C1200,235,1248,181,1296,181.3C1344,181,1392,235,1416,261.3L1440,288L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
         
      
      <!-- ABOUT -->
      <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col ">
            <h2>About Me</h2>
          </div>
          
          <div class="row justify-content-center mt-5">
            <div class="col-md-5 mt-5">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates minus facere dicta nobis distinctio at voluptate. Necessitatibus minima aperiam placeat ipsa consequatur, natus sint eum, impedit cupiditate odio quibusdam porro.</p>
            </div>
            <div class="col-md-5 ps-5 mt-5">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis repudiandae pariatur veritatis doloribus in fuga sit suscipit perspiciatis dolore adipisci, mollitia expedita reiciendis consequatur? Culpa modi eligendi ratione .</p>              
            </div>
          </div>
        </div>
      </div>

      

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,149.3C274.3,160,343,160,411,144C480,128,549,96,617,101.3C685.7,107,754,149,823,144C891.4,139,960,85,1029,85.3C1097.1,85,1166,139,1234,170.7C1302.9,203,1371,213,1406,218.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,288L1440,256L1440,0L0,0Z"></path></svg>
      
      <section id="galery">
      <div class="cards">
        <div class="row text-center">
          <div class="col ">
            <h2>Galery </h2>
          </div>
    
          <div class="row text-center m-5 p- justify-content-around">
          <div class="col-md-3 lh-base p-3 ">
          <div class="card" style="width: 13rem;">
            <img src="fotoakuu.jpg" class="card-img" alt="gambar">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            </div>

            <div class="col-md-3 lh-base p-3">
            <div class="card" style="width: 13rem;">
                <img src="fotoakuu.jpg" class="card-img" alt="gambar1">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 lh-base p-3">
              <div class="card" style="width: 13rem;">
                <img src="fotoakuu.jpg" class="card-img" alt="gambar2">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,192L24,202.7C48,213,96,235,144,229.3C192,224,240,192,288,154.7C336,117,384,75,432,80C480,85,528,139,576,176C624,213,672,235,720,213.3C768,192,816,128,864,138.7C912,149,960,235,1008,272C1056,309,1104,299,1152,266.7C1200,235,1248,181,1296,181.3C1344,181,1392,235,1416,261.3L1440,288L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
       

            <section id="contact">
            <div class="contact">
              <div class="row text-center mb-3 mt-5">
                <div class="col">
                  <h2>Contact Me</h2>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6">
          
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                      <label for="pesan" class="form-label">Pesan</label>
                      <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            </div>

     
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,32L30,42.7C60,53,120,75,180,74.7C240,75,300,53,360,69.3C420,85,480,139,540,181.3C600,224,660,256,720,250.7C780,245,840,203,900,186.7C960,171,1020,181,1080,181.3C1140,181,1200,171,1260,144C1320,117,1380,75,1410,53.3L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>


                
                      
                        

      


      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    
  </body>
</html>