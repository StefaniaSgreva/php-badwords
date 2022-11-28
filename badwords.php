<?php
// $text = $_GET['text'];
// $badword = $_GET['badword'];

$error = null;
// $text = $GET['text'] ?? 'empty'; //equivalente di isset
// $text = $GET['badword'] ?? 'empty';

if ((isset($_GET['text']) && !empty($_GET['text'])) && (isset($_GET['badword']) && !empty($_GET['badword']))) {
    $text = trim($_GET['text']);
    $badword = trim($_GET['badword']);
    $textCensored = str_replace($badword, '***', $text);

} else {
    $error = 'Error: empty input';
}
;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles  -->
    <link rel="stylesheet" href="main.css">
    <title>Bad Words</title>
</head>

<body>
    <?php if ($error) {

        echo "<h1>$error<h1/>";

    } else { ?>
    <div class="response">
        <p>
            <?php echo "Text: $text" ?>
        </p>
        <div>Pharagraph lenght:
            <?php echo strlen($text) ?>
        </div>

        <p>
            <?php echo "Text: $textCensored" ?>
        </p>
        <div>Pharagraph lenght:
            <?php echo strlen($textCensored) ?>
        </div>
    </div>
    <?php } ?>

</body>

</html>