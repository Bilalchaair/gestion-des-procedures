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
		    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

		<link rel="canonical" href="Https://preview.keenthemes.com/ceres-html-free" />
		<link rel="shortcut icon" href="<?php echo asset('adminassets/dist/assets/media/logos/favicon.ico') ?>" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?php echo asset('adminassets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?php echo asset('adminassets/dist/assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset('adminassets/dist/assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo asset('adminassets/style.css') ?>">
		
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
    <body id="kt_body" style="background-image: url(<?php echo asset('adminassets/dist/assets/media/patterns/header-bg.png') ?>)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		
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
									<img alt="Logo" src="<?php echo asset('adminassets/dist/assets/media/logos/logo-light.svg" class="h-15px h-lg-20px logo-default') ?>" />
									<img alt="Logo" src="<?php echo asset('adminassets/dist/assets/media/logos/logo-default.svg" class="h-15px h-lg-20px logo-sticky') ?>" />
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
												<img alt="Pic" src="<?php echo asset('adminassets/dist/assets/media/avatars/150-26.jpg') ?>" />
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="<?php echo asset('adminassets/dist/account/overview.html" class="menu-link px-5') ?>">My Profile</a>
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
							<h3 class="text-white fw-bolder fs-2qx me-5">Modifier procédure</h3>
							<!--begin::Title-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center flex-wrap py-2">
								
								


							</div>
							<!--end::Actions-->
						</div>
						<!--end::Container-->


						
					</div>

               <div class="forms">
                <div>
					<form action="{{url('modifier_proc',$procedure->id)}}" method="POST">
						@csrf

						
						<div class="step-one">
							<div class="card">
								<div class="card-title fw-bolder text-gray-800 fs-2 " style= " margin-left:3%" >STEP 1/8 - nom et fonction</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for=""> <strong>nom et prenom du redacteur(trice):</strong></label>
												<input type="text" class="form-control" placeholder="Enter nom et prenom" name="nom_redacteur" value="{{ $procedure->nom_redacteur }}" required>
											  
											</div>
										</div>
									</div>
									<br>
									<div class="form-group">
										<label for=""><strong>fonction:</strong></label>
										<input type="text" class="form-control" placeholder="Enter fonction" name="fonction_redacteur" value="{{ $procedure->fonction_redacteur }}" required>
						
										
									</div>
								</div>
							</div>
						</div>
						
						
						
						{{-- STEP 2 --}}
						
					
						
						<div class="step-one">
							<div class="card">
								<div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 2/8 - Titre & Objet de la Procédure</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for=""> <strong>Titre de la procédure:</strong></label>
												<input type="text" class="form-control" placeholder="Enter titre procédure" name="nom_proc" value="{{ $procedure->nom_proc }}" required>
											  
											</div>
										</div>
									</div>
									
									<div class="form-group">
												<label for=""> <strong>Référence:</strong></label>
												<input type="text" class="form-control" placeholder="Enter le Référence" name="reference_code" value="{{ $procedure->reference_code }}" required>
											   
											</div>
									<br>
									<div class="form-group">
												<label for=""> <strong>la date de creation:</strong></label>
												<input type="date" class="form-control"  name="date_creation" value="{{ $procedure->date_creation }}" required>
											   
											</div>
									<br>
									<div class="form-group">
										<label for=""><strong>Objet:</strong></label>
										<textarea class="form-control" cols="2" rows="6" name="objet" required>{{ $procedure->objet }}</textarea>
										
									</div>
								</div>
							</div>
						</div>
						
						
						{{-- STEP 3 --}}
						
					
							
						
						<div class="step-two">
							<div class="card">
								<div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 3/8 - Domaine d'application</div>
								<div class="card-body">
								   
										
											<div class="form-group">
												<label for=""><strong>Domaine d'application:</strong></strong></label>
												<textarea class="form-control" cols="2" rows="8" name="domaineapp" required>{{ $procedure->domaineapp }}</textarea>
												
											</div>
										
									
								</div>
							</div>
						</div>
						
					
						{{-- STEP 4 --}}
						
				
							
						
						<div class="step-three">
							<div class="card">
								<div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 4/8 - Références</div>
								<div class="card-body">
								   
											<div class="form-group">
												<label for=""><strong>Références:</strong></label>
												<textarea class="form-control" cols="2" rows="8" name="references" required>{{ $procedure->references }}</textarea>
												
											</div>
									  
									
								</div>
							</div>
						</div>
						
						
						{{-- STEP 5 --}}
						
						
						<div class="step-four">
							<div class="card">
								<div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 5/8 - Abréviations</div>
								<div class="card-body">
							
											<div class="form-group">
												<label for=""><strong>Abréviations et Définitions:</strong></label>
												<textarea class="form-control" cols="2" rows="8" name="abreviation" required>{{ $procedure->abreviation }}</textarea>
												
											</div>
										
									
								</div>
							</div>
						</div>
						
						
						{{-- STEP 6 --}}
					
						<div class="step-five">
							<div class="card">
								<div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 6/8 - Description de la Procédure</div>
								<div class="card-body">
								
											<div class="form-group">
												<label for=""><strong>Description:</strong></label>
												<textarea class="form-control" cols="2" rows="8" name="description" required>{{ $procedure->description }}</textarea>
												
											</div>
									 
									
								</div>
							</div>
						</div>
						
						
						{{-- STEP 7 --}}
					
							
						
						<div class="step-six">
							<div class="card"> 
								<div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 7/8 - Logigramme</div>
								<div class="card-body">
									Veuillez saisir votre Logigramme de type image ci-dessous :
									<div class="form-group">
										<label for="logigramme"></label>
										<input type="file" class="form-control" name="logigramme" value="{{ $procedure->logigramme }}">
										
									</div>
								</div>
							</div>       
						</div>
						
				
						
						{{-- STEP 8 --}}
						
				
						<div class="step-seven">
							<div class="card">
								<div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 8/8 - Liste des Enregistrements attachés</div>
								<div class="card-body">
									<div class="form-group">
										<label for=""><strong>Enregistrements attachés</strong></label>
										<textarea class="form-control" cols="2" rows="8" name="enregistrement" required>{{ $procedure->enregistrement }}</textarea>
										
									</div>
						 
								
							   </div>
							</div>
						</div>
				
					
							
						<div class="row">
							<div class="d-grid">
								<button class="btn btn-warning">Confirmer</button>
							</div>
						</div>
							
					
						
						</form>
					</div>
               </div>
</div>
<!--end::Wrapper-->

</div>
<!--end::Page-->

</div>

<!--end::Root-->
<!--begin::Scrolltop-->

<!--end::Scrolltop-->
<!--end::Main-->
<script>var hostUrl = "adminassets/dist/assets/";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?php echo asset('adminassets/dist/assets/plugins/global/plugins.bundle.js') ?>"></script>
<script src="<?php echo asset('adminassets/dist/assets/js/scripts.bundle.js') ?>"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?php echo asset('adminassets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') ?>"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?php echo asset('adminassets/dist/assets/js/custom/widgets.js') ?>"></script>

<!--end::Page Custom Javascript-->
<!--end::Javascript-->

</body>
<!--end::Body-->
</html>