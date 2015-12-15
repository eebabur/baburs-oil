@extends('master')
@section('title', 'Shopping Cart')

@section('content')
    <div class="content">
        <?php
            if(!empty($shoppingCart))
            {
                $shoppingItems = $shoppingCart->ShoppingItems();
                foreach($shoppingItems as $shoppingItem)
                {
                    echo '<p>Quantity: ' . $shoppingItem->getQuantity() . '</p>';
                    echo '<p>Title: ' . $shoppingItem->Product()->getTitle() . '</p>';
                    echo '<p>Price: ' . $shoppingItem->Product()->getPrice() . '</p>';
                    echo '<p>Total: ' . $shoppingItem->Product()->getPrice() * $shoppingItem->getQuantity() . '</p>';
                    echo '<img src="' . $shoppingItem->Product()->getImageUrl() . '" width="200" height="200"/>';
                }
            }
            else
                echo 'Shopping Cart is empty.';
        ?>
    </div>
@endsection
