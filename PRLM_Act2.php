<?php 
    // Use of a multidimensional array - Storing Arrays in an Array 
    $menu = [
        ["name" => "Latte", "info" => "A creamy, smooth blend of coffee and milk.", "price" => 120.00],
        ["name" => "Cappuccino", "info" => "Perfect balance of espresso and foam.", "price" => 110.00],
        ["name" => "Espresso", "info" => "A strong and pure blend from fresh coffee beans.", "price" => 100.00]
    ];

    $price = '200'; // Use for the loops in prices of packs and to test type juggling (string to integer)

    // Use of Switch case for the conditional statement
    $day = "Monday";
    switch ($day) {
        case 'Sunday':
            $openhours = 'Opening Hours: 8 am to 11 pm';
            break;
        case 'Monday':
            $openhours = 'Opening Hours: 7 am to 10 pm';
            break;
        default:
            $openhours = 'Close';
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
                background: url('includes/cafe.jpg') center/cover no-repeat;
                color: white;
                padding: 60px 20px;
                text-align: center;
                font-size: 28.8px;
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
    
    <h1 style="font-size: 35px; text-align: center;">Welcome to our Kopfy Store!</h1>
    <h2 style="font-size: 25px; text-align: center;">Check out our menu below!</h2>

    <!-- Accessing the arrays and their values using their index by row -->
    <p style="font-size: 20px;"><?php echo $menu[0]['name']; ?></p>
    <p><?php echo $menu[0]['info']; ?></p>
    <p>Php <?php echo $menu[0]['price']; ?></p>
    
    <br>  <!-- Use of br for line spaces learned from code geeks seminar about php and mysql nov28.25 -->

    <p style="font-size: 20px;"><?php echo $menu[1]['name']; ?></p>
    <p><?php echo $menu[1]['info']; ?></p>
    <p>Php <?php echo $menu[1]['price']; ?></p>

    <br> 
    
    <p style="font-size: 20px;"><?php echo $menu[2]['name']; ?></p>
    <p><?php echo $menu[2]['info']; ?></p>
    <p>Php <?php echo $menu[2]['price']; ?></p>
    
    <br> 

    <p style="font-size: 20px;">Pre-made Instant Coffee Pack Prices</p>
    <p>Note: 1 pack includes 3 sachets only</p>
    
    <!-- Use of FOR LOOP, expressions and operation, and show how type juggling works -->
    <p>
        <?php 
            for ($i = 1; $i <= 5; $i++) {
                echo $i;
                echo ' packs of coffee = Php ';
                echo $price * $i;
                echo '<br>';
            }
        ?>
    </p>

    <br> 

    <!-- Show the use of Switch conditional statements -->
    <p style="font-size: 20px;">Opening Hours</p>
    <p>If the day is <?= $day; ?></p>
    <p><?= $openhours ?></p>
    
    <br> 

    <!-- Using of include files -->
    <?php require_once 'includes/footer.php'; ?> 
</body>
</html>

