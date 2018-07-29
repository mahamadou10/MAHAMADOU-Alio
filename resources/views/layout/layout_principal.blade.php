<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('etudiant.petit.76x76.png')}}">
    <link rel="icon" type="image/png" href="{{asset('etudiant.petit.64x64.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Etudiant  </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('dash/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('dash/assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('dash/assets/css/demo.css')}}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
    <!-- Font Awesome -->

    <!-- sweet alert -->
    <link rel="stylesheet" type="text/css" href="{{asset('sweetalert-master/dist/sweetalert.css')}}">

<!-- 
    <link rel="stylesheet" href="{{asset('dash/assets/font/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/font/icon.css')}}"> -->


<!-- css dans la vue table -->
<!-- css dans la vue table -->
    @yield('css_table')
     <!-- Couleur rouge dans Dashbord -->
     <style type="text/css">
         .color{
            color: red;
         }

         .help-block strong{
            color: red;
         }
     </style>

 <!-- /Couleur rouge dans Dashbord -->






 <!--DEBUT File d'ariane -->
 <style type="text/css">
    .breadcrumb{
        box-shadow: 1px 10px 20px 1px #ccc;
        margin-bottom: 40px;
        margin-top: -60px;
        border: 2px solid #DFDFDF;
    }
    .breadcrumb > li + li:before {
   color: #CCCCCC;
   content: "-> ";
   padding: 0 5px;
}
 </style>
<!-- FIN File d'ariane -->
</head>

<body>
    <div class="wrapper">
        <!-- side bar -->
        @include('../includes/_sidebar')
        <!-- /side bar -->
        <div class="main-panel" style="background: #EEEEEE;">
           <!-- menu -->
           @include('../includes/_menu')
           <!-- /menu -->
            <div class="content">
                <div class="container-fluid">

                    @yield('content')
                </div>
            </div>
             <!-- footer -->
        @include('../includes/_footer')
    <!-- / footer -->
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('dash/assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>

<!-- javascript dans la vue table -->
@yield('js_table')

<script src="{{asset('dash/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dash/assets/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{asset('dash/assets/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('dash/assets/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('dash/assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('dash/assets/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('dash/assets/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('dash/assets/js/demo.js')}}"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<!-- sweet laert JS -->
<script src="{{asset('sweetalert-master/dist/sweetalert.min.js')}}"></script>
<script src="{{asset('sweetalert-master/dist/sweetalert-dev.js')}}"></script>






<script type="text/javascript">

    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

<!-- definition de message flash pour inscription etudiant -->
@if(session()->has('message'))
<script type="text/javascript">
    swal("{{session()->get('message')}}", "Etudiant(e) bien enregistre(e)","success")
</script>
@endif

<!-- definition de message flash pour ajout de tyoe infrastructure-->
@if(session()->has('message_type_infrastructure'))
<script type="text/javascript">
    swal("{{session()->get('message_type_infrastructure')}}", "Type Infrastructure bien enregistré","success")
</script>
@endif


<!-- definition de message flash pour ajout de tyoe infrastructure-->
@if(session()->has('message_infrastructure'))
<script type="text/javascript">
    swal("{{session()->get('message_infrastructure')}}", "Infrastructure bien enregistrée","success")
</script>
@endif


<!-- definition de message flash pour ajout d'intervention-->
@if(session()->has('message_intervention'))
<script type="text/javascript">
    swal("{{session()->get('message_intervention')}}", "Intervention bien enregistrée","success")
</script>
@endif

<script type="text/javascript">
   
</script>

</html>
