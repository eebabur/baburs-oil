@extends('master')
@section('title', 'Products')

@section('content')
    <div class="content">
        <?php
            foreach($products as $product)
            {
                echo '<p><a href="/products/' . $product->getId() . '">Title: ' . $product->getTitle() . '</a></p>';
                echo '<p>Price: ' . $product->getPrice() . '</p>';
                echo '<p>Id: ' . $product->getId() . '</p>';
                echo '<img src="' . $product->getImageUrl() . '" width="200" height="200"/>';
                echo '<p><input type="number" id="' . $product->getId() . '" class="quantity" min="1" max="100" value="1"></p>';
                echo '<p><button id="' . $product->getId() . '" onClick="addProduct(this.id)">Add to cart</button></p>';
            }
        ?>
    </div>
@endsection