@extends('front.layouts.master')
@section('content')
@include('front.widgets.navbar')
<section>
							
							<h2>{{$article->title}}</h2>
						
							<h5>{{$article->getCategory->name}} - {{$article->created_at->diffForHumans()}} </h5>
							<p><span class="image fit"><img src="{{asset('front')}}/images/fulls/04.jpg" alt="">
                            </span>
                                {!!$article->content!!}
                        </p>
                        
							</section>

@endsection