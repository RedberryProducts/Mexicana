<li>
	<a href="{{ route($route) }}" 
		class="
			h-11 focus:outline-none hover:bg-blue-800 
			border-transparent hover:border-blue-500 
			dark:hover:bg-gray-600 text-white-600 
			relative flex flex-row items-center 
			hover:text-white-800 border-l-4 
			dark:hover:border-gray-800 pr-6
			{{ request()->routeIs($route) ? 'bg-gray-800' : '' }}
		"
	>
		<span class="inline-flex justify-center items-center ml-4">
			{{ $slot }}
		</span>
		<span class="ml-2 text-sm tracking-wide truncate">{{ $name }}</span>
	</a>
</li>