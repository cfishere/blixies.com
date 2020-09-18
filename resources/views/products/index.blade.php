@include('layouts.app');

@section('content')
@php $header = 'Latest Printable Hoodies, Sweatshirts and T\'s'; @endphp
@foreach ($products as $product)
<div>
	name {{$product->name}}
	<br/>
	sku {{$product->sku}}
</div>
@endforeach
@section