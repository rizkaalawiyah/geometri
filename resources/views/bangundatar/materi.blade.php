@extends('include/sidebar')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"><img src="{{url('images/datar.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>SEGITIGA</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/segitiga.png')}}" width="200px" height="200px"></center> <br> <br><br>
              <p>  Perhatikan sisi-sisinya, ada berapa sisi-sisi yang membentuk segitiga ABC? Sisi-sisi yang membentuk segitiga ABC berturut-turut adalah AB, BC, dan AC. Sudut-sudut yang terdapat pada segitiga ABC sebagai berikut. <br>

               a. sudut A atau sudut BAC atau sudut CAB. <br>

               b. sudut B atau sudut ABC atau sudut CBA. <br>

               c. sudut C atau sudut ACB atau sudut BCA. <br>

            Jadi, ada tiga sudut yang terdapat pada Δ ABC. <br>
            Dari uraian di atas dapat disimpulkan sebagai berikut : <br>
            <b>Segitiga adalah bangun datar yang dibatasi oleh tiga buah sisi dan mempunyai tiga buah titik  sudut.</b>
                </p>
            <center>
              <div class="box">
              <center><p>     
                Luas Segitiga : 1/2 * a * t  <br>
                Ket : <br>
                a = alas <br>
                t = tinggi <br>
              </p></center>
            </div> <br>
              <div class="box">
              <p>     
                Keliling Segitiga : s + s + s  <br>
                Ket : <br>
                s = sisi <br>
              </p>
            </div>
          </center> 


    </div>

</div>
@endsection