<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('assets/tailwind.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/dashboard.css') }}" />
	<title>Mexicana</title>
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"/>
</head>
<body>
	<div>
			<div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
				<x-header />
				<x-sidebar>
					<x-select 
						:value="get_month($month)" 
						:values="get_months()"
						label="Filter by Month"
					/>
				</x-sidebar>
				<div class="h-full ml-14 p-8 mt-14 mb-10 md:ml-64">
					{{ $slot }}
				</div>
			</div>
		</div>    
	
		<script src="{{ asset('js/alpine.min.js') }}" defer></script>
		<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>