@extends('layouts.master')
@section('title')
    laravel shopping cart
    @endsection
@section('content')
@foreach($products->chunk(3) as $productChunk)
    <div class="row">
   
 @foreach($productChunk as $product)
 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="http://content.blueport.com/ProductImages/0/305003.jpg?fit=inside%7C320:320&composite-to=center,center%7C320:320&background-color=white" alt="...">

      <div class="caption">
        <h3 class="productstitle">Product Title</h3>
        <p class="description" >We're celebrating Australia Day today, feel free to download this special freebie if you like it (specially for friends from the land down under). download</p>

        <div class="clearfix">
         <div class="pull-left price">$5000</div>
        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
        </div>
        </div>
      </div>
    </div>
 @endforeach

  </div>
  @endforeach
   @endsection
