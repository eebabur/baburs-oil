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
                echo '</br><button id="' . $product->getId() . '" onClick="addProduct(this.id)">Add to cart</button>';
            }
        ?>
    </div>
@endsection