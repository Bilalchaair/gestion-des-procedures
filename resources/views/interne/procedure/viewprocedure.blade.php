<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Ceres HTML Free  - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/ceres-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
	<title>Gestion Des Procedures</title>
		<meta name="description" content="Ceres admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Ceres theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content=" Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/products/ceres-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Ceres HTML Free" />
		<link rel="canonical" href="Https://preview.keenthemes.com/ceres-html-free" />
		<link rel="shortcut icon" href="adminassets/dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?php echo asset('adminassets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?php echo asset('adminassets/dist/assets/plugins/global/plugins.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset('adminassets/dist/assets/css/style.bundle.css')?>" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="<?php echo asset('adminassets/style1.css')?>">
   <style>
        /* just a reset of the css */

.image{
    justify-items: center;
    align-items: center;
    
}
img{
    height: 80px;
    width: 80px;
}



.parent-container {
  display: block;
  margin-left: 10%;
}
.titre { 
    background-color: #dadada;
    width: 95%;
}

.tableau1 {
    margin-left: 5%;
    border-collapse: collapse;
    width: 90%;
}

.tableau1 td, th {
  border: 1px solid black;
  padding: 8px;
  margin-left: 5%;
  border-collapse: collapse;
  width: 18%;
}

.tableau{
    margin-left: 5%;
  border-collapse: collapse;
  width: 90%;
}

.tableau td, th {
  border: 1px solid black;
  padding: 8px;
}

.tableau2  {
    
    border: 1px solid black;
    margin-left: 23%;
    width: 72%;
    
  }
  .page-break {
    page-break-after: always;
	}
  .logigramme{
    width: 90%;
    height: 75%;
    margin-left: 5%;
  }
  .logigramme img{
    width: 90%;
    height: 75%;
    margin-left: 5%;
  }

