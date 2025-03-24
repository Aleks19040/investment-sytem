<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        header .logo h1 {
            margin: 0;
            font-size: 2.5em;
        }
        
        header nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        header nav ul li {
            display: inline;
            margin: 0 10px;
        }
        
        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        
        section {
            padding: 30px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        section h2 {
            margin-bottom: 20px;
            font-size: 2em;
        }
        
        section .dashboard {
            padding: 20px;
            border-radius: 8px;
            background-color: #f1f1f1;
        }
        
        section .dashboard form label {
            display: block;
            margin-bottom: 8px;
        }
        
        section .dashboard form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        
        section .dashboard form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        section .dashboard form button:hover {
            background-color: #0056b3;
        }
        
        #investment-opportunities ul {
            list-style-type: none;
        }
        
        #investment-opportunities ul li {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        #investment-opportunities ul li h4 {
            margin-bottom: 10px;
        }
        
        #investment-opportunities ul li button.invest-btn {
            padding: 8px 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        #investment-opportunities ul li button.invest-btn:hover {
            background-color: #218838;
        }
        
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            margin-top: 40px;
        }
        
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>InvestOil</h1>
            <p>Investor Dashboard</p>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#investment-opportunities">Investment Opportunities</a></li>
                <li><a href="#filter-options">Filters</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Welcome to Your Investor Dashboard</h2>
        <p>Find the perfect investment opportunities in the perfume and oil industries.</p>
    </section>

    <section id="filter-options">
        <h2>Filter Opportunities</h2>
        <div class="filters">
            <label for="investment-range">Investment Range ($):</label>
            <input type="range" id="investment-range" name="investment-range" min="10000" max="1000000" step="10000">
            <span id="range-value">$10000</span>

            <label for="company-type">Company Type:</label>
            <select id="company-type">
                <option value="perfume">Perfume</option>
                <option value="oils">Essential Oils</option>
                <option value="both">Both</option>
            </select>
        </div>
    </section>

    <section id="investment-opportunities">
        <h2>Investment Opportunities</h2>
        <div class="opportunity-list">
            <div class="opportunity">
                <h3>Luxury Perfume Expansion</h3>
                <p>Description: A high-end perfume brand seeking funding to expand in new markets.</p>
                <p><strong>Required Investment:</strong> $500,000</p>
                <button>Invest Now</button>
            </div>

            <div class="opportunity">
                <h3>Organic Essential Oils</h3>
                <p>Description: A sustainable oils company looking to grow its organic product line.</p>
                <p><strong>Required Investment:</strong> $300,000</p>
                <button>Invest Now</button>
            </div>

            <div class="opportunity">
                <h3>Perfume & Oil Fusion</h3>
                <p>Description: A startup combining perfumes and essential oils for holistic wellness.</p>
                <p><strong>Required Investment:</strong> $250,000</p>
                <button>Invest Now</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 InvestOil. All rights reserved.</p>
    </footer>
</body>
</html>