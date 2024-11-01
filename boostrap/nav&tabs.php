<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/style.css">
    <title>Navigation and Tabs</title>
    <style>
        .nav-tabs {
            margin-bottom: 20px;
        }

        .nav-link.active {
            background-color: #007bff;
            color: white;
        }

        .tab-content {
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MyWebsite</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Tab Navigation -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a id="tab-home" class="nav-link active"  data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-profile" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-messages" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-settings" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="tab-home">
            <h3>Home Content</h3>
            <p>This is the home section.</p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="tab-profile">
            <h3>Profile Content</h3>
            <p>This is the profile section.</p>
        </div>
        <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="tab-messages">
            <h3>Messages Content</h3>
            <p>This is the messages section.</p>
        </div>
        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="tab-settings">
            <h3>Settings Content</h3>
            <p>This is the settings section.</p>
        </div>
    </div>

    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default to home if no page is specified

switch($page) {
    case 'home':
        include 'home.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'services':
        include 'services.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        include '404.php'; // Error page if the page doesn't exist
        break;
}
?>

