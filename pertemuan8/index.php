<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>

    <div class="page">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'switch':
                include 'soal1.php';
                break;
            case 'for':
                include 'soal2.php';
                break;
            case 'array':
                include 'soal3.php';
                break;
            case 'ternary':
                include 'soal4.php';
                break;
            default:
                echo "";
                break;
        }
        ?>
    </div>
</body>
</html>