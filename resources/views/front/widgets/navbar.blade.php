	
	
		
		  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('homepage')}}">Ana Sayfa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        @isset($categories)
		@foreach ($categories as $category)
      <li class="nav-item @if(Request::segment(2)==$category->slug) active @endif ">
        <a class="nav-link" href="{{route('category',$category->slug)}}">{{$category->name}}</a>
      </li>
      @endforeach
                  @endif
    </ul>
  </div>
</nav>
	