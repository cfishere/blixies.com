@foreach ($products as $product)
<div>
	name {{$product->name}}
	<br/>
	sku {{$product->sku}}
</div>
@endforeach