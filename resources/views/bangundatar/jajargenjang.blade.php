@extends('include/sidebar')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>JAJAR GENJANG</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/jajargenjang.png')}}" width="200px" height="200px"></center> <br> <br><br>
              <p>Bangun ini terbentuk oleh dua pasang rusuk yang masing-masing sama panjang dan sejajar dengan pasangannya, dan memiliki dua pasang sudut bukan siku-siku yang masing-masing sama besar dengan sudut di hadapannya. Jajar genjang memiliki sifat: <br>
                • Tidak mempunyai simetri lipat dan simetri putar. <br>
                • Sisi yang berhadapan sejajar dan sama panjang. <br>
                • Dua sisi lainnya tidak saling tegak lurus. <br>
                • Mempunyai 4 sudut, 2 sudut berpasangan dan berhadapan. <br>
                • Sudut yang saling berdekatan besarnya 180. <br>
                • Mempunyai 2 diagonal yang tidak sama panjang. <br>
                </p>
            <center>
              <div class="box">
              <p>     
                Luas Jajar Genjang: a * t  <br>
                Ket : <br>
                a = alas <br>
                t = tinggi <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Keliling Jajar Genjang: 2 * (a+b)<br>
                Ket : <br>
                a = sisi alas <br>
                b = sisi miring <br>
              </p>
            </div>
          </center> 


    </div>

</div>
@endsection