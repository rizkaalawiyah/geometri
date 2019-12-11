@extends('include/sidebar')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>BELAH KETUPAT</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/ketupat.png')}}" width="200px" height="200px"></center> <br> <br><br>
              <p>Bangun ini terbentuk oleh 4 rusuk yang sama panjang dan memiliki dua pasang sudut bukan siku-siku yang masing-masing sama besar dengan sudut dihadapannya. Belah ketupat memiliki sifat: <br>
                1.  Mempunyai 2 simetri lipat. <br>
                2.  Mempunyai 2 simeteri putar. <br>
                3.  Mempunyai 4 titik sudut. <br>
                4.  Sudut yang berhadapan besarnya sama. <br> 
                5.  Sisinya tidak tegak lurus. <br>
                </p>
            <center>
              <div class="box">
              <p>     
                Luas Belah Ketupat: <br> ½ × d1 × d2<br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Keliling Belah Ketupat: <br>  s + s + s + s <br>
                atau <br>
                4 × s
              </p>
            </div>
          </center> 


    </div>

</div>
@endsection