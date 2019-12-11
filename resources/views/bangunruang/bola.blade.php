@extends('include/sidebar2')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>BOLA</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/bola.png')}}" width="50%" height="50%"></center> <br> <br><br>
              <p>Bola ialah sebuah bangun ruang sisi lengkung yang dibatasi oleh satu bidang lengkung. <br> Berikut merupakan sifat-sifat bola:
                  1. Bola memiliki sisi lengkung. <br>
                  2. Bola tidak memiliki titik sudut dan rusuk. <br>
                  3. Bola mempunyai satu sisi dan satu titik pusat. <br>
                  4. Sisi bola disebut dinding bola. <br>
                  5. Jarak dinding ke titik pusat bola disebut jari-jari. <br>
                  6. Jarak dinding ke dinding dan melewati titik pusat disebut diameter. <br>
                </p>
            <center>
              <div class="box">
              <p>     
                Volume Bola: 4/3 π x r³ <br>
                Ket : <br>
                r = jari-jari bola <br>
                π = 22/7 atau 3,14 <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Luas Bola:  4 x π x r² <br>
                Ket : <br>
                r = jari-jari bola <br>
                π = 22/7 atau 3,14 <br>

            </div>
          </center> 


    </div>

</div>
@endsection