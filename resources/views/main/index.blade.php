@extends('layouts.app')

@section('content')
<h2 class="text-center">Categories</h2>

<div class="container">
<div class="row">
@foreach($categories as $category)
<div class="col-3">
<div class="border">
<a href="/category/{{$category->slug}}">
<img src="{{$category->img}}" alt="" class="img-fluid">
{{$category->name}} <br>
</a>
</div>
</div>
@endforeach
</div>
</div>


<h2 class="text-center">Products</h2>

<div class="container">
<div class="row">
@foreach($products as $product)
<div class="col-3">
<div class="border">
<div>Category: {{$product->category->name ?? '-'}}</div>
<a href="/product/{{$product->slug}}">
<img src="{{$product->img}}" alt="" class="img-fluid">
{{$product->name}} <br>
<div class="border-top">
Price: {{$product->price}}
</div>
</a>
</div>
</div>
@endforeach
</div>


</div>

@endsection 