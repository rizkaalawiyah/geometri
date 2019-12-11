@extends('include/sidebar2')

@section('isi')
<div class="container">
   <marquee><h2 style="margin-top: 2px;"><img src="{{url('images/kubus.gif')}}" width="30px" height="30px"><img src="{{url('images/kubus.gif')}}" width="30px" height="30px"><img src="{{url('images/kubus.gif')}}" width="30px" height="30px"></h2></marquee>
  <h1><center>KUBUS</center></h1>
    <div class="in-box mt-5">

              <center><img src="{{asset('images/kubus.png')}}" width="100%" height="100%"></center> <br> <br><br>
              <p>Kubus adalah bangun ruang tiga dimensi yang tersusun dari 6 bidang datar yang kongruen, keenam bidang kongruen pada kubus berbentuk persegi. Dalam matematika geometri, istilah kongruen adalah suatu keadaan 2 atau lebih bangun datar yang dibandingkan mempunyai bentuk dan ukuran yang sama. Hal ini akan terlihat jelas saat kita melihat jaring-jaring kubus.<br>
              Berikut merupakan sifat -  sifat kubus: <br>
            1. Mempunyai 6 sisi yang sama besar berbentuk persegi. <br>
            2. Mempunyai 12 sisi rusuk yang sama panjang. <br>
            3. Mempunyai 8 buah titik sudut. <br>
            4. Mempunyai 12 diagonal bidang. <br>
            5. Mempunyai 4 diagonal ruang. <br> </p>
            <center>
              <div class="box">
              <p>     
                Volume Kubus:  s × s × s <br>
                Ket : <br>
                s = sisi <br>
              </p>
            </div> <br>
              <div class="box">
              <p>     
                Luas Kubus:  6 × s × s<br>
                Ket : <br>
                s = sisi <br>

            </div>
          </center> 


    </div>

</div>
@endsection