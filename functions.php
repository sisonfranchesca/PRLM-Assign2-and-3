<?php 
    declare(strict_types = 1); // For the exact data type (strict)
    
    // Use of a multidimensional array - Stocks of instant coffee packs 
    $stocks = [
        'Cafe Latte' => ['price' => 150.00, 'stock' => 28],
        'Instant Cappuccino' => ['price' => 200.00, 'stock' => 24],
        'Pure Espresso' => ['price' => 250.00, 'stock' => 18],
        'Dark Mocha Blend' => ['price' => 300.00, 'stock' => 8],
        'Premium Blend' => ['price' => 400.00, 'stock' => 1],
        'Hazelnut Brew' => ['price' => 350.00, 'stock' => 0]
    ];

    $tax_rate = 12; // Tax rate 12%

    // Function for the reorder yes or no message, if my stock is less than 10
    function get_reorder_message(int $message): string {
        return $message < 10 ? 'Yes' : 'No';
    }

    // Function for the total value
    function get_total_value(float $price, int $quantity): float {
        return $price * $quantity;
    }

    // Function for the tax
    function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
        return ($price * $quantity) * ($tax_rate / 100);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopfy Store</title>
        <style>
            body {
                font-family: 'Segoe UI', Arial, sans-serif;
                margin: 0;
                background-color: #fffdf9;
                color: #4e342e;
            }

            p {
                font-size: 14.4px; 
                color: #6d4c41;
                margin: 0;
                text-align: center;
            }
            
            h3 {
                font-size: 19.2px;
                color: #ffffffff;
                margin: 5px 0;
                text-align: center;
            }
            /* This css block is from our old introweb activity (Urbanbites cafe) */
            .hero {
                background: url('includes/stocks.jpg') center/cover no-repeat;
                color: white;
                padding: 60px 20px;
                text-align: center;
                font-size: 28.8px;
            }

            /* This block of code is for the stocks table */
            .container {
                max-width: 1200px;
                margin: 0 auto;
            }

            h1 {
                text-align: center;
                color: #4e342e;
                margin-bottom: 30px;
            }

            table {
                width: 100%;
                background-color: white;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }

            th {
                background-color: #ac895f;
                color: white;
                text-align: left;
                padding: 15px;
            }

            td {
                padding: 15px;
                border-bottom: 1px solid #ddd;
            }

            tr:hover {
                background-color: #f5f5f5;
            }
        </style>
</head>
<body>
    <!-- Using of include files -->
    <?php require_once 'includes/header.php'; ?>

    <!-- This block of code is from our old activity in introweb (Urbanbites cafe) -->
    <section class="hero">
        <h2>Fresh & Delicious, Every Day</h2>
        <h3>Enjoy the delightful taste of coffee and paradise.</h3>
    </section>
    
    <h1 style="font-size: 35px; text-align: center;">Welcome to Kopfy Stocks!</h1>
    <h1 style="font-size: 20px; text-align: center;">In this page, you will see the stock levels of the Pre-made Instant Coffee by the kopfy store.</h1>
 
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>PRODUCT</th>
                    <th>STOCK</th>
                    <th>RE-ORDER</th>
                    <th>TOTAL VALUE</th>
                    <th>TAX DUE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop for the stocks 
                foreach ($stocks as $product => $data): ?>
                    <tr>
                        <!-- Calls my product -->
                        <td><?php echo $product; ?></td>
                        
                        <!-- Shows the number of my stock -->
                        <td><?php echo $data['stock']; ?></td>
                        
                        <!-- Yes or no message -->
                        <td><?php echo get_reorder_message($data['stock']); ?></td>
                        
                        <!-- Calls the total value -->
                        <td>₱ <?php echo get_total_value($data['price'], $data['stock']); ?></td>
                        
                        <!-- Calls the tax -->
                        <td>₱ <?php echo get_tax_due($data['price'], $data['stock'], $tax_rate); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <br>

    <!-- Using of include files -->
    <?php require_once 'includes/footer.php'; ?> 
</body>
</html>

