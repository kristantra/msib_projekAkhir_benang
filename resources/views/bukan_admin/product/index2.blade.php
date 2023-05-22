@extends('partials.navbar')

@section('content')
<div class="container">
    <div class="text-center">
        <h1>Our Product Colors</h1>
    </div>

    <div class="d-flex justify-content-end">
        <div class="dropdown mr-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="fabricDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Fabric Types
            </button>
            <div class="dropdown-menu" aria-labelledby="fabricDropdown">
                @foreach ($fabricTypes as $fabricType)
                    <a class="dropdown-item" href="{{ route('products.index2', ['sort' => 'fabricType', 'fabric_type_id' => $fabricType->id]) }}">
                        {{ $fabricType->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mt-3">
        @foreach($products as $product)
        <div class="row bg-white mb-2 p-3" style="border-radius: 10px;">
            <div class="col-2" style="background-color: {{ $product->color_code }}; border: 1px solid white;"></div>
            <div class="col-7">
                <p class="mb-0">Fabric Type: {{ $product->fabricType->name }}</p>
                <p class="mb-0">Color Name: {{ $product->color }}</p>
                <p>Quantity Available: {{ $product->quantity_kg }} kg</p>
            </div>
            <div class="col-3 d-flex align-items-center">
                <a href="#" class="btn btn-primary btn-block">Add to cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
