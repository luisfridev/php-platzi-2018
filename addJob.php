<?php
use App\Models\Job;

if (!empty($_POST)) {
    $job = new Job;
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}

?>

<html>
    <head>
        <title>Add Job</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Add Job</h1>
        <form action="addJob.php" method="post">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>