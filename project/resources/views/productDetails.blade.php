@extends('master')
@section('title', $product->getTitle())

@section('content')
    <div class="content">
        <?php
                echo '<p>Title: ' . $product->getTitle() . '</p>' .
                     '<p>Description: ' . $product->getDescription() . '</p>' .
                     '<p>Price: ' . $product->getPrice() . '</p>';
        ?>
        <img src="<?php echo $product->getImageUrl(); ?>" width="200" height="200"/>
    </div>
@endsection
