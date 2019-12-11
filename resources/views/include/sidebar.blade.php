<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/styles.css')}}">
        <!--Link FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>SMART GEOMETRI</title>
  </head>
  <body>


    
    <!--
      <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
        <div class="container">
          <a class="navbar-brand" color="white" href="#"><h5>SMART GEOMETRI</h5></a><img class="navbar-logo" src="{{asset('images/picture1.png')}}" width="200px" height="50px">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
      </nav>
  -->
      <!-- Page Content -->
      <div class="container">
        <div class="card border-0 shadow my-5">
          <div class="card-body p-5">
            <div class="wrapper">

      <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
          <a class="navbar-brand" color="white" href="#"><h5>SMART GEOMETRI</h5></a><img class="navbar-logo" src="{{asset('images/picture1.png')}}" width="200px" height="50px">
        </div>

        <ul class="list-unstyled components">
            <center><p>Materi</p></center>
            <li class="active">
              <a href="{{url('bangundatar/persegi')}}"><i class="fas fa-circle"> Persegi</i></a>
            </li>
            <li>
                <a href="{{url('bangundatar/persegipanjang')}}"><i class="fas fa-circle"> Persegi panjang </i></a>
            </li>
            <li class="active">
                <a href="{{url('bangundatar/materi')}}"><i class="fas fa-circle"> Segitiga </i></a>
            </li>
            <li>
                <a href="{{url('bangundatar/trapesium')}}"><i class="fas fa-circle"> Lingkaran </i></a>
            </li>
            <li class="active">
                <a href="{{url('bangundatar/trapesium')}}"><i class="fas fa-circle"> Trapesium </i></a>
            </li>
            <li>
                <a href="{{url('bangundatar/jajargenjang')}}"><i class="fas fa-circle"> Jajar Genjang </i></a>
            </li>
            <li class="active">
                <a href="{{url('bangundatar/layang')}}"><i class="fas fa-circle"> Layang-Layang </i></a>
            </li>
            <li>
                <a href="{{url('bangundatar/ketupat')}}"><i class="fas fa-circle"> Belah Ketupat </i></a>
            </li>
        </ul>
        <ul class="list-unstyled">
            <li>
                <a href="{{url('menu')}}"><i class="fas fa-home"> Menu</i></a>
            </li>
        </ul>
    </nav>

      <div class="col-md-9">
      @yield('isi')
      
      </div>

</div>
            
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>