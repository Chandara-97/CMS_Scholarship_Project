<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
            <a class="navbar-brand" href="#"><img src="image/logo.png" style="width: 20%;" alt=""></a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler custom-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon "></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				
				<li class="nav-item " id="1">
						<a class="nav-link"  href="{{url('/index')}}"><span class="btn btn-white rounded-pill">ទំព័រដើម</span> </a>
					</li>
					<li class="nav-item " id="1">
						<a class="nav-link" href="{{url('/scholarship')}}"> <span class="btn  btn-white rounded-pill ">ដំណឹងអាហារូករណ៍</span></a>
					</li>
					<li class="nav-item"id="2">
						<a class="nav-link" href="{{url('/source')}}"><span class="btn  btn-white rounded-pill ">ប្រភពចំណេះដឹង</span> </a>
					</li>
					<li class="nav-item"id="3">
						<a class="nav-link" href="{{url('/aboutus')}}"><span class="btn  btn-white rounded-pill ">ព័ត៌មានអំពីយើង</span> </a>
					</li>
					<li class="nav-item" id="4">
                        <a class="nav-link"href="{{url('/contactus')}}"><span class="btn  btn-white rounded-pill ">ទាក់ទងជាមួយយើង</span> </a>
					</li>
					@guest
                    <li class="nav-item"id="5">
						<a class="nav-link" href="{{url('/login')}}"><span class="btn  btn-white rounded-pill">ចូលគណនី</span> </a>
					</li>
					@if(Route::has('register'))
					<li class="nav-item" id="6">
						<a class="nav-link"href="{{url('/register')}}"><span class="btn  btn-white rounded-pill">ចុះឈ្មោះ</span> </a>
					</li>
					@endif
					@else
					<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<!-- <style>
		.active, .btn:hover {
		background-color: #47ede8;
		color: white;
		}
	</style> -->

