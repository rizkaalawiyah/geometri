@extends('include/sidebar2')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>Tabung</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/tabung.png')}}" width="100%" height="100%"></center> <br> <br><br>
              <p>Tabung adalah bangun ruang yang tersusun oleh 3 buah sisi yaitu 2 buah lingkaran yang mempunyai ukuran yang sama dan 1 segiempat yang mengelilingi kedua lingkaran tersebut. <br> Berikut merupakan sifat-sifat Tabung:
                1. Tersusun dari 3 buah sisi, yaitu 2 lingkaran yang sama panjang dan 1 buah segiempat. <br>
                2. 2 lingkaran pada tabung berperan sebagai tutup tabung dan alas tabung. <br>
                3. Selimut tabung merupakan bangun segiempat yang mengelilingi tutup dan alas tabung. <br>
                4. Tabung tidak mempunyai titik sudut. <br>
                5. Tabung mempunyai 2 buah rusuk, yaitu rusuk yang mengelilingi alas dan tutup tabung. <br>
                6. Jari-jari tabung adalah panjang jari-jari lingkaran yang membentuk tabung. <br>
                7. Tinggi tabung adalah jarak yang memisahkan kedua lingkaran pada tabung. <br>
                                </p>
            <center>
              <div class="box">
              <p>     
                Volume Bola: π × r² × t<br>
                Ket : <br>
                r = jari-jari bola <br>
                π = 22/7 atau 3,14 <br>
                t = tinggi <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Luas Bola:  2 × π × r × (r + t)<br>
                Ket : <br>
                r = jari-jari bola <br>
                π = 22/7 atau 3,14 <br>
                t = tinggi <br>

            </div>
          </center> 


    </div>

</div>
@endsection