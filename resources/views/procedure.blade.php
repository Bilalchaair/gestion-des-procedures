<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CHU tanger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="externe/style.css">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="adminassets/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="adminassets/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="exxterne/style1.css">
	<link rel="stylesheet" href="adminassets/style.css">
	
	<style>
	.data-container {

	display: flex;
    flex-wrap: wrap;
    justify-content: center;

	}

.data-item {
    width: 200px;
    margin: 10px;
    padding: 10px;
    text-align: center;
    background-color: #f1f1f1;
}

.data-item img {
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.data-name {
    margin-top: 10px;
    font-weight: bold;
}

.btn-primary {
    margin-top: 10px;
    background-color: #337ab7;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

	</style>
</head>
<body>
	
<!-- partial:index.partial.html -->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
		

		
		<div class="container">
			
			<img style="width: 50px;" class="navbar-brand" src="assets/logochu-new.png" alt="">
			
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="{{route('home')}}" class="nav-item nav-link ">Accueil</a></li>
					<li><a href="{{ route('page_procedure') }}" class="nav-item nav-link active">Les procédures</a></li>
					<li><a href="#" class="nav-item nav-link">Contact</a></li>
					<li><div class="nav-item nav-link">
						@if (Route::has('login'))
						<div class="sm">
							@auth
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
							@else
								<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
		
								@if (Route::has('register'))
									<a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
								@endif
							@endauth
						</div>
						@endif
					</div></li>
				
				</ul>
			</div>
		</div>
	</nav>
</header>
<style>#hospital-select,
	#division-select,
	#service-select,
	#name{
	  display: inline-block;
	  margin-right: 10px;
	  width:20%
	}
	#procedure-files{
		display: flex;
    flex-wrap: wrap;
    justify-content: center;
	}</style>


<main>
	<div class="data-container">
		<select id="hospital-select">
			<option value="">Tous les Hopitaux</option>
			@foreach ($hopitals as $hopital)
				<option value="{{ $hopital->id }}">{{ $hopital->nom_hopital }}</option>
			@endforeach
		</select>
	
		<select id="division-select">
			<option value="">Toutes les Divisions</option>
		</select>
	
		<select id="service-select">
			<option value="">Tous les Services</option>
		</select>
			
	
		
			<input type="text" name="name" id="name" class="form-control" value="{{ request()->name }}" placeholder="Entrez le titre">
		
	
		<button id="filter-button" class="btn btn-primary">Trier</button>
	
		<div id="procedure-files">
			<!-- Procedure files will be dynamically added here -->
			<div class="data-container">
				@foreach ($hopitals as $hopital)
					@foreach ($hopital->divisions as $division)
						@foreach ($division->services as $service)
							@foreach ($service->procedurefiles as $procedurefile)
								<div class="data-item">
									<a href="#">
										<img src="externe/pdfimg.png" alt="Image">
									</a>
									<div class="data-name">{{ $procedurefile->nom_procedure }}</div>
									<a type="button" class="btn btn-info" href="{{ url('procedure/' . $procedurefile->file) }}" download>Télécharger PDF</a>
									
								</div>
							@endforeach
						@endforeach
					@endforeach
				@endforeach
			</div>
		</div>
	</div>
</main>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#filter-button').click(function () {
            var selectedHospital = $('#hospital-select').val();
            var selectedDivision = $('#division-select').val();
            var selectedService = $('#service-select').val();
			var searchQuery = $('#name').val();
            $.ajax({
                url: '/procedurefiles',
                type: 'GET',
                data: {
                    hospitalId: selectedHospital,
                    divisionId: selectedDivision,
                    serviceId: selectedService,
					name: searchQuery
                },
                success: function (response) {
                    $('#procedure-files').html(response);
                }
            });
        });
		$('#filter-button').click(function () {
            updateProcedureFiles();
        });
        $('#hospital-select').change(function () {
            var hospitalId = $(this).val();
            if (hospitalId) {
                $.ajax({
                    url: '/divisions/' + hospitalId,
                    type: 'GET',
                    success: function (response) {
                        $('#division-select').html(response);
                    }
                });
            } else {
                $('#division-select').html('<option value="">Toutes les Divisions</option>');
                $('#service-select').html('<option value="">Tous les Services</option>');
            }
        });

        $('#division-select').change(function () {
            var divisionId = $(this).val();
            if (divisionId) {
                $.ajax({
                    url: '/services/' + divisionId,
                    type: 'GET',
                    success: function (response) {
                        $('#service-select').html(response);
                    }
                });
            } else {
                $('#service-select').html('<option value="">Tous les Services</option>');
            }
        });
		$('#name').keyup(function () {
            updateProcedureFiles(); // Update procedure files on each keystroke
        });

        // Initial procedure files update
        updateProcedureFiles();
    });
</script>
 
 
 
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script><script  src="externe/script.js"></script>
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

</body>
</html>