</style>
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
    <body id="kt_body" style="background-image: url(<?php echo asset('adminassets/dist/assets/media/patterns/header-bg.png')?>)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		
        <!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-center">
							<!--begin::Heaeder menu toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
								<div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Header Logo-->
							<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
								<a href="#">
									<img alt="Logo" src="<?php echo asset('assets/chulogo.png')?>" class="h-15px h-lg-50px logo-default" />
									<img alt="Logo" src="<?php echo asset('assets/chulogo.png')?>" class="h-15px h-lg-50px logo-sticky" />
								</a>
							</div>
							
							<!--end::Header Logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<!--begin::Menu-->
										<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
											<div   class="menu-item here show menu-lg-down-accordion me-lg-1">
											<span class="menu-link py-3">
													<a class="menu-title" href="{{ route('home') }}" >
														<span class="menu-title">Dashboard</span>
													</a>
											</span>	
												
											</div>
											
											<div  class="menu-item menu-lg-down-accordion me-lg-1">
											<span class="menu-link py-3">
													<a class="menu-title" href="{{ route('showprocedure') }}" >
														<span class="menu-title">procedure</span>
													</a>
											</span>
											</div>
											<div  class="menu-item menu-lg-down-accordion me-lg-1">
											<span class="menu-link py-3">
													<a class="menu-title" href="{{ url('admin.users.home') }}" >
														<span class="menu-title">Hopital</span>
													</a>
											</span>
											</div>
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Topbar-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::Toolbar wrapper-->
									<div class="topbar d-flex align-items-stretch flex-shrink-0">
										
										<!--begin::User-->
										<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
											<!--begin::Menu wrapper-->
											<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<img alt="Pic" src="<?php echo asset('assets/user.png') ?>" />
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="adminassets/dist/account/overview.html" class="menu-link px-5">My Profile</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="route('profile.edit')" class="menu-link px-5">
                                                    <x-dropdown-link :href="route('profile.edit')">
                                                        {{ __('Setiings') }}
                                                    </x-dropdown-link>
														
													</a>
												</div>
												<!--end::Menu item-->
											
											
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												
												<!--begin::Menu item-->
												<div class="menu-item px-5">
                                                <form class="menu-link px-5" method="POST" action="{{ route('logout') }}">
                                                            @csrf

                                                            <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                                {{ __('Log Out') }}
                                                            </x-dropdown-link>
                                                </form>
												</div>
												<!--end::Menu item-->
                                                
												

											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::User -->
										<!--begin::Aside mobile toggle-->
										<!--end::Aside mobile toggle-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Toolbar-->
					<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Title-->
							
							<!--begin::Title-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center flex-wrap py-2">
								
								


							</div>
							<!--end::Actions-->
						</div>
						<!--end::Container-->


						
					</div>
					<!--end::Toolbar-->
                <div class="forms">
                    <table class="tableau">
        <tr>
            <td  rowspan="2">
                
                <div class="image">
                <img  src="<?php echo asset('assets/chu-new.png') ?>"  />
                </div>
                
            </td>
          <td>Procedure</td>
          <td>Référence : {{$procedure->reference_code}} <br> Edition :</td>
        </tr>
        <tr>
          <td>{{$procedure->nom_proc}}</td>
          <td>Date : {{$procedure->date_creation}}  <br> </td>
        </tr>
      </table>
    
    <br>
    <div >
      <div class="titre" >SUIVI DES MODIFICATIONS</div>
	  <br>
      <table class="tableau1">
        <tr>
          <th>Edition</th>
          <th>Date</th>
          <th>Nature de modification</th>
        </tr>
        <tr>
          <td>1</td>
          <td>{{$procedure->date_creation}}</td>
          <td>création </td>
        </tr>
        
      </table>
      <br>
      <div class="parent">
        <div class="titre" >LISTE DE DIFFUSION</div>
      </div>
      <br>
      <p>
        DIFFUSION
      </p>
      <br>
      <div class="parent">
        <div class="titre" >MATRICE DE RESPONSABILITE</div>
      </div>
      <br>
      
      

      <table class="tableau" >
        <tr>
          <td>#</td>
          <td>Nom</td>
          <td>fonction</td>
          <td>Date</td>
          <td>Signature</td>
        </tr>
        <tr>
          <td>Rédigé par :</td>
          <td>{{$procedure->nom_redacteur}}</td>
          <td>{{$procedure->fonction_redacteur}}</td>
          <td>{{$procedure->date_creation}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Vérifié et Revue par :</td>
          <td>{{$procedure->nom_ver}}</td>
          <td>{{$procedure->fonction_ver}}</td>
          <td>{{$procedure->date_verification}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Approuvé par :</td>
          <td>{{$procedure->nom_app}}</td>
          <td>{{$procedure->fonction_app}}</td>
          <td>{{$procedure->date_approvation}}</td>
          <td></td>
        </tr>
      </table>
      							<div class="page-break"></div>
	  
	  <br>
	  <div class="titre" > I.	 OBJET</div>
	  <br>
	  <p>
	  {{$procedure->objet}}
	  </p>
	  <br>
	  <div class="titre" > II.	DOMAINE D’APPLICATION</div>
	  <br> 
	  <p>
	  {{$procedure->domaineapp}}
	  </p>
	  <br>
	  <div class="titre" > III.	REFERENCES</div>
	  <br>
	  <p>
	  {{$procedure->references}}
	  </p>
	  <br>
	  <div class="titre" > IV.	ABREVEATIONS ET DEFINITIONS </div>
	  <br>
	  <p>
	  {{$procedure->abreviation}}
	  </p>
	  <br>
	  
	  						<div class="page-break"></div>
	  
	  <br>
	  <div class="titre" > V.	DESCRIPTION DE LA PROCEDURE </div>
	  <br>
	  <p>
	  {{$procedure->description}}
	  </p>
	  							<div class="page-break"></div>
		
	  <br> 
	  <div class="logigramme">
    <img src="<?php echo $pic ?> " width="500px"height="700px" >
	  </div>
	  								<div class="page-break"></div>
									  
	  <br>
	  <div class="titre" > IV.	Liste des enregistrements attachés  </div>
	  <br>
	  <table class="tableau" >
        <tr>
          <td>Enregistrement</td>
          <td>Code</td>
        </tr>
        <tr>
          <td>{{$procedure->enregistrement}}</td>
          <td>{{$procedure->enregistrement_code}}</td>
        </tr>
      </table>

				</div>
                    
				</div>
				<!--end::Wrapper-->
                
			</div>
			<!--end::Page-->
            
		</div>
        
		<!--end::Root-->
        <!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>var hostUrl = "<?php echo asset('adminassets/dist/assets/')?>";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?php echo asset('adminassets/dist/assets/plugins/global/plugins.bundle.js')?>"></script>
		<script src="<?php echo asset('adminassets/dist/assets/js/scripts.bundle.js')?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?php echo asset('adminassets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')?>"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?php echo asset('adminassets/dist/assets/js/custom/widgets.js')?>"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>