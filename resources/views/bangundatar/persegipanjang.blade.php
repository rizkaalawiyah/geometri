@extends('include/sidebar')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>PERSEGI PANJANG</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/persegipanjang.png')}}" width="200px" height="200px"></center> <br> <br><br>
              <p>Bangun ini terbentuk oleh dua pasang rusuk yang masing-masing sama panjang dan sejajar terhadap pasangannya, dan memiliki 4 buah sudut siku-siku. Persegi panjang memiliki sifat: <br>
                • Sisi yang berhadapan sama sejajar dan panjang. <br>
                • Sisi-sisi persegi panjang saling tegak lurus • Mempunyai 4 sudut 90. <br> 
                • Mempunyai 2 diagonal yang sama panjang • Mempunyai 2 simetri lipat. <br>
                • Mempunyai 2 simetri putar <br>
                </p>
            <center>
              <div class="box">
              <p>     
                Luas Persegi Panjang: p * l  <br>
                Ket : <br>
                p = panjang <br>
                l = lebar <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Keliling Persegi Panjang: 2 * (p+l)<br>
                Ket : <br>
                p = panjang <br>
                l = lebar <br>
              </p>
            </div>
          </center> 


    </div>

</div>
@endsection