<?php
// Fetching name and email from the form
$name = isset($_POST['name']) ? $_POST['name'] : 'Guest';
$email = isset($_POST['email']) ? $_POST['email'] : 'example@example.com';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
        }

        /* Header Styling */
        header {
            background-color: #0077b6;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .menu a {
            margin-right: 20px;
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .menu a:hover {
            color: #ffdd00;
        }

        .cart-icon img {
            width: 40px;
            transition: transform 0.3s ease;
        }

        .cart-icon img:hover {
            transform: scale(1.1);
        }

        /* Welcome Bar */
        .welcome-bar {
            background-color: #023e8a;
            color: white;
            padding: 10px 30px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .welcome-bar p {
            margin: 0;
            font-size: 16px;
        }

        /* Courses Section */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 40px 20px;
        }

        .course-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .course-item h3 {
            color: #0077b6;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .course-item p {
            color: #333;
            margin-bottom: 15px;
            font-size: 16px;
        }

        /* Date/Time */
        #datetime {
            font-size: 14px;
            color: #eaeaea;
        }
    </style>
    <script>
        // Live Date and Time
        function updateDateTime() {
            const now = new Date();
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            };
            document.getElementById('datetime').innerHTML = now.toLocaleDateString('en-GB', options);
        }
        setInterval(updateDateTime, 1000);
    </script>
</head>

<body onload="updateDateTime()">
    <!-- Header Section -->
    <header>
        <div class="menu">
            <a href="#">HOME</a>
            <a href="#">COURSES</a>
            <a href="#">AFFILIATIONS</a>
            <a href="#">HOW TO JOIN</a>
            <a href="#">TESTIMONIALS</a>
        </div>
        <div class="cart-icon">
            <img src="shopping-cart.png" alt="Cart Icon">
        </div>
    </header>

    <!-- Welcome Bar -->
    <div class="welcome-bar">
        <p>Welcome <?php echo $name; ?> (<?php echo $email; ?>)</p>
        <p id="datetime"></p>
    </div>

    <!-- Courses Grid -->
    <section class="courses-grid">
        <?php
        $courses = [
            ["code" => "EC0001", "title" => "Quantitative Analysis in Business", "hours" => "45 Hours", "price" => "35,000"],
            ["code" => "EC0002", "title" => "Information Technology in Retailing", "hours" => "45 Hours", "price" => "35,000"],
            ["code" => "EC0003", "title" => "Brand Innovation & Development", "hours" => "30 Hours", "price" => "25,000"],
            ["code" => "EC0004", "title" => "Packaging & Logistic Management", "hours" => "30 Hours", "price" => "25,000"],
            ["code" => "EC0005", "title" => "Service Marketing", "hours" => "40 Hours", "price" => "30,000"],
            ["code" => "EC0006", "title" => "E-Commerce", "hours" => "45 Hours", "price" => "35,000"]
        ];

        foreach ($courses as $course) {
            echo '<div class="course-item">';
            echo '<h3>' . $course["code"] . '</h3>';
            echo '<p>' . $course["title"] . ' (' . $course["hours"] . ')</p>';
            echo '<p>Rs. ' . $course["price"] . '/-</p>';
            echo '</div>';
        }
        ?>
    </section>
</body>

</html>