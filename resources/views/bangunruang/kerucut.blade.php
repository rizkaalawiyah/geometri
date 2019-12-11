@extends('include/sidebar2')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>KERUCUT</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/kerucut.jpg')}}" width="100%" height="100%"></center> <br> <br><br>
              <p>Kerucut merupakan limas dengan alas berbentuk lingkaran. Bentuk keruucut adalah geometri yang banyak dijumpai. Contoh benda berbentuk kerucut yaitu nasi tumpeng, topi ulang tahun, cone es krim, dan lain sebagainya. Sebuah kerucut mempunyai dua bagian permukaan yaitu selimut dan alas. <br>
                </p>
            <center>
              <div class="box">
              <p>     
                Volume Kerucut:  1/3 · π · r2 · t <br>
                Ket : <br>
                r = jari-jari bola <br>
                π = 22/7 atau 3,14 <br>
                t = tinggi <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Luas Kerucut:  π·r · (r + s)<br>
                Ket : <br>
                r = jari-jari bola <br>
                π = 22/7 atau 3,14 <br>
                s = sisi <br>

            </div>
          </center> 


    </div>

</div>
@endsection