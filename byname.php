<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bynamestyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <title>Love Calculator by Name</title>
</head>

<body>
    <nav>
        <div class="logo-navigasi">
            <img src="logolovecalc.png">
        </div>
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" class="menu-icon">
            <i class='bx bx-menu'></i>
        </label>
        <ul class="navbar">
            <li><a href="lovecalc.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="byname.php">Love Calc by Name</a></li>
            <li><a href="byzodiac.php">Love Calc by Zodiac</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="form-box">
            <h1>Love Calculator by Name</h1>
            <div class="row">
                <form method="POST">
                    <div class="input-container">
                        <div class="input-group">
                            <label for="nama1">Your Name</label>
                            <input type="text" name="nama1" required>
                        </div>
                        <div class="input-group">
                            <label for="nama2">Your Partner's Name</label>
                            <input type="text" name="nama2" required>
                        </div>
                    </div>
                    <div class="submit">
                        <button type="submit">Calculate</button>
                    </div>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name1 = $_POST['nama1'];
                        $name2 = $_POST['nama2'];

                        $totalPanjang = strlen($name1) + strlen($name2);

                        $compatibility = ($totalPanjang / 2) * 10;
                        if ($compatibility > 100) {
                            $compatibility = 100;
                        }

                        echo "<h2 class='result1'>Love Compatibility Result</h2>";
                        echo "<p class='result2'>$name1 & $name2</p>";
                        echo "<p class='result3'>Your compatibility score is: <strong>$compatibility%</strong></p>";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="logo-footer">
            <img src="logolovecalc.png">
            <p>&copy; 2024 Couple A More</p>
        </div>
        <ul class="footer-nav">
            <li><a href="about.html">About Us</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pp.html">Privacy Policy</a></li>
            <li><a href="supportus.php">Support Us</a></li>
        </ul>
        <div class="icon-footer">
            <a href="www.instagram.com/lindatriwdnt">
                <i class='bx bxl-instagram-alt'></i>
            </a>
            <a href="www.tiktok.com/@elvakalela">
                <i class='bx bxl-tiktok' ></i>
            </a>
            <a href="wa.me/6281235804218">
                <i class='bx bxl-whatsapp'></i>
            </a>
        </div>
    </footer>
</body>
</html>