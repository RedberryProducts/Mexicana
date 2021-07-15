<div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
	<div class="pl-3 flex items-center justify-start md:justify-start w-36 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
		<img
			class="h-7 md:h-10 mr-2 rounded-md overflow-hidden cursor-pointer" 
			src="{{ asset('assets/images/logomexicana.svg') }}" 
			onclick="location.reload()"
		/>
	</div>
	<div class="flex justify-end items-center h-14 w-full bg-blue-800 dark:bg-gray-800 header-right">
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<button class="flex items-center mr-4 hover:text-blue-100">
				<span class="inline-flex mr-1">
					<x-svg.logout />
				</span>
				Logout
			</button>
		</form>
	</div>
</div>