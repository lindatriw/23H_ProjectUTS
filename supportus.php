<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="supportus.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <title>Support Us</title>
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
        <div class="header">
            <h1>Support Us</h1>
        </div>
        <div class="subtitle">
            <p>Support us by providing suggestions to make our website better in the future.</p>
        </div>
        <form action="" method="POST">
            <div class="input-container">
                <div class="input-group">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" required>
                </div>
                <div class="input-group">
                    <label for="suggest">Your Suggestion</label>
                    <textarea name="suggest" required></textarea>
                </div>
                <div class="button-suggest">
                    <button type="submit">Submit</button>
                </div>
            </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $suggest = $_POST['suggest'];

            echo "<p class='result'>Thank you $nama for your suggestion! Your feedback has been submitted.</p>";
        }
        ?>
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