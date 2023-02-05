<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>UAS</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
			rel="stylesheet"
		/>
    @vite(['resources/sass/landing.scss', 'resources/js/landing.js'])
	</head>
	<body>
		<header
			id="header"
			class="fixed top-0 left-0 w-full py-4 z-50 bg-white md:bg-transparent"
		>
			<div class="container">
				<div class="flex w-full items-center justify-center md:justify-start">
					<a href="/">
						<img src="{{ asset('images/logo-dark.svg') }}" class="h-[33px]" alt="" />
					</a>
					<button class="ml-auto block md:hidden" id="nabar-toggle">
						<i class="bx bx-menu text-[34px] text-primary"></i>
					</button>
					<div
						class="md:flex md:ml-10 w-full absolute md:static bg-white md:bg-transparent top-[55px] md:top-0 left-0 pt-4 md:pt-0 hidden"
						id="navbar"
					>
						<nav
							class="md:flex md:items-center w-full flex-col md:flex-row nav-collapsible hisdden px-3 md:px-0"
						>
							<ul class="md:mr-auto flex flex-col md:flex-row align-center">
								<li class="py-2 md:py-0">
									<a href="?" class="px-2 font-bold"> Home </a>
								</li>
								<li class="py-2 md:py-0">
									<a href="?" class="px-2 font-light text-grey"> Home </a>
								</li>
								<li class="py-2 md:py-0">
									<a href="?" class="px-2 font-light text-grey"> Course </a>
								</li>
								<li class="py-2 md:py-0">
									<a href="?" class="px-2 font-light text-grey"> Mentors </a>
								</li>

								<li class="py-2 md:py-0">
									<a href="?" class="px-2 font-light text-grey"> About Us </a>
								</li>
								<li class="py-2 md:py-0">
									<a href="?" class="px-2 font-light text-grey"> Contact </a>
								</li>
							</ul>
							<ul class="md:ml-auto flex md:items-center flex-col md:flex-row">
								@auth
                <li class="md:px-3 py-2 md:py-0">
									<a href="{{ route('login') }}" class="btn-round btn-outline min-w-[140px]">
									Dashboard
									</a>
								</li>
                @else
                <li class="md:px-3 py-2 md:py-0">
									<a href="{{ route('login') }}" class="btn-round btn-outline min-w-[140px]">
										Log in
									</a>
								</li>
                @endauth
								{{-- <li class="md:px-3 py-2 md:py-0">
									<button class="btn-round min-w-[140px]">Registration</button>
								</li> --}}
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main>
      @yield('content')
    </main>
		<footer id="footer" class="bg-chocolate text-white py-10">
			<div class="container">
				<div class="grid lg:grid-cols-12 grid-cols-5">
					<div class="lg:col-span-4 col-span-5 sm:pb-5 lg:pb-0">
						<a href="/">
							<img src="{{ asset('images/logo-white.svg') }}" alt="" />
							<p class="text-sm mt-7 text-white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
								fermentum massa sit amet porta efficitur.
							</p>
							<ul class="flex mt-7">
								<li class="mr-2">
									<a href="?">
										<i class="bx bxl-facebook text-[26px]"></i>
									</a>
								</li>
								<li class="mr-2">
									<a href="?">
										<i class="bx bxl-twitter text-[26px]"></i>
									</a>
								</li>
								<li class="mr-2">
									<a href="?">
										<i class="bx bxl-linkedin text-[26px]"></i>
									</a>
								</li>
								<li class="mr-2">
									<a href="?">
										<i class="bx bxl-instagram text-[26px]"></i>
									</a>
								</li>
							</ul>
						</a>
					</div>
					<div class="sm:col-span-1 col-span-2">
						<h6 class="font-bold">Home</h6>
						<ul>
							<li class="mt-2 text-sm"><a href="">Class</a></li>
							<li class="mt-2 text-sm"><a href="">Course</a></li>
							<li class="mt-2 text-sm"><a href="">About</a></li>
							<li class="mt-2 text-sm"><a href="">Mentors</a></li>
						</ul>
					</div>
					<div class="sm:col-span-2 col-span-3">
						<h6 class="font-bold">Our company</h6>
						<ul>
							<li class="mt-2 text-sm"><a href="">Class Comunity</a></li>
							<li class="mt-2 text-sm"><a href="">Course company</a></li>
							<li class="mt-2 text-sm"><a href="">Company name</a></li>
							<li class="mt-2 text-sm">
								<a href="">mens course</a>
							</li>
							<li>
								<a href="">Courses.com</a>
							</li>
						</ul>
					</div>
					<div class="sm:col-span-2 col-span-5">
						<h6 class="font-bold">Class</h6>
						<ul>
							<li class="mt-2 text-sm"><a href="">Potography </a></li>
							<li class="mt-2 text-sm"><a href="">HTML & CSS </a></li>
							<li class="mt-2 text-sm"><a href="">JavaScript </a></li>
							<li class="mt-2 text-sm"><a href="">Java </a></li>
							<li class="mt-2 text-sm"><a href="">PHP </a></li>
							<li class="mt-2 text-sm"><a href="">UI/UX Design </a></li>
							<li class="mt-2 text-sm"><a href="">Web Design </a></li>
							<li class="mt-2 text-sm"><a href="">Design Grafis</a></li>
						</ul>
					</div>
					<div class="lg:col-span-3 col-span-5 mt-4 lg:mt-0">
						<h6 class="font-bold">About us</h6>
						<p class="my-2">You can contact Us to send email to us</p>
						<form action="?">
							<div
								class="w-full rounded-3xl bg-white overflow-hidden flex pr-3"
							>
								<input
									type="email	"
									placeholder="Your email"
									class="p-3 w-full text-dark px-5 outline-none"
								/>
								<button class="bg-white text-primary">
									<i class="bx bx-send text-[22px]"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
