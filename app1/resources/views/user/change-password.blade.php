@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en" dir="ltr">
  
<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/auth/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:35 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title data-setting="app_name" data-rightJoin=" Responsive Bootstrap 5 Admin Dashboard Template">Qompac UI Responsive Bootstrap 5 Admin Dashboard Template</title>
      <meta name="description" content="Qompac UI is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
      <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
      <meta name="author" content="Iqonic Design">
      <meta name="DC.title" content="Qompac UI Simple | Responsive Bootstrap 5 Admin Dashboard Template">
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/favicon.ico">
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="../../assets/css/core/libs.min.css">
      
      
      
      
      
      
      
      
      
      
      <!-- qompac-ui Design System Css -->
      <link rel="stylesheet" href="../../assets/css/qompac-ui.minf700.css?v=1.0.1">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="../../assets/css/custom.minf700.css?v=1.0.1">
      <!-- Dark Css -->
      <link rel="stylesheet" href="../../assets/css/dark.minf700.css?v=1.0.1">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="../../assets/css/customizer.minf700.css?v=1.0.1" >
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="../../assets/css/rtl.minf700.css?v=1.0.1">
      
      
      
      <!-- Google Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">  </head>
      <style>
        .cpass{
            height: 40px;
            background-color:rgb(107, 21, 255);
            padding-top:5px;
            border-radius: 10px;
            text-align: center;
        }
        .co{
            color: white;
        
        }
        .coo{
            padding-top: 20px;
        }
    </style>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body ">
              <img src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/loader.webp" alt="loader" class="image-loader img-fluid ">
          </div>
      </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
      <section class="login-content overflow-hidden">
         <div class="row m-0 align-items-center bg-white vh-100">            
           <div class="col-md-12 col-lg-6 align-self-center"> 
              <a href="../index.html" class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                  <div class="logo-normal">
                     <svg class="" viewBox="0 0 32 32" width="80px" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                           <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
                     </svg>
                  </div>
                  <h2 class="logo-title ms-3 mb-0" data-setting="app_name">Qompac UI</h2>
               </a>
               <div class="row justify-content-center pt-5">
                  <div class="col-lg-8">           
                     <div class="card d-flex justify-content-center mb-0">
                        <div class="card-body">
            <div class="cpass">               
            <h3 class="text-center"><b><div class="co">Change Password</div></b></h3>
            </div>
            
            @if($errors->any())
            {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
            @endif
            @if(Session::get('error') && Session::get('error') != null)
            <div style="color:red">{{ Session::get('error') }}</div>
            @php
            Session::put('error', null)
            @endphp
            @endif
            @if(Session::get('success') && Session::get('success') != null)
            <div style="color:green">{{ Session::get('success') }}</div>
            @php
            Session::put('success', null)
            @endphp
            @endif
            <form class="form" action="{{ route('postChangePassword') }}" method="post">
                @csrf
                <div class="coo">
                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="new_password" name="new_password">
                </div>
                <div class="mb-3">
                    <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                </div>
                </div>
                <button type="submit" class="btn btn-primary text-center">Submit</button>
            </form>
        </div>
    </div>  
 </div>
</div>              
</div>
<div class="col-lg-6 d-lg-block d-none bg-primary p-0  overflow-hidden">
<img src="../../assets/images/auth/01.png" class="img-fluid gradient-main" alt="images" loading="lazy" >
</div>
</div>
</section>
</div>
<!-- Library Bundle Script -->
<script src="../../assets/js/core/libs.min.js"></script>
<!-- Plugin Scripts -->









<!-- Slider-tab Script -->
<script src="../../assets/js/plugins/slider-tabs.js"></script>





<!-- Lodash Utility -->
<script src="../../assets/vendor/lodash/lodash.min.js"></script>
<!-- Utilities Functions -->
<script src="../../assets/js/iqonic-script/utility.min.js"></script>
<!-- Settings Script -->
<script src="../../assets/js/iqonic-script/setting.min.js"></script>
<!-- Settings Init Script -->
<script src="../../assets/js/setting-init.js"></script>
<!-- External Library Bundle Script -->
<script src="../../assets/js/core/external.min.js"></script>
<!-- Widgetchart Script -->
<script src="../../assets/js/charts/widgetchartsf700.js?v=1.0.1" defer></script>
<!-- Dashboard Script -->
<script src="../../assets/js/charts/dashboardf700.js?v=1.0.1" defer></script>
<!-- qompacui Script -->
<script src="../../assets/js/qompac-uif700.js?v=1.0.1" defer></script>
<script src="../../assets/js/sidebarf700.js?v=1.0.1" defer></script>

</body>

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/auth/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:35 GMT -->
</html>
@endsection