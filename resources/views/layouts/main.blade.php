<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
	<nav class="border-b border-gray-800">
		<div class="container mx-auto flex items-center justify-between px-4 py-6">
			<ul class="flex items-center">
				<li>
					<a href="#">LOGO</a>
				</li>

				<li class="ml-16">
					<a href="/" class="hover-text-gray-300">Home</a>		
				</li>
				
				<li class="ml-10">
					<a href="/about" class="hover-text-gray-300">About</a>		
				</li>

				<li class="ml-10">
					<a href="/services" class="hover-text-gray-300">Services</a>	
				</li>

				<li class="ml-10">
					<a href="/jobs" class="hover-text-gray-300">Jobs</a>		
				</li>

				<li class="ml-10">
					<a href="/employer" class="hover-text-gray-300">Employers</a>	
				</li>

				<li class="ml-10">
					<a href="/contact" class="hover-text-gray-300">Contact</a>	
				</li>

				<li class="ml-10">
					<a href="/home" class="hover-text-gray-300">Login</a>		
				</li>
			</ul>
			<div class="flex items-center">
				<div class="relative">
					<input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
				</div>
				
			</div>
			
		</div>
	</nav>
	@yield('content')
</body>
</html>