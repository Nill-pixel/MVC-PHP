<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>Title:
        <?php echo $title ?>
    </h1>

    <ul>
        <?php
        foreach ($users as $item) {
            ?>
            <li>
                <?php echo $item['Email'] ?>
            </li>
            <li>
                <?php echo $item['Nome'] ?>
            </li>
            <li>
                <?php echo $item['Password'] ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>