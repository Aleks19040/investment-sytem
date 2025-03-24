<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
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
    
    section .dashboard form input,
    section .dashboard form textarea {
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
    
    #investment-opportunities ul li button {
        padding: 8px 16px;
        background-color: #ffc107;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    #investment-opportunities ul li button:hover {
        background-color: #e0a800;
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
            <p>Company Dashboard</p>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#company-profile">Company Profile</a></li>
                <li><a href="#investment-opportunities">Investment Opportunities</a></li>
            </ul>
        </nav>
    </header>

    <section id="company-profile">
        <h2>Company Profile</h2>
        <div class="dashboard">
            <h3>Update Your Company Information</h3>
            <form>
                <label for="company-name">Company Name:</label>
                <input type="text" id="company-name" name="company-name" placeholder="Enter company name">
                
                <label for="company-description">Company Description:</label>
                <textarea id="company-description" name="company-description" placeholder="Describe your company and its mission..."></textarea>
                
                <label for="investment-required">Investment Needed:</label>
                <input type="number" id="investment-required" name="investment-required" placeholder="Enter required investment">
                
                <label for="company-location">Location:</label>
                <input type="text" id="company-location" name="company-location" placeholder="Enter your company location">
                
                <button type="submit">Update Profile</button>
            </form>
        </div>
    </section>

    <section id="investment-opportunities">
        <h2>Your Investment Opportunities</h2>
        <div class="dashboard">
            <h3>List Your Opportunities</h3>
            <form>
                <label for="opportunity-name">Opportunity Title:</label>
                <input type="text" id="opportunity-name" name="opportunity-name" placeholder="Enter opportunity title">
                
                <label for="opportunity-description">Opportunity Description:</label>
                <textarea id="opportunity-description" name="opportunity-description" placeholder="Describe the investment opportunity..."></textarea>
                
                <label for="required-investment">Required Investment Amount:</label>
                <input type="number" id="required-investment" name="required-investment" placeholder="Enter required investment amount">
                
                <label for="opportunity-duration">Investment Duration (Months):</label>
                <input type="number" id="opportunity-duration" name="opportunity-duration" placeholder="Enter investment duration">
                
                <button type="submit">Post Opportunity</button>
            </form>
        </div>

        <h3>Active Opportunities</h3>
        <ul>
            <li>
                <h4>Luxury Perfume Brand Investment</h4>
                <p>Description: Seeking funds to expand our luxury perfume brand worldwide.</p>
                <p>Required Investment: $500,000</p>
                <button>Edit Opportunity</button>
                <button>Remove Opportunity</button>
            </li>
            <li>
                <h4>Essential Oils Expansion</h4>
                <p>Description: Expanding production of organic essential oils for international markets.</p>
                <p>Required Investment: $300,000</p>
                <button>Edit Opportunity</button>
                <button>Remove Opportunity</button>
            </li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2025 InvestOil. All rights reserved.</p>
    </footer>
</body>
</html>
