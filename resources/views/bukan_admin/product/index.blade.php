@extends('layouts.app')

@section('content')
    

<div class="container">
    <div class="text-center">
        <h1>Our Product Colors</h1>
    </div>



    {{-- this code doesn't work --}}
    <div class="d-flex justify-content-end">
        <div class="dropdown mr-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="fabricDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Fabric Types
            </button>
            <div class="dropdown-menu" aria-labelledby="fabricDropdown">
                <!-- Add your fabric types here -->
                @foreach ($fabricTypes as $fabricType)
                    <a class="dropdown-item" href="#">{{ $fabricType->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="sortDropdown">
                <!-- Add your sorting options here -->
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
            </div>
        </div>
    

        
    </div>
    {{-- until here --}}

    <div class="row mt-3">
        <!-- Add your product cards here. You can loop through your products and create a card for each one. -->
        <!-- Here's an example of what a single card might look like: -->
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card">
                <!-- This div will take up half the card and will have a background color equal to the product's color code -->
                <div style="background-color: {{ $product->color_code }}; border: 1px solid white; padding-top: 50%;">
                    <!-- You can put content here if you want, or leave it empty to just show the color -->
                </div>
                <div class="card-body">
                    <!-- Display the fabric type, color name, and quantity -->
                    <p class="card-text">Fabric Type: {{ $product->fabricType->name }}</p>
                    <p class="card-text">Color Name: {{ $product->color }}</p>
                    <p class="card-text">Quantity Available: {{ $product->quantity_kg }} kg</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3">
        {{ $products->links() }}
    </div>
</div>
@endsection
