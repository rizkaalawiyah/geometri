@extends('include/sidebar2')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>BALOK</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/balok.png')}}" width="100%" height="100%"></center> <br> <br><br>
              <p>Balok merupakan bangun ruang tiga dimensi yang terbentuk dari gabungan 4 persegi panjang dan dua bujur sangkar. Dengan demikian balok memiliki enam sisi yang mempunyai ukuran panjang dan lebar.  
                </p>
            <center>
              <div class="box">
              <p>     
                Volume Balok: p × l × t  <br>
                Ket : <br>
                p = panjang <br>
                l = lebar <br>
                t = tinggi <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Luas Balok: 2 × (p.l + p.t +l.t)<br>
                Ket : <br>
                p = panjang <br>
                l = lebar <br>
                t = tinggi <br>
            </div>
          </center> 


    </div>

</div>
@endsection