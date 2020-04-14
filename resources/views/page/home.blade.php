<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  

  <title>Sistem Informasi Penyebaran Covid-19</title>

  <!-- Custom fonts for this template-->
<link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

  <!-- Custom styles for this template-->
<link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="{{url('assets/scss/index.css')}}">

</head>

<style>
   #jamupdate{
     color: aliceblue;
   }
    
  #data, #allData {
      display: none;
  }
</style>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    {{-- <ul class="navbar-nav pt-4 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#exampleModal">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text"> Covid-19 <br> <span style="font-size: 12px;">Klik disini</span></div>
      </a>
<!-- Sidebar Toggler (Sidebar) -->
{{-- <div class="text-center mt-4 d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> --}}
      <!-- Divider -->
      {{-- <hr class="sidebar-divider my-0"> --}}

      <!-- Nav Item - Dashboard -->
      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      

       <!-- Sidebar - Brand -->
       {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://www.google.com/" > --}}
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        {{-- <div class="sidebar-brand-text"> <img src="{{url('assets/gambar/playstore.jpg')}}" style="width:100%;" alt="" ></div> --}}
      {{-- </a> --}}

    {{-- </ul>  --}}
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    
        <div class="container-fluid">
          <div class="container">
            <!-- Header -->
            <div class="text-center d-flex">
              <button style="border-radius:7px;" class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#exampleModal">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text" style="font-weight:700;">Lapor Covid-19 </div>
              </button>
              
                <h4 style="margin-left:auto;">Sistem Informasi Penyebaran Covid-19</h4>
               
                <div class="btn-group btn-group-toggle" style="margin-left:auto;" data-toggle="buttons">
                  <label class="btn active" id="gelap" name="gelap">
                    <input type="radio" name="options" id="option1" > Gelap
                  </label>
                  <label class="btn " id="terang" name="terang">
                    <input type="radio" name="options" id="option2" checked> Terang
                  </label>
                </div>
                          
            </div>
            @if (session('create'))
            <div class="container justify-content-center">
              <div class="row text-center">
                <div class="col-md-4">
                  
                </div>
                <div class="col-md-4">
                  <div class="alert alert-success text-center">
                    {{ session('create') }}
                </div>
                </div>
                <div class="col-md-4">
                  
                </div>
              </div>
            </div>
            
            @endif
            <div class="row text-center">
                <div class="col-md col-sm-3 my-2" id="hover1">
                    <div class="odp">
                      <h6>ODP</h6>
                      <img src="{{url('assets/gambar/logoodp-01.png')}}" style="width:50px; rounded:circle;" alt="" >
                        <h5> <span > 12</span></h5>
                    </div>
                </div>
                <div class="col-md col-sm-3 my-2" id="hover2">
                    <div class="pdp">
                      <h6>PDP</h6>
                      <img src="{{url('assets/gambar/logopdp-01.png')}}" style="width:50px;" alt="" >
                        <h5>  <span>2</span> </h5>
                    </div>
                </div>
                <div class="col-md col-sm-2 my-2" id="hover3">  
                    <div class="positive">
                      <h6>Positif</h6>
                      <img src="{{url('assets/gambar/logopositif-01.png')}}" style="width:50px;" alt="" >
                        <h5> <span >{{ $datanas[0]->positif}}</span> </h5>
                     </div>
                </div>
                <div class="col-md col-sm-2 my-2" id="hover4">
                    <div class="sembuh">
                      <h6>Sembuh</h6>
                    <img src="{{url('assets/gambar/logosembuh-01.png')}}" style="width:50px;" alt="" >
                        <h5><span>{{ $datanas[0]->sembuh}}</span> </h5>
                        
                    </div>
                </div>
                <div class="col-md col-sm-2 my-2" id="hover5">
                    <div class="meninggal">
                      <h6>Meninggal</h6>
                      <img src="{{url('assets/gambar/logomati-01.png')}}" style="width:50px;" alt="" >
                        <h5> <span>{{ $datanas[0]->meninggal}}</span></h5>
                       
                    </div>
                </div>
            </div>
            <!-- Tutup Header -->
            <!-- Body -->
            <div class="row header-body">
                <div class="col-lg-12 col-md-12">
                    <div class="body">
                      <div class="zona d-flex">
                        <h4 style="color:#000">Peta Penyebaran </h4>
                          <div id="" class="d-flex"  style="margin-left:auto; color:#000">
                            <h6 class="mt-1">Real Time Update &nbsp; </h6>
                            <?php
                            header('Access-Control-Allow-Origin: *');
                            date_default_timezone_set("Asia/Jakarta");  // untuk mengubah zona waktu
                            $arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
                            $day = date("w"); //0-6 of day

                            echo date("H:i:s"). "&nbsp"; // untuk menampilkan jam
                            echo   $arrDay[$day]. "&nbsp";
                            echo  date("d-F-Y");
                         
                            ?>
                        </div>
                      </div>
                       
                    </div>
                </div>
                    <!-- column -->
                    <div class="col-lg-8">    
                      <div class="wrapper">
                        <div id="render-map">
                      
                        </div>
                      </div>
                      <div class="note">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quos maxime dolorem. Doloremque placeat dolore deserunt, vel molestiae fugit atque nulla corrupti, soluta quisquam velit, consectetur possimus optio tenetur quidem?
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nesciunt porro necessitatibus obcaecati earum vitae quam iusto nisi distinctio? Vitae maiores at quam fugit voluptates similique. Dolorem dolores beatae molestiae?
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora impedit nihil illum aperiam ipsum est, voluptatibus doloribus officiis porro quia minima cupiditate necessitatibus totam fuga asperiores earum! Inventore, in.
                        </p>
                      </div>
                      {{-- Chart --}}
                      {{-- <div class="card shadow mb-4" style="color:#000;">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                        </div>
                        <div class="card-body">
                          <h4 class="small font-weight-bold">Server Migration <span class="float-right">100%</span></h4>
                          <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                          <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                          <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                          <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div> --}}
                     </div>
                     <div class="col-lg-4">
                         <div class="row" id="overflow"  >
                            <table class="table-bordered responsive table-dark"   id="overflow" >
                                <tbody >
                                  <tr>
                                    <th class="text-center"> Daerah</th>
                                    <th class="text-center"> Kasus</th>
                                  </tr>
                                 @foreach ($array[0] as $data)
                                
                                  <tr>
                                  <th style="width:70%; padding-left:10px;">{{$data['provensi']}}</th>
                                  <td class="text-center">{{ $data['jumlahorang'] }}</td>
                                  </tr>                                     
                                 @endforeach
                                </tbody>
                              </table>
                          </div>
                          {{-- <div class="chart">
                            <div class="card shadow mb-4">
                              <!-- Card Header - Dropdown -->
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary" text-center>Revenue Sources</h6>
                              </div>
                              <!-- Card Body -->
                              <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                  <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                  <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Positif
                                  </span>
                                  <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Sembuh
                                  </span>
                                  <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Referral
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                      </div>
                    <!-- column -->
            <!-- Tutup Body -->
          </div>
        </div>

    <!-- End of Content Wrapper -->
    
    {{-- Berita --}}
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class=" text-center">Inspirasi</div>
          <div class="card inspirasi">
          
            
          </div>
          
        </div>
        <div class="col-md-6 ">
          <div class="berita">
            <div class="text-center"> Refleksi</div>
            <div class="card refleksi" style="color:#000;">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" id="footer">
        <div class="col-md-3">
          <footer>
            <div class="text-center">
              <img src="{{url('assets/gambar/suluhkerta.jpg')}}" style="width:180px; border-radius:7px" alt="" >
              {{-- <h6>Develop By Suluh Kerta Nusantara</h6>
              <h6 class="text-center">@copyright 2020</h6> --}}
              
            </div>
          </footer>
        </div>
        <div class="col-md-4" id="location" >
          <ul class="d-flex" style="list-style:none;">
            <li class="list-item mr-2" > <i class="fab fa-facebook-f"></i> </li>
            <li class="list-item">  <a href="https://www.facebook.com/suluhkertanusantara/?__tn__=%2Cd%2CP-R&eid=ARC35XEeBX-MfQRLYFGIdVm2_VHRoWbKiIJfIAS7OVXyBkpafTg0DH4jRaZs4_sZNmj-vKxo7xfLOdkF" style="text-decoration:none; color:#fff;">  suluhkertanusantara</a></li>
          </ul>
          <ul class="d-flex" style="list-style:none;">
            <li class="list-item mr-2" > <i class="fab fa-instagram"></i> </li>
            <li class="list-item">  <a href="https://www.instagram.com/suluhnusantara/" style="text-decoration:none; color:#fff;">  @suluhkertanusantara</a></li>
          </ul>
          <ul class="d-flex" style="list-style:none;">
            <li class="list-item mr-2" > <i class="fa fa-globe"></i>  </li>
            <li class="list-item">  <a href="#" style="text-decoration:none; color:#fff;"> www.suluhkertanusantara.org</a></li>
          </ul>
        </div>
        <div class="col-md-5">
          <ul class="d-flex" style="list-style:none;">
            <li class="list-item mr-2" > <i class="fa fa-phone"></i></li>
            <li class="list-item"> +6221 8282 6852 </li>
          </ul>
          <ul class="d-flex" style="list-style:none;">
            <li class="list-item mr-2" > <i class="fa fa-envelope"></i></li>
            <li class="list-item"> Humas@suluhkertanusantara.org </li>
          </ul>
          <ul class="d-flex" style="list-style:none;">
            <li class="list-item mr-2"> <i class="fa fa-map-marker"></i></li>
            <li class="list-item"> <span> Ruko Grand Wisata Blok AA5 No. 6 Grand Wisata, Bekasi, Jawa Barat 17510 - Indonesia</span> </li>
          </ul>
        </div>
      </div>
          <div class="text-center" style="padding-top : 20px">
            <h6>Develop By Suluh Kerta Nusantara @copyright 2020</h6>
          </div>
    </div>
  </div>

  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan Covid-19</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="responsive" method="POST" action="{{ route('covid')}}">
        @csrf
          <div class="form-group row">
            <div class="col-sm-12">
              <label  class="col-form-label" id="nama" >Name</label>
              <input type="text" class="form-control" required id="nama" placeholder="ketik disini" name="nama">
            </div>
          </div>
          <div class="form-group  row">
              <div class="col-sm-12">
                <label  class="col-form-label" id="name">NIK</label>
                <input type="text" class="form-control" required name="nik" id="nik" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label  class="col-form-label" id="name" >No.Handphone</label>
                <input type="text" class="form-control" required name="no_handphone" id="no_handphone" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label for="inputPassword" class="col-form-label" id="name">Alamat</label>
                <input type="text" class="form-control" required name="alamat" id="alamat" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label class="col-form-label" id="name">Pesan</label> <textarea name="pesan" id="pesan" class="form-control" placeholder="Ketik disini" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
{{-- Map Api --}}
{{-- <script>
    var map;
    function initMap() {
      map = new google.maps.Map(
          document.getElementById('map'),
          {center: new google.maps.LatLng(-6.2156707, 106.8301494), zoom: 6, styles: [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ]},
          
          );

          loadMap();
    }
    
function loadMap() {

  var cdata = JSON.parse(document.getElementById('data').innerHTML);

  console.log(cdata);
  // geocoder = new google.maps.Geocoder();  
  // codeAddress(cdata);
  var allData = JSON.parse(document.getElementById('allData').innerHTML);
  showAllColleges(allData)
}

function showAllColleges(allData) {
      var infoWind = new google.maps.InfoWindow;
      Array.prototype.forEach.call(allData, function(data){
        var content = document.createElement('div');
        var strong = document.createElement('strong');
        
        strong.textContent = data.nama +" status :" + data.status + "\n" + " tanggal :" + data.tanggal;
        content.appendChild(strong);

        console.log(data.latitude+data.longtitude);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(data.longtitude, data.latitude),
            map: map
          });
          marker.addListener('mouseover', function(){
            infoWind.setContent(content);
            infoWind.open(map, marker);
          })
      })
    }
  </script> --}}
{{-- Akhir Map --}} 
  <!-- Akhir Map -->
  <!-- Bootstrap core JavaScript-->
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script>
      const DEFAULT_COORD = [-6.2293867, 106.6894321];

      // initial Map
      const map = L.map("render-map").fitWorld();
      
      // initial file
      const url = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

      // attribute
      const atribute = "Leaflet with <a href='https://acacemy.byidmore.com'>id More Academy</a>";
      const omstile = new L.TileLayer(url, {
          minZoom: 2,
          maxZoom: 20,
          attribution: atribute
      })
      map.setView(new L.LatLng(DEFAULT_COORD[0], DEFAULT_COORD[1]), 7)
      map.addLayer(omstile)
      function loadMap() {

      var cdata = (document.getElementById('data').innerHTML);

      console.log(cdata);
      // geocoder = new google.maps.Geocoder();  
        // codeAddress(cdata);
        var allData = (document.getElementById('allData').innerHTML);
        showAllColleges(allData)
      }
      function showAllColleges(allData) {
        var infoWind = new google.maps.InfoWindow;
        Array.prototype.forEach.call(allData, function(data){
          var content = document.createElement('div');
          var strong = document.createElement('strong');
          
          strong.textContent = data.nama +" status :" + data.status + "\n" + " tanggal :" + data.tanggal;
          content.appendChild(strong);

          console.log(data.latitude+data.longtitude);
          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(data.longtitude, data.latitude),
              map: map
            });
            marker.addListener('mouseover', function(){
              infoWind.setContent(content);
              infoWind.open(map, marker);
            })
        })
      }
  </script>

{{-- Jam --}}
{{-- <script>
    var refreshId = setInterval(function() {
        $('#jamupdate').load();
    }, 500);
  </script> --}}
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{-- <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script> --}}
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
<script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
 <!-- Page level plugins -->
 <script src="{{url('assets/vendor/chart.js/Chart.min.js')}}"></script>

 {{-- <!-- Page level custom scripts -->
<script src="{{url('assets/js/demo/chart-area-demo.js')}}"></script>
 <script src="{{url('assets/js/demo/chart-pie-demo.js')}}"></script>
  <!-- Custom scripts for all pages-->
<script src="{{url('assets/js/sb-admin-2.min.js')}}"></script> --}}
{{-- Ganti Background --}}
<script>
  $('#terang').click(function(){
    // console.log('berhasil');
    document.body.style.backgroundColor = ('#8B0000');
  });
  $('#gelap').click(function(){
    // console.log('berhasil');
    document.body.style.backgroundColor = ('#10253a');
  });

  $(document).ready(function () {
	$('#terang').on('click', 'label', function () {
    $(this).siblings().removeClass('active');
		$(this).addClass('active');

	});
});
</script>
<script>
  // var database = firebase.database();
</script>
</body>

</html>
