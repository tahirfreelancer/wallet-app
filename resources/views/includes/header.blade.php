<header>
		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header">
				<a href="index.html" class="brand">
					<img src="{{asset('front-end/images/logo-light-text2.png')}}" alt=""/>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">				
                <li class="{{ Request::is('/') ? 'active' : '' }}">
					<a href="{{ url('/')}}">Home</a>
				</li>					
				<li class="{{ Request::is('plans') ? 'active' : '' }}">
					<a href="{{ url('plans')}}">Plans</a>
				</li>	
				<li class="{{ Request::is('faq') ? 'active' : '' }}">
					<a href="{{ url('faq')}}">FAQ</a>
				</li>	
				<li class="{{ Request::is('contact') ? 'active' : '' }}">
					<a href="{{('contact')}}">Contact</a>
				</li>
			</ul>
			<ul class="attributes">
				<li class="d-md-block d-none"><a href="{{('accounts')}}" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
			</ul>
		</nav>
	</header>