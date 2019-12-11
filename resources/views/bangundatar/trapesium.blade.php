@extends('include/sidebar')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>TRAPESIUM</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/Rumus-Luas-Trapesium.png')}}" width="200px" height="200px"></center> <br> <br><br>
              <p>Trapesium merupakan bangun datar yang dibentuk oleh empat buah rusuk yang mana dua diantara rusuknya saling sejajar namun tidak sama panjang. Trapesium juga bisa kita disebut dengan bangun datar dua dimensi yang terbentuk oleh empat sisi, dimana dua sisi diantaranya saling sejajar tetapi tidak sama panjang <br>

                </p>

              <div class="box pl-5">
              <p>Keterangan: <br>
                t    = tinggi trapesium <br>
                a, b = adalah sisi yang sejajar, sisi a merupakan panjang AB dan sisi b merupakan panjang DC <br>
              </p>
            </div> <br>
            <center>
            <div class="box">
              <p> Luas Trapesium: <br>
                  1/2 * (a+b) * t <br>
              </p>
            </div>
            <div class="box">
              <p> Keliling Trapesium: <br>
                  AB + BC + CD + DA <br>
              </p>
            </div>

          </center> 


    </div>

</div>
@endsection