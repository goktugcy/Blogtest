@extends('front.layouts.master')
@section('title',$category->name. ' Kategorisi')
@section('content')
    @include('front.widgets.navbar') 
    <br>
    @include('front.widgets.articleList')
@endsection