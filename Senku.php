<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        /* CSS styles remain the same */
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1 class="animated fadeInUp">My Portfolio</h1>
        <nav class="animated fadeInUp">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Portfolio</a>
            <a href="#">Contact</a>
        </nav>
    </div>
</header>

<div class="container">
    <?php
    // Example dynamic content generation
    $projects = [
        [
            'title' => 'Project 1',
            'description' => 'Description of Project 1',
            'image' => 'https://via.placeholder.com/400',
        ],
        [
            'title' => 'Project 2',
            'description' => 'Description of Project 2',
            'image' => 'https://via.placeholder.com/400',
        ]
    ];

    foreach ($projects as $project) {
        echo '<div class="portfolio-item animated fadeInUp">';
        echo '<h2>' . $project['title'] . '</h2>';
        echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
        echo '<p>' . $project['description'] . '</p>';
        echo '</div>';
    }
    ?>
</div>

<footer>
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> My Portfolio</p>
    </div>
</footer>

</body>
</html>
