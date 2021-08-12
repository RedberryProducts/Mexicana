<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mexicana</title>
	<link rel="stylesheet" href="{{ asset('assets/tailwind.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/main.css') }}" />
  	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"/>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1471443336537911');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1471443336537911&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body class="bg-main">
	<div class="hide-on-mobile flex flex-col justify-between px-24 h-screen m-0 pt-9">
		<header>
			<div class="flex justify-end pr-28 space-x-4">
				<a href="https://www.facebook.com/mexicanatbilisi/">
					<img src="{{ asset('assets/images/fb.svg') }}" alt="fblink">
				</a>			
				<a href="https://www.instagram.com/mexicana_tbilisi/?utm_medium=copy_link&fbclid=IwAR26ski3N2uCk7pGO8xeSFezEYowpbDc8K5GEbgSO9VmeQWPCSaZ7aBYzLs">
					<img src="{{ asset('assets/images/insta.svg') }}" alt="instalink">
				</a>	
				<a href="https://www.tiktok.com/@mexicana_tbilisi?_d=secCgYIASAHKAESMgow1P8K8HbP8VDmyFnASDGb0O4GQ91V97eKuFCI5%2BzeO8Kz6LwG%2BA81AiREPdywimqkGgA%3D&checksum=b8f9f36c9ec11be35b7dcb157c3669556e33770d835b898368ca86437f5d4839&language=en&sec_uid=MS4wLjABAAAA3T56y65ddFXBL4kHI2zqYs_qnd45w3cEENVDQT5F0jeiN31eOkqQOvxJLvNOADB1&sec_user_id=MS4wLjABAAAA6CE-lMoM5InRTtLZGqcXydXxWv3oM_5r3PqW733qYaiQlus3Wc0yQbzeXXq-AhPu&share_app_id=1233&share_author_id=6981728914452661250&share_link_id=C4494E9C-8784-4867-82DC-DD3B67916483&tt_from=copy&u_code=d9fillah7ifimf&user_id=6764781653984543749&utm_campaign=client_share&utm_medium=ios&utm_source=copy&source=h5_m&_r=1">
					<img src="{{ asset('assets/images/tiktok.svg') }}" alt="tiktok">
				</a>	
			</div>
			<div>
				<img src="{{ asset('assets/images/headerimg.svg') }}" alt="headerimg" class="pt-7 object-fill h-full w-full">
			</div>
		</header>
	
		<div class="flex flex-row-reverse items-center justify-center flex-grow justify-around">
			<div>
        <img src="{{ asset('assets/images/mexicanamainimg.svg') }}" alt="mexicanaimage" class="w-full">
			</div>
	
			<div class ="flex flex-col items-center justify-between">
				<img src="{{ asset('assets/images/order.svg') }}" alt="order" class="max-w-full"></a>	
				<img src="{{ asset('assets/images/logomexicana.svg') }}" alt="logomexicana" class="pt-4 w-full">
	
				<div class ="flex pt-11">
					<form method="POST" action="{{ route('click') }}">
						@csrf
						<input type="hidden" name="link" value="{{ $glovoLink }}"/>
						<input type="hidden" name="restoraunt" value="glovo"/>
						<img 
							src="assets/images/glovo.svg" 
							class="w-full cursor-pointer"
							onclick="this.parentNode.submit()"
							alt="glovo" 
						/>
					</form>
					<form method="POST" action="{{ route('click') }}">
						@csrf
						<input type="hidden" name="link" value="{{ $woltLink }}"/>
						<input type="hidden" name="restoraunt" value="wolt"/>
						<img 
							src="assets/images/wolt.svg" 
							class="w-full cursor-pointer"
							onclick="this.parentNode.submit()"
							alt="wolt" 
						/>	
					</form>	
					<form method="POST" action="{{ route('click') }}">
						@csrf
						<input type="hidden" name="link" value="{{ $boltLink }}"/>
						<input type="hidden" name="restoraunt" value="bolt"/>
						<img 
							src="assets/images/bolt.svg" 
							class="w-full cursor-pointer"
							onclick="this.parentNode.submit()"
							alt="bolt" 
						/>	
					</form>	
				</div>
			</div>
		</div>
	
		<footer>
			<img src="{{ asset('assets/images/footerimage.svg') }}" alt="footerimg" class="w-full h-full pb-4">
		</footer>
	</div>
	<!-- MOBILE SECTION HTML -->
    <div class="hide-on-desktop justify-between px-6 relative" x-data="{ burgerVisible: false }">
		<div class="flex justify-around w-full h-full h-screen m-0 flex-col items-center">
			<div class="flex flex-row justify-end w-full relative z-10">
				<img src="{{ asset('assets/images/burger.svg') }}" @click="burgerVisible = true" />
			</div>
			<img src="{{ asset('assets/images/mobile-main-image.svg') }}" alt="glovomobile" class="w-full -mt-16">
			<div class="flex flex-col items-center">
				<img src="{{ asset('assets/images/order.svg') }}" alt="order" class="mb-3">	
				<img src="{{ asset('assets/images/logomexicana.svg') }}" alt="logomexicana">
			</div>
			<div class="onmobile flex-col items-center justify-center content-center space-y-2">
				<form method="POST" action="{{ route('click') }}">
					@csrf
					<input type="hidden" name="link" value="{{ $glovoLink }}"/>
					<input type="hidden" name="restoraunt" value="glovo"/>
					<img 
						src="{{ asset('assets/images/glovo-mobile.svg') }}" 
						alt="glovomobile"  
						class="w-full"
						onclick="this.parentNode.submit()"
					>
				</form>
				
				<form method="POST" action="{{ route('click') }}">
					@csrf
					<input type="hidden" name="link" value="{{ $woltLink }}"/>
					<input type="hidden" name="restoraunt" value="wolt"/>
					<img 
						src="{{ asset('assets/images/wolt-mobile.svg') }}" 
						alt="woltmobile"  
						class="w-full"
						onclick="this.parentNode.submit()"
					>
				</form>
				
				<form method="POST" action="{{ route('click') }}">
					@csrf
					<input type="hidden" name="link" value="{{ $boltLink }}"/>
					<input type="hidden" name="restoraunt" value="bolt"/>
					<img 
						src="{{ asset('assets/images/bolt-mobile.svg') }}" 
						alt="woltmobile"  
						class="w-full"
						onclick="this.parentNode.submit()"
					>
				</form>
			</div>
		</div>

    <!--START BURGER MENU HTML-->
		<nav class="hide-on-desktop mobile-nav bg-white ml-10 px-7 pt-7 absolute z-20 box-border rounded-l-3xl" x-cloak x-show="burgerVisible">
			<ul class="mainMenu space-y-3">							
					<li class="pb-20">
							<img src="{{ asset('assets/images/close.png') }}" alt="close" @click="burgerVisible = false">
					</li>
					
					<li>
							<a href="https://www.facebook.com/mexicanatbilisi" class="flex items-center">
								<img src="{{ asset('assets/images/burger-fb.svg') }}" alt="FbBurger" >
								<p>Facebook</p>
							</a>
					</li>

					<li>
							<a href="https://www.instagram.com/mexicana_tbilisi/?utm_medium=copy_link&fbclid=IwAR26ski3N2uCk7pGO8xeSFezEYowpbDc8K5GEbgSO9VmeQWPCSaZ7aBYzLs" class="flex items-center">
								<img src="{{ asset('assets/images/burger-insta.svg') }}" alt="InstaBurger" >
								<p>Instagram</p>
							</a>
					</li>
				
					<li>
						<a href="https://www.tiktok.com/@mexicana_tbilisi?_d=secCgYIASAHKAESMgow1P8K8HbP8VDmyFnASDGb0O4GQ91V97eKuFCI5%2BzeO8Kz6LwG%2BA81AiREPdywimqkGgA%3D&checksum=b8f9f36c9ec11be35b7dcb157c3669556e33770d835b898368ca86437f5d4839&language=en&sec_uid=MS4wLjABAAAA3T56y65ddFXBL4kHI2zqYs_qnd45w3cEENVDQT5F0jeiN31eOkqQOvxJLvNOADB1&sec_user_id=MS4wLjABAAAA6CE-lMoM5InRTtLZGqcXydXxWv3oM_5r3PqW733qYaiQlus3Wc0yQbzeXXq-AhPu&share_app_id=1233&share_author_id=6981728914452661250&share_link_id=C4494E9C-8784-4867-82DC-DD3B67916483&tt_from=copy&u_code=d9fillah7ifimf&user_id=6764781653984543749&utm_campaign=client_share&utm_medium=ios&utm_source=copy&source=h5_m&_r=1" class="flex items-center">
							<img src="{{ asset('assets/images/burger-tiktok.svg') }}" alt="TikBurger" >
							<p>TikTok</p>
						</a>
					</li>

					<li class="pt-14">
						<img src="{{ asset('assets/images/burger-pin.svg') }}" alt="Vector">
						<p>Tbilisi, Zh. Shartava 37a</p>					
					</li>
			</ul>
		</nav>	
  <!--END BURGER MENU HTML-->
	</div>
	<!--END MOBILE SECTION HTML-->

    <script defer src="{{ asset('assets/alpine.min.js') }}"></script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>
</html>
