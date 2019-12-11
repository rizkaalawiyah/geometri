@extends('include/sidebar')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>LAYANG - LAYANG</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/layang.png')}}" width="200px" height="200px"></center> <br> <br><br>
              <p>Layang-layang adalah bangun berbentuk segiempat yang terbentuk dari dua segitiga sama kaki yang alasnya berhimpitan. Bangun ini memiliki sifat: <br>
                • Mempunyai 1 simetri lipat. Tidak mempunyai simetri putar • Mempunyai 4 sisi yaitu dengan 2 pasang sisi yang berbeda panjang. <br>
                • Mempunyai 4 buah sudut. <br>
                • Sepasang sudut yang berhadapan sama besar. <br>
                • Mempunyai 2 diagonal berbeda dan tegak lurus. <br>

                </p>
            <center>
              <div class="box">
              <p>     
                Luas Layang-layang: <br> ½ × d1 × d2<br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Keliling Layang-layang: <br> a + b + c + d<br>
                atau <br>
                2 × (a + c)
              </p>
            </div>
          </center> 


    </div>

</div>
@endsection