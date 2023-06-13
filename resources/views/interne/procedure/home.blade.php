<link rel="canonical" href="Https://preview.keenthemes.com/ceres-html-free" />
		<link rel="shortcut icon" href="adminassets/dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
        <link rel="stylesheet" href="adminassets/style.css">
		<link href="adminassets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="adminassets/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="adminassets/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->	
		
<!--begin::Root-->
		<body id="kt_body" style="background-image: url(adminassets/dist/assets/media/patterns/header-bg.png)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
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
									<img alt="Logo" src="assets/chulogo.png" class="h-15px h-lg-50px logo-default" />
									<img alt="Logo" src="assets/chulogo.png" class="h-15px h-lg-50px logo-sticky" />
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
										<div   class="menu-item  menu-lg-down-accordion me-lg-1">
											<span class="menu-link py-3">
													<a class="menu-title" href="{{ route('home') }}" >
														<span class="menu-title">Dashboard</span>
													</a>
											</span>	
												
											</div>
											<div  class="menu-item here show menu-lg-down-accordion me-lg-1">
											<span class="menu-link py-3">
													<a class="menu-title" href="{{ route('showprocedure') }}" >
														<span class="menu-title">procédure</span>
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
												<img alt="Pic" src="assets/user.png" />
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="route('profile.edit')" class="menu-link px-5">
                                                    <x-dropdown-link :href="route('profile.edit')">
                                                        {{ __('Paramètres') }}
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
                                                                {{ __('Se déconnecter') }}
                                                            </x-dropdown-link>
                                                </form>
												</div>
												<!--end::Menu item-->
                                                
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->

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
							<h3 class="text-white fw-bolder fs-2qx me-5">Liste des Procédures</h3>
							<!--begin::Title-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center flex-wrap py-2">
								
                                <div >
									<span  >
									<a href="{{ route('addprocedure') }}" >
									<span class="buttoncss" >Créer procédure</span>
									</a>
								</span>	
								</div>
								
								
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
				


				
					<div class="forms">
						@if(Session::has('success'))
							<div class="alert alert-success" role="alert" id="alert">
								
								{{ Session::get('success') }}
							</div>
						@endif
						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert" id="alert">
								
								{{ Session::get('error') }}
							</div>
						@endif
						<form action="{{ url('filter-procedure') }}" method="GET">
                            <div class="form-group">
                                <label for="service">Trier par service:</label>
                                <select name="serviceId" id="service" class="form-control" >
                                    <option value="" >Tous</option>
                                    @foreach($service as $service)
                                        <option value="{{ $service->id }}" @if($service->id == $serviceId) selected @endif>{{ $service->nom_service }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="order">Trier par date de création :</label>
                                <select name="order" id="order" class="form-control" >
                                    <option value="" @if(request()->order == '') selected @endif>Par défaut</option>
                                    <option value="oldest" @if(request()->order == 'oldest') selected @endif>Plus ancien</option>
                                    <option value="newest" @if(request()->order == 'newest') selected @endif>Plus récent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Trier par Titre :</label>
								<input type="text" name="name" id="name" class="form-control" value="{{ request()->name }}" placeholder="Entrez le titre">
                            </div>
                            <button type="submit" class="btn btn-primary">Trier</button>
                        </form>
						<table class="table table-hover">
							<thead class="table-primary">
								<tr>
									
									<th> <strong>Titre </strong></th>
									<th><strong> Code_Référence </strong></th>
									<th> <strong>Date_Création </strong></th>
									<th> <strong>Rédacteur </strong></th>
									<th> <strong><center>Action</center> </strong></th>
									<th> <strong>État</strong></th>
								</tr>
							</thead>
							<tbody>
								
								@if($procedure->count() > 0)
								@foreach($procedure as $rs)
									<tr>
										
										<td class="align-middle">{{ $rs->nom_proc }}</td>
										<td class="align-middle">{{ $rs->reference_code }}</td>
										<td class="align-middle">{{ $rs->date_creation }}</td>
										<td class="align-middle">{{ $rs->nom_redacteur }}</td>
										<td class="align-middle">
											<div class="btn-group" role="group" aria-label="Basic example">
												<a href="{{url('viewprocedure',$rs->id)}}" type="button" class="btn btn-secondary">Details</a>
												@if ($rs->nom_redacteur === Auth::user()->name || ('chefservice' === Auth::user()->fonction && Auth::user()->service_id === $rs->service_id) || 'directeur' === Auth::user()->fonction)
												<a href="{{url('modifierprocedure',$rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
												@endif
												@if ($rs->nom_redacteur === Auth::user()->name || ('chefservice' === Auth::user()->fonction && Auth::user()->service_id === $rs->service_id) || 'directeur' === Auth::user()->fonction)
												 <a href="{{url('delete_proc',$rs->id)}}" type="button" onclick="event.preventDefault(); showConfirmationModal({{$rs->id}});" class="btn btn-danger">Supprimer</a>
												 @endif
												 @if (('chefservice' === Auth::user()->fonction && Auth::user()->service_id === $rs->service_id) || 'directeur' === Auth::user()->fonction ||  'secretaire' === Auth::user()->fonction || 'responsablequalite' === Auth::user()->fonction)
												<a href="{{url('verifierprocedure',$rs->id)}}" type="button" class="btn btn-info">Vérifier</a>
												@endif
												@if (('chefservice' === Auth::user()->fonction && Auth::user()->service_id === $rs->service_id) || 'directeur' === Auth::user()->fonction)
												<a href="{{url('approuverprocedure',$rs->id)}}" type="button" class="btn btn-success">Approuver</a>
												@endif
												@if (!is_null($rs->nom_ver)  && !is_null($rs->nom_app))
												<a href="{{url('exporterprocedure',$rs->id)}}" type="button" class="btn btn-secondary">Télécharger</a>
												@endif

											</div>
										</td>
										<td class="align-middle">@if (is_null($rs->nom_ver)  && is_null($rs->nom_app))
											<strong>Rédigée</strong>
											@elseif (!is_null($rs->nom_ver)  && is_null($rs->nom_app))
											<strong style="color: purple">Vérifiée</strong>
											@elseif (!is_null($rs->nom_ver)  && !is_null($rs->nom_app))
                                           <strong style="color: green">Approuvée✓</strong> 
										@endif</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td class="text-center" colspan="5">Aucune Procédure Trouvée</td>
								</tr>
							@endif
							</tbody>
						</table>
						{{ $procedure->appends(request()->query())->links() }}
					</div>
				
					<!--end::Container-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">


						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<div id="confirmationModal" class="modal">
            <div class="modal-overlay"></div>
            <div class="modal-content">
                <h3>Confirmation</h3>
                <p>Etes-vous sûr(e) de vouloir supprimer cette procédure?</p>
                <div class="modal-buttons">
                    <button onclick="confirmDelete()" class="btn btn-danger">Supprimer</button>
                    <button onclick="closeConfirmationModal()" class="btn btn-secondary">Annuler</button>
                </div>
            </div>
        </div>
        <style>
			.form-group {
  display: inline-block;
  margin-right: 10px;
  width: 200px;
}

button[type="submit"] {
  display: inline-block;
 
}
              .modal {
        position: fixed;
        top: 0;
        left: 25%;
        width: 50%;
        height: 100%;
        display: none;
        z-index: 9999;
    }

    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9998;
    }

    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        z-index: 9999;
    }

    .modal-buttons {
        margin-top: 20px;
        text-align: right;
    }
        </style>

        <script>
        var deleteId;

function showConfirmationModal(id) {
    deleteId = id;
    var modal = document.getElementById('confirmationModal');
    modal.style.display = 'block';
}

function closeConfirmationModal() {
    var modal = document.getElementById('confirmationModal');
    modal.style.display = 'none';
}

function confirmDelete() {
    var modal = document.getElementById('confirmationModal');
    modal.style.display = 'none';
    window.location.href = "{{ url('delete_proc') }}/" + deleteId;
}
</script>
	

		<script
		src="https://code.jquery.com/jquery-3.7.0.js"
		integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
		crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				  setTimeout(function() {
					  $('#alert').fadeOut('fast');
				  }, 4000);
			  });
		  </script>
		<!--end::Root-->
        <script>var hostUrl = "adminassets/dist/assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="adminassets/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="adminassets/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="adminassets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="adminassets/dist/assets/js/custom/widgets.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
        </body>