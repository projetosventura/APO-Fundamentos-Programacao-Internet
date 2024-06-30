// generate_resume.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $experiences = $_POST['experience'] ?? [];

    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículo de <?= htmlspecialchars($name) ?></title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Currículo de <?= htmlspecialchars($name) ?></h1>
            <p><strong>Nome:</strong> <?= htmlspecialchars($name) ?></p>
            <p><strong>Data de Nascimento:</strong> <?= htmlspecialchars($dob) ?></p>
            <p><strong>Idade:</strong> <?= htmlspecialchars($age) ?></p>
            <h2>Experiências Profissionais</h2>
            <ul>
                <?php foreach ($experiences as $experience): ?>
                    <li><?= htmlspecialchars($experience) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <script>
            window.print();
        </script>
    </body>
    </html>
    <?php
    $html = ob_get_clean();
    echo $html;
}
?>
