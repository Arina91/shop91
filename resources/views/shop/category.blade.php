@extends('mainlayouts.main')
@section('content')
<h1 class="text-center">Products</h1>

<div class="container">
<div class="row">
@foreach($products as $product)
<div class="col-3">
<div class="border">
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