<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"  href="styles.css">
    <title>Hello, world!</title>
  <style>
  h1 {
  color: fuchsia;
}

.container .col{
  margin: 20px 0;
}

.card-img-top{
  
  height: 100%;
}  
  </style>
  </head>
  <body>
    
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-warning" href="login">SignIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-danger" href="register">SignUp</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--   End Navbar   -->
    
    <!--  Start Carousel  -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="http://www.opusnusantara.com/images/logo_opus.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://www.opusnusantara.com/images/Slider2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://www.opusnusantara.com/images/Slider2.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--   End Carousel   -->
    
    <!-- Start Jumbotron -->
    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
    </div>
    <!--  End Jumbotron   -->
    
    <!--  Start Card 1 -->
    <div class="container">
        <div class="row">

          <?php $lombas=\App\Lomba::get();
          ?>

          @for($i=0; $i<sizeof($lombas); $i++)
          <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card" >
              <div class="card-header">
              <h5 class="card-title text-center" href="/lomba/{{$lombas[$i]->name}}" >Kompetisi Piano Pelajar (KPP) 2018</h5>
              </div>    
              <img class="card-img-top" src="{{$lombas[$i]->poster}}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kompetisi Piano Pelajar kembali digelar di tahun 2018. Ikuti dan menangkan berbagai penghargaan yang akan diperebutkan para pelajar dalam menampilkan ketrampilan piano terbaiknya!
                  Poster
                  Syarat &amp; Ketentuan
                  Daftar di sini
                </p>
                <a href="#">Read More</a>
              </div>
            </div>  
          </div>          
          @endfor

          <!-- <div class="col">
            <div class="card">
              <div class="card-header">
              <h5 class="card-title text-center">Batam International Open Piano Competition (BIOC) 2017</h5> </div>
              <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_BIOPC_2017.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Opus Nusantara proudly presents the newest event in Batam island. Fully supported by minister of tourism Republik Indonesia. Let's join the competition, enjoy the scenery, and be the best of it.
                  Poster
                  Repertoire, Rules &amp; Regulations ( Indone...
                </p>
                <a href="#">Read More</a>
              </div>
            </div>  
          </div>
          
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title text-center">Bali Open Piano Competition (BOPC) 2017</h5></div>
              <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_BOPC_2017.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Here we are again the Bali Open Piano Competition 2017, proudly presented by the support of The Minister of Tourism of Republik Indonesia. Be ready, be the best and be proud on the island of gods!
                  Poster
                  Repertoire, Rules &amp; Regulations ( Indo...
                </p>
                <a href="#">Read More</a>
              </div>
            </div>  
          </div>
        
        </div> -->
      <!--  End Card 1     -->
      
      <!--   Start Card 2     -->
        <!-- <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
              <h5 class="card-title text-center" >Kompetisi Piano Pelajar (KPP) 2018</h5></div>    
              <img class="card-img-top" src="http://images.all-free-download.com/images/graphiclarge/music_festival_banner_flying_notes_and_woman_silhouette_6826745.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kompetisi Piano Pelajar kembali digelar di tahun 2018. Ikuti dan menangkan berbagai penghargaan yang akan diperebutkan para pelajar dalam menampilkan ketrampilan piano terbaiknya!
                  Poster
                  Syarat &amp; Ketentuan
                  Daftar di sini
                </p>
                <a href="#">Read More</a>
              </div>
            </div>  
          </div>
          
          <div class="col">
            <div class="card">
              <div class="card-header">
              <h5 class="card-title text-center">Batam International Open Piano Competition (BIOC) 2017</h5> </div>
              <img class="card-img-top" src="https://marketplace.canva.com/MAB1GLyFELM/2/0/thumbnail_large/canva-concert-for-kids-fundraising-poster-MAB1GLyFELM.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Opus Nusantara proudly presents the newest event in Batam island. Fully supported by minister of tourism Republik Indonesia. Let's join the competition, enjoy the scenery, and be the best of it.
                  Poster
                  Repertoire, Rules &amp; Regulations ( Indone...
                </p>
                <a href="#">Read More</a>
              </div>
            </div>  
          </div>
          
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title text-center">Bali Open Piano Competition (BOPC) 2017</h5></div>
              <img class="card-img-top" src="http://images.all-free-download.com/images/graphiclarge/music_festival_poster_violet_symbol_elements_design_6826884.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Here we are again the Bali Open Piano Competition 2017, proudly presented by the support of The Minister of Tourism of Republik Indonesia. Be ready, be the best and be proud on the island of gods!
                  Poster
                  Repertoire, Rules &amp; Regulations ( Indo...
                </p>
                <a href="#">Read More</a>
              </div>
            </div>  
          </div>
        
        </div>
      
    </div> -->

    
      <!-- End Card 2   -->
    
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>