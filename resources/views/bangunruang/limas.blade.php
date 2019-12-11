@extends('include/sidebar2')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/tabung.gif')}}" width="30px" height="30px"><img src="{{url('images/tabung.gif')}}" width="30px" height="30px"><img src="{{url('images/tabung.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>LIMAS</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/limas.png')}}" width="100%" height="100%"></center> <br> <br><br>
              <p>Limas adalah jenis bangun ruang yang mempunyai sisi alas berbentuk segi-n dan mengerucut ke satu titik sehingga terbentuk sisi-sisi tegak berbentuk segitiga. Jumlah unsur-unsur pembentuk limas adalah n + 1 sisi, 2 × n rusuk, dan n + 1 titik sudut; dengan n adalah jumlah sisi bangun datar yang menjadi alas limas.<br></p>
            <center>
              <div class="box">
              <p>     
                Volume Limas:  ⅓ × La × t <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Luas Limas:  L alas + L ΔI + L ΔII + L ΔIII<br>

            </div>
          </center> 


    </div>

</div>
@endsection