<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

@section('htmlheader')
    @include('backend.layouts.partials.htmlheader')
@show

<body class="fix-header fix-sidebar">

    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
		</svg>
    </div>
    
        <!-- Main wrapper  -->
    <div id="main-wrapper">

	@include('backend.layouts.partials.mainheader')
	
	@include('backend.layouts.partials.sidebar')
	
	
	        <!-- Page wrapper  -->
    <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center"> 
                
                @include('backend.layouts.partials.contentheader')
                     
                </div>
            </div>
            <!-- End Bread crumb -->
            
            <!--Contenido-->
                @yield('content')
		    <!--Fin Contenido-->
	
	        <!-- footer -->
	            @include('backend.layouts.partials.footer')
	        <!-- End footer -->
	</div>
	
	</div>
	
    @section('scripts')
    	@include('backend.layouts.partials.scripts')
	@show
	
@yield('custom-css')
@yield('custom-scripts')


