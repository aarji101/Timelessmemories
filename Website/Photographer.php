<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch photographers from the database
$sql = "SELECT * FROM photographers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographers List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2d3748;
            color: #e2e8f0;
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(90deg, #1a202c, #2d3748);
            padding: 15px 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        h1 {
            margin: 0;
            font-size: 24px;
            color: white;
        }
        h1 span {
            color: #4299e1;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
        }
        ul li {
            display: inline;
        }
        ul li a {
            text-decoration: none;
            color: #e2e8f0;
            font-weight: bold;
            transition: color 0.3s;
        }
        ul li a:hover {
            color: #4299e1;
        }
        .photographer-card {
            display: inline-block;
            width: 250px;
            margin: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            background: white;
            color: black;
        }
        img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        .info {
            padding: 10px;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        footer {
            background: #1a202c;
            color: #e2e8f0;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">
                Timeless
                <span class="text-blue-600">Memories</span>
            </h1>
            <div class="md:hidden">
                <button class="text-white focus:outline-none" id="menu-button">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <ul class="hidden md:flex space-x-9" id="menu">
                <li><a class="text-gray-300 hover:text-indigo-600" href="index.php">Portfolio</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="gallery.php">Gallery</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="experience.php">Experience</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="contact.php">Contact Us</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="Photographer.php">Photographer</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="login.php">LOGIN</a></li>
            </ul>
        </div>
    </header>
  
    <h2>Photographers</h2>

    <div class="gallery">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='photographer-card'>";
                echo "<img src='uploads/" . $row["photo"] . "' alt='Photographer'>";
                echo "<div class='info'>";
                echo "<h3>" . $row["name"] . "</h3>";
                echo "<p>Email: " . $row["email"] . "</p>";
                echo "<p>Speciality: " . $row["speciality"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No photographers found.</p>";
        }
        $conn->close();
        ?>
    </div>

    <footer>
        <p>© 2025 Timeless Memories. All Rights Reserved.</p>
    </footer>
</body>
</html>
