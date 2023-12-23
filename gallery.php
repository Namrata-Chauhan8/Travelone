<!DOCTYPE html>
<html>
<head>
    <title>Travel Image Gallery</title>
    <style>
        .card {
            border: 2px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 350px;
            height: auto;
            display: inline-block;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.3s;
            border-radius: 30px;
            font-weight: bold;
            font-size: large;
            text-align: center;
        }

        
        .card img {
            max-width: 100%;
            height: 300px;
        }

        .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
    }

    .shadow-text {
    font-size: 36px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* horizontal offset, vertical offset, blur radius, color */
}

@media (max-width: 768px) {
  .card {
    max-width: 100%;
  }
}

</style>
</head>
<body>
    <section>
        <?php include 'navbar.php';?>
    </section>

    <section>
        <h1 class="shadow-text"><Center>Gallery</Center></h1>
    <?php
    $images = array(
        array(
            'url' => 'jagannathpuri.jpg',
            'description' => 'Jagannathpuri(Odisha)'
        ),
        array(
            'url' => 'jagannathpuri.jpg',
            'description' => 'Ganga Sagar(Kolkata)'
        ),
        array(
            'url' => 'jagannathpuri.jpg',
            'description' => 'Gokul-Mathura-Vrindavan'
        ),
        array(
            'url' => 'jagannathpuri.jpg',
            'description' => 'Haridhwar(Uttranchal)'
        )
    
    );
    
    foreach ($images as $image) {
        echo '<div class="card">';
        echo '<img src="' . $image['url'] . '" alt="' . $image['description'] . '">';
        echo '<p>' . $image['description'] . '</p>';
        echo '</div>';
    }
    ?>
    </section>
</body>
</html>
