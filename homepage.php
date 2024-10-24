<?php
// Start the session
session_start();

// Check if the user is logged in by checking if 'user_id' is set in the session
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboPay - Home</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4a90e2;
            --secondary-color: #f5a623;
            --background-color: #f0f4f8;
            --text-color: #333;
            --button-hover-color: #3a7bc8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            text-align: center;
            margin-bottom: 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 4rem;
            font-weight: 700;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeInDown 1s ease-out;
        }

        .logout-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
        }

        .button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 500;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .button:hover {
            background-color: var(--button-hover-color);
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .button-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #666;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .button-container {
                flex-direction: column;
                align-items: center;
            }

            .button {
                width: 80%;
                max-width: 300px;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1 class="logo">RoboPay</h1>
            <!-- Logout Button -->
            <form method="POST" action="logout.php">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </header>
        <main>
            <div class="button-container">
                <a href="http://localhost/Capstone Project/form.php" class="button apply-now">
                    <span class="button-icon">📝</span>
                    Apply Now!
                </a>
                <a href="ApplicationList.html" class="button application-list">
                    <span class="button-icon">📋</span>
                    Application List
                </a>
                <a href="PendingList.html" class="button approval-requests">
                    <span class="button-icon">✅</span>
                    Approval Requests
                </a>
            </div>
        </main>
        <footer>
            <p>&copy; 2024 RoboPay. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>