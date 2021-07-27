	<!-- Three -->





	<section id="three">
	    <h2>İletişim</h2>


	    @if($errors->any())
	        @foreach($errors->all() as $error)
	            <div class="alert alert-danger" role="alert">
	                {{ $error }}
	            </div>
	        @endforeach
	    @endif
	    <div class="row">
	        <div class="col-8 col-12-small">
	            <form method="POST" action="{{ route('contactpost') }}">
	                @csrf
	                <div class="row gtr-uniform gtr-50">
	                    <div class="col-6 col-12-xsmall"><input type="text" name="name"
	                            value="{{ old('name') }}" id="name" placeholder="Kimden" />
	                    </div>
	                    <div class="col-6 col-12-xsmall"><input type="email" name="email" id="email"
	                            value="{{ old('email') }}" placeholder="Email" />
	                    </div>
	                    <div class="col-12 col-12-xsmall"><input type="text" name="title"
	                            value="{{ old('title') }}" id="title" placeholder="Başlık" />
	                    </div>
	                    <div class="col-12"><textarea name="message" id="message"
	                            value="{{ old('message') }}" placeholder="Mesaj" rows="4"></textarea>
	                    </div>
	                </div>
	                <ul class="actions">
	                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
	                </ul>
	            </form>

	        </div>
	        <div class="col-4 col-12-small">
	            <ul class="labeled-icons">
	                <li>
	                    <h3 class="icon solid fa-home"><span class="label">Address</span></h3>
	                    1234 Somewhere Rd.<br />
	                    Nashville, TN 00000<br />
	                    United States
	                </li>
	                <li>
	                    <h3 class="icon solid fa-mobile-alt"><span class="label">Phone</span></h3>
	                    000-000-0000
	                </li>
	                <li>
	                    <h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>
	                    <a href="#">hello@untitled.tld</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	</section>

	</div>
	<!-- Footer -->
	<footer id="footer">
	    <div class="inner">
	        <ul class="icons">
	            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
	            <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
	            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
	            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
	        </ul>
	        <ul class="copyright">
	            <li>&copy; Untitled</li>
	            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	        </ul>
	    </div>
	</footer>

	<!-- Scripts -->



	<script src="{{ asset('front') }}/assets/js/jquery.min.js"></script>
	<script src="{{ asset('front') }}/assets/js/jquery.poptrox.min.js"></script>
	<script src="{{ asset('front') }}/assets/js/browser.min.js"></script>
	<script src="{{ asset('front') }}/assets/js/breakpoints.min.js"></script>

	<script src="{{ asset('front') }}/assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
	    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
	</script>
	 @toastr_js
@toastr_render
	

	</body>

	</html>
