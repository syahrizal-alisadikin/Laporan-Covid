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

  <!-- Custom styles for this template-->
<link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="{{url('assets/scss/index.css')}}">

</head>

<style>
          
    #map{
      height: 100%;
    }
    
  #data, #allData {
      display: none;
  }
</style>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav pt-4 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#exampleModal">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text">Laporan Covid-19 <br> <span style="font-size: 12px;">Klik disini</span></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center mt-4 d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container">
            <!-- Header -->
            <div class="text-center"><h2>Sistem Informasi Penyebaran Covid-19</h2></div>
            <div class="row text-center">
              
                <div class="col-md col-sm-3 my-2">
                    <div class="odp">
                      <img src="{{url('assets/sedih.jpg')}}" style="width:40px;" alt="" >
                        <h6>Total ODP <br> <span> 12</span></h6>
                    </div>
                </div>
                <div class="col-md col-sm-3 my-2">
                    <div class="pdp">
                      <img src="{{url('assets/sedih.jpg')}}" style="width:40px;" alt="" >
                        <h6> Total PDP<br> <span>2</span> </h6>
                    </div>
                </div>
                <div class="col-md col-sm-2 my-2">  
                    <div class="positive">
                      <img src="{{url('assets/sedih.jpg')}}" style="width:40px;" alt="" >
                        <h6>Total Positif <span>{{ $datanas[0]->positif}}</span> 
                        </h6>
                     </div>
                </div>
                <div class="col-md col-sm-2 my-2">
                    <div class="sembuh">
                    <img src="{{url('assets/kisspng-smiley.jpg')}}" style="width:40px;" alt="" >
                        <h6>Sembuh <br> <span>{{ $datanas[0]->sembuh}}</span> </h6>
                        
                    </div>
                </div>
                <div class="col-md col-sm-2 my-2">
                    <div class="meninggal">
                      <img src="{{url('assets/sedih.jpg')}}" style="width:40px;" alt="" >
                        <h6>Meninggal <br> <span>{{ $datanas[0]->meninggal}}</span></h6>
                       
                    </div>
                </div>
            </div>
            <!-- Tutup Header -->
            <!-- Body -->
            <div class="row header-body">
                <div class="col-lg-12 col-md-12">
                    <div class="body">
                      <div class="zona d-flex">
                        <h4 style="color:#000">Corona Indonesia</h4>
                        <h6 style="margin-left:auto; color:#000"><?php 
                          // menampilkan jam sekarang
                          echo date(' l, d-M-Y  ');
                          ?></h6>
                      </div>
                        <h6 class="text-muted">Real Time Update </h6>
                    </div>
                </div>
                
                    <!-- column -->
                    <div class="col-lg-8">
                        <!--Google map-->
                        <div id="map">
                         </div>

                     </div>
                     <div class="col-lg-4">
                         <div class="row" id="overflow"  >
                            <table class="table responsive table-dark"   id="overflow" >
                                <tbody >
                                 @foreach ($dataprov as $data)
                                 
                                 <tr>
                                 <th scope="row">{{$data->attributes->Provinsi }}</th>
                                    <td>{{$data->attributes->Kasus_Posi }}</td>
                                    
                                  </tr>                                     
                                 @endforeach
                                
                                </tbody>
                              </table>  
                             
                         
                            </div>
                    <!-- column -->
                
                
                

            </div>
            
                
            </div>
               
            
            <!-- Tutup Body -->
        </div>

    </div>
    <!-- End of Content Wrapper -->

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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="responsive">
          <div class="form-group row">
            <div class="col-sm-12">
              <label  class="col-form-label" id="name" >Name</label>
              <input type="text" class="form-control" id="name" placeholder="ketik disini" name="name">
            </div>
          </div>
          <div class="form-group  row">
              <div class="col-sm-12">
                <label  class="col-form-label" id="name">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label  class="col-form-label" id="name" >No.Handphone</label>
                <input type="text" class="form-control" name="no_handphone" id="no_handphone" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label for="inputPassword" class="col-form-label" id="name">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label class="col-form-label" id="name">Pesan</label> <br>
                <textarea type="text" name="pesan" class="form-control" placeholder="Describe yourself here...">

                </textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
{{-- Map Api --}}
<script>
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
  </script>
{{-- Akhir Map --}}
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClfltGuep-_5ZX5rOEZr0Xqx_OZa0GiHE&callback=initMap">
</script>
  <!-- Akhir Map -->
  <!-- Bootstrap core JavaScript-->

<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
<script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
<script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>
<script src="{{url('assets/jquery-3.3.3.1.js')}}"></script>
<script src="{{url('assets/jquery.dataTables.min.css')}}"></script>
<script src="{{url('assets/jquery.dataTables.min.css')}}"></script>
<script>
    $(document).ready(function() {
    $('#overflow').DataTable( {
        "scrollY": "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
</script>


</body>

</html>
