<!-- HEADER  -->
<header class="main-header">
	<div class="container">
		<div class="logo">
			<a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" style="height: 80px;"></a>
		</div>

		<div class="menu">
			<!-- desktop navbar -->
			<nav class="desktop-nav">
				<ul class="first-level">
					<li><a href="{{ route('home') }}" class="animsition-link">Home</a></li>
					<li><a href="{{ route('about') }}" class="animsition-link">about us</a></li>
					<li><a href="{{ route('services') }}" class="animsition-link">services</a></li>
					<!-- <li><a href="">portfolio</a>
						<ul class="second-level">
							<li><a href="#" class="animsition-link">portfolio list</a></li>
							<li><a href="#" class="animsition-link">single project 1</a></li>
							<li><a href="#" class="animsition-link">single project 2</a></li>
						</ul>
					</li>
					<li><a href="">blog</a>
						<ul class="second-level">
							<li><a href="#" class="animsition-link">posts list</a></li>
							<li><a href="#" class="animsition-link">single post</a></li>
						</ul>
					</li> -->
					<li><a href="{{ route('contact') }}" class="animsition-link">contact us</a></li>
				</ul>
			</nav>
			<!-- mobile navbar -->
			<nav class="mobile-nav"></nav>
			<div class="menu-icon">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div>
	</div>
</header>
