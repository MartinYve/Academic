    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
		        <img alt="" border="0" src="{{asset('images/logo.png')}}"  width="220">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="{{route('welcome')}}" class="nav-link pl-0">Accueil</a></li>
	        	<li class="nav-item"><a href="teacher.html" class="nav-link">Professeur</a></li>
	        	<li class="nav-item"><a href="courses.html" class="nav-link">Cours</a></li>
	          	<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item">
				<a href="{{route('login')}}" class="btn btn-primary px-4 py-2 mt-4">Login</a>
				<!-- <a href="{{route('login')}}" style = "  " class="nav-link login btn btn-primary px-4 py-2 mt-4"><i class="bi bi-person-circle me-2"></i>Login</a> -->
                </li>
	        </ul>
	      </div>
	    </div>
	</nav>