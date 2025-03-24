<?php include __DIR__ . '/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invest in Oils & Perfumes Startups</title>
    <style>
        /* General Styles */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; line-height: 1.6; background-color: #f4f4f4; }
        .container { width: 80%; margin: 0 auto; }
        h1, h2 { color: #2C3E50; }
        a { text-decoration: none; color: #fff; }
        ul { list-style-type: none; }

        /* Header */
        header { background-color: #2C3E50; color: #fff; padding: 20px 0; }
        header h1 { font-size: 2em; }
        header nav ul { display: flex; justify-content: flex-end; }
        header nav ul li { margin-left: 20px; }
        header nav ul li a { color: #fff; font-size: 1.1em; }

        /* Hero Section */
        .hero { background-color: #2980B9; color: #fff; padding: 60px 20px; text-align: center; }
        .hero h2 { font-size: 2.5em; margin-bottom: 20px; }
        .hero p { font-size: 1.2em; margin-bottom: 30px; }
        .cta-button { background-color: #E74C3C; padding: 15px 30px; font-size: 1.2em; border-radius: 5px; transition: background-color 0.3s; }
        .cta-button:hover { background-color: #C0392B; }

        /* About Section */
        .about, .investors, .contact { padding: 40px 20px; text-align: center; }
        .about { background-color: #eaf4f7; }
        .investors { background-color: #ffffff; }
        .contact { background-color: #ECF0F1; }

        /* Footer */
        footer { background-color: #2C3E50; color: #fff; padding: 20px; text-align: center; }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header>
        <div class="container">
            <h1>Oils & Perfumes Startups</h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#investors">For Investors</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Unlock Promising Investment Opportunities</h2>
            <p>Discover startups in the oils and perfumes industry that are ready to grow with your support.</p>
            <form id="investorForm" method="post" action="">
                <input type="hidden" name="action" value="become_investor">
                <button type="submit" class="cta-button">Become an Investor</button>
            </form>
            <div id="investorMessage" style="display:none; color: green; margin-top: 20px;">You've successfully become an investor!</div>

            <script>
                document.getElementById('investorForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);

                    fetch('', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('investorMessage').style.display = 'block';
                        setTimeout(function() {
                            window.location.href = 'dashboard.php';
                        }, 2000); // Redirect after 2 seconds
                    })
                    .catch(error => console.error('Error:', error));
                });
            </script>

            <script>
                document.getElementById('investorForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);

                    fetch('', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        window.location.href = 'dashboard.php';
                    })
                    .catch(error => console.error('Error:', error));
                });
            </script>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'become_investor') {
                $sql = "INSERT INTO investors (status) VALUES ('active')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script>window.location.href = 'dashboard.php';</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About the Problem</h2>
            <p>Many promising oils and perfumes startups face the challenge of raising awareness and attracting investors. Investors, on the other hand, may be unaware of such opportunities. This website serves as a bridge between these two groups, connecting investors with emerging companies in the fragrance industry.</p>
        </div>
    </section>

    <!-- Investors Section -->
    <section id="investors" class="investors">
        <div class="container">
            <h2>For Investors</h2>
            <p>We invite you to explore investment opportunities in the oils and perfumes industry. With an increasing demand for natural, luxurious fragrances, now is the time to invest in these growing startups.</p>
            
            <!-- Dynamic Content: Fetch Startups -->
            <?php
            $sql = "SELECT name, description, contact_email FROM startups";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li><strong>" . $row["name"] . "</strong>: " . $row["description"] . 
                         " (<a href='mailto:" . $row["contact_email"] . "'>Contact</a>)</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No startups available at the moment.</p>";
            }
            ?>

            <a href="mailto:invest@oilsperfume.com" class="cta-button">Contact Us for Opportunities</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you are a startup looking for investment, or an investor looking for new opportunities, feel free to reach out to us. Together, we can build a thriving industry.</p>
            <p>Email: <a href="mailto:contact@oilsperfume.com">contact@oilsperfume.com</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Oils & Perfumes Startups. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

<?php $conn->close(); ?>
