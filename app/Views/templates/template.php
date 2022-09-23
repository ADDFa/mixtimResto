<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- // TODO: Custom style -->
    <?php if ($style) : ?>
        <?php foreach ($style as $s) : ?>
            <link rel="stylesheet" href="<?= '/style/' . $s . '.css' ?>">
        <?php endforeach ?>
    <?php endif ?>
</head>

<body>
    <!-- // TODO: Header dummy -->
    <header>
        <a href="/">Home</a>
        <a href="/menu">Menu</a>
        <a href="/about">About</a>
    </header>

    <?= $this->renderSection('content') ?>

    <!-- // TODO: My script  -->
    <script src="/script/template.js"></script>

    <?php if ($script) : ?>
        <?php foreach ($script as  $sc) : ?>
            <script src="<?= '/script/' . $sc . '.js' ?>"></script>
        <?php endforeach ?>
    <?php endif ?>
</body>

</html>