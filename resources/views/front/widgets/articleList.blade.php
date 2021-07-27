<div class="row">
    
		@if(count($articles)>0)
		@foreach($articles as $article)
                <article class="col-6 col-12-xsmall work-item">
                    <a href="#" class="image fit thumb"><img src="{{ asset('front') }}/images/fulls/01.jpg" alt="" /></a>
                    <h3><a href="{{ route('single',[$article->getCategory->slug,$article->slug]) }}">{{$article->title }} </a></h3>
                    <p> {!! str_limit($article->content,120)!!} </p>
					<h6>{{$article->getCategory->name}} - {{$article->created_at->diffForHumans()}}</h6>
                </article>
                @if(!$loop->last)
                   
                @endif
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $articles->links(("pagination::bootstrap-4")) }}
            </div>
        @else

            <div class="d-flex justify-content-center alert text-danger error ">
                <h1>Bu blogda hiç yazı yok!</h1>
            </div>

        @endif
    </div>