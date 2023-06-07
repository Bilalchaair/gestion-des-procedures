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
		.sidebar {
  width: 200px;
  background-color: #f1f1f1;
  padding: 10px;
}

.sidebar ul {
  list-style-type: none;
  padding-left: 20px;
}

.sidebar ul ul {
  display: none;
  padding-left: 20px;
}

.sidebar li {
  margin-bottom: 10px;
}

.sidebar li a {
  text-decoration: none;
  color: #333;
}

.table-container {
  margin-left: 220px; /* Adjust the margin as needed */
}

	</style>
</head>
<body>
<!-- partial:index.partial.html -->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
		

		
		<div class="container">
			<img style="width: 50px;" class="navbar-brand" src="assets/chu-new.png" alt="">
			
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="{{route('home')}}" class="nav-item nav-link ">Home</a></li>
					<li><a href="{{ route('page_procedure') }}" class="nav-item nav-link active">Les procedures</a></li>
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

<main>
<div class="sidebar">
    <ul>
        @foreach ($hopitals as $hopital)
            <li>
                <h2>{{ $hopital->nom_hopital }}</h2>
                <ul>
                    @foreach ($hopital->divisions as $division)
                        <li>
                            <h3>{{ $division->nom_division }}</h3>
                            <ul>
                                @foreach ($division->services as $service)
                                    <li>
                                        <h4>{{ $service->nom_service }}</h4>
                                        <ul>
                                            @foreach ($service->procedurefiles as $procedurefile)
                                                <li>
                                                    <a href="{{ $procedurefile->file }}">{{ $procedurefile->nom_procedure }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>

<div class="table-container">
    <table>
        <tr>
            <th>Nom Procedure</th>
            <th>Download</th>
        </tr>
        @foreach ($hopitals as $hopital)
            @foreach ($hopital->divisions as $division)
                @foreach ($division->services as $service)
                    @foreach ($service->procedurefiles as $procedurefile)
                        <tr>
                            <td>{{ $procedurefile->nom_procedure }}</td>
                            <td>
                                <a href="{{ $procedurefile->file }}" download>Download PDF</a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @endforeach
        @endforeach
    </table>
</div>

</main>
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
		<script>// Add an event listener to the sidebar heading elements to toggle visibility of sub-lists
const sidebarHeadings = document.querySelectorAll('.sidebar h2, .sidebar h3, .sidebar h4');
sidebarHeadings.forEach(heading => {
  heading.addEventListener('click', () => {
    const subList = heading.nextElementSibling;
    if (subList.style.display === 'none') {
      subList.style.display = 'block';
    } else {
      subList.style.display = 'none';
    }
  });
});
</script>
</body>
</html>
