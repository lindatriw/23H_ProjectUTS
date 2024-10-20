<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="byzodiacstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <title>Love Calculator by Zodiac</title>
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
            <h1>Love Calculator by Zodiac</h1>
            <form method="POST">
                <div class="grid-container">
                    <div class="input-group">
                        <label for="yourname">Your Name</label>
                        <input type="text" name="yourname" required>
                    </div>

                    <div class="input-group">
                        <label for="partnername">Your Partner's Name</label>
                        <input type="text" name="partnername" required>
                    </div>

                    <div class="input-group">
                        <label for="yourzodiac">Your Zodiac</label>
                        <select name="yourzodiac" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Aries">Aries</option>
                            <option value="Taurus">Taurus</option>
                            <option value="Gemini">Gemini</option>
                            <option value="Cancer">Cancer</option>
                            <option value="Leo">Leo</option>
                            <option value="Virgo">Virgo</option>
                            <option value="Libra">Libra</option>
                            <option value="Scorpio">Scorpio</option>
                            <option value="Sagittarius">Sagittarius</option>
                            <option value="Capricorn">Capricorn</option>
                            <option value="Aquarius">Aquarius</option>
                            <option value="Pisces">Pisces</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="partnerzodiac">Your Partner's Zodiac</label>
                        <select name="partnerzodiac" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Aries">Aries</option>
                            <option value="Taurus">Taurus</option>
                            <option value="Gemini">Gemini</option>
                            <option value="Cancer">Cancer</option>
                            <option value="Leo">Leo</option>
                            <option value="Virgo">Virgo</option>
                            <option value="Libra">Libra</option>
                            <option value="Scorpio">Scorpio</option>
                            <option value="Sagittarius">Sagittarius</option>
                            <option value="Capricorn">Capricorn</option>
                            <option value="Aquarius">Aquarius</option>
                            <option value="Pisces">Pisces</option>
                        </select>
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit">Calculate</button>
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $yourname = $_POST['yourname'];
                    $partnername = $_POST['partnername'];
                    $yourzodiac = $_POST['yourzodiac'];
                    $partnerzodiac = $_POST['partnerzodiac'];

                    function calculateLovePercentage($yourzodiac, $partnerzodiac) {
                        return rand(1, 100);
                    }

                    $lovePercentage = calculateLovePercentage($yourzodiac, $partnerzodiac);

                    echo "<h2 class='result1'>Love Compatibility Result</h2>";
                    echo "<p class='result2'>$yourname (Zodiac: $yourzodiac) & $partnername (Zodiac: $partnerzodiac)</p>";
                    echo "<p class='result3'>Your compatibility score is: <strong>$lovePercentage%</strong></p>";
                }
                ?>
            </form>
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