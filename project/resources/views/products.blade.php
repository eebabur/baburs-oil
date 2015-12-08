<!DOCTYPE html>
<html>
        <head>
        <title>Babur's Oil</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <?php
                    foreach($products as $product)
                        echo '<a href="/products/' . $product->getId() . '">Title: ' . $product->getTitle() . '</a>' .
                             '<p>Price: ' . $product->getPrice() . '</p>'.
                             '<p>Id: ' . $product->getId() . '</p>';
                ?>
            </div>
        </div>
    </body>
</html>
