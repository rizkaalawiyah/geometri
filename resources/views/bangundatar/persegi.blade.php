@extends('include/sidebar')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>PERSEGI</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/persegi.jpg')}}" width="200px" height="200px"></center> <br> <br><br>
              <p>Bangun ini terbentuk oleh 4 buah rusuk yang sama panjang dan memiliki 4 buah sudut siku-siku.persegi memiliki sifat: <br>
                • Mempunyai 4 titik sudut. <br>
                • Mempunyai 4 sudut 90. <br>
                • Mempunyai 2 diagonal yang sama panjang. <br> 
                • Mempunyai 4 simetri lipat. <br> 
                • Mempunyai 4 simetri putar. <br>
                </p>
            <center>
              <div class="box">
              <p>     
                Luas Persegi : s * s  <br>
                Ket : <br>
                s = sisi <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Keliling Persegi : 4* s  <br>
                Ket : <br>
                s = sisi <br>
              </p>
            </div>
          </center> 


    </div>

</div>
@endsection