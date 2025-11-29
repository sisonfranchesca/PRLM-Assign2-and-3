<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopfy Store</title>
    
    <!-- This css block is from our old activity in introweb (Urbanbites cafe)-->
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ac895f;
            padding: 15px 20px;
        }

        .name {
            font-size: 24px; 
            font-weight: bold;
            color: white;
        }

        .menu {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .menu li {
            position: relative;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 8px 5px;
            transition: color 0.3s ease;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #5d4037;
            list-style: none;
            margin: 0;
            padding: 10px 0;
            min-width: 150px;
            border-radius: 4px;
        }

        .dropdown li a {
            display: block;
            padding: 8px 15px;
            color: white;
        }

        .dropdown li a:hover {
            background-color: #795548;
        }

        .menu li:hover .dropdown {
            display: block;
        }

    </style>

    <!-- This block of code is from our past activity in introweb (Copied some parts) -->
    <header>
        <div class="name">Kopfy Store</div>
            <nav>
                <ul class="menu">
                    <li><a href="">Home</a></li>
                    <li>
                        <a href="">Menu ▾</a>
                        <ul class="dropdown">
                            <li><a href="">Coffee</a></li>
                            <li><a href="">Packs</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </header>
</head>
<body>
</body>
</html>