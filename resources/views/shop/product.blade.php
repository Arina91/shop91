@extends('layouts.app')

@section('content')
<h1 class="text-center">{{$product->name}}</h1>

<div class="container">
<div class="row">
<div class="col-12">
<div class="border">
<img src="{{$product->img}}" alt="" class="img-fluid">
<div>
{{$product->name}} <br>
<div class="border-top">
Price: {{$product->price}}
</div>
</div>
</div>
</div>
</div>


<h3>Add Review</h3>
@guest
Login or register
@else

<form action="/product/{{$product->slug}}" method="POST">
@csrf
<div class="form-group">
<textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
</div>
<input type="hidden" name="product" value="{{$product->id}}">
<input type="hidden" name="user" value="{{Auth::user()->id}}">

<button class="btn btn-primary">Send</button>
</form>
@endguest

</div>

@endsection 