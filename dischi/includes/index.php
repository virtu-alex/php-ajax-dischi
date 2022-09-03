<?php include '/includes/discs.php'

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($discs)) : ?>
        <?php foreach ($discs as $disc) : ?>
            <div>
                <img src="<?= $disc['poster'] ?>" <?= $disc['title'] ?> <small><?= $disc['year'] ?></small>
                <strong><?= $disc['author'] ?></strong>
            </div>
        <?php endforeach; ?>

    <?php else : ?>
        <h1>Spiacenti, si e' verificato un errore</h1>
    <?php endif; ?>




</body>

</html>