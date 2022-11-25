<?php 
if(isset($_GET['text']) && $_GET['text'] != ''){
    $text = $_GET['text'];
} else {
    $text = 'empty';
};

if(isset($_GET['badword']) && $_GET['badword'] != ''){
    $badword = $_GET['badword'];
} else {
    $badword = 'empty';
};

// $text = $_GET['text'];
// $badword = $_GET['badword'];

$textCensored = str_replace($badword, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- styles  -->
     <link rel="stylesheet" href="main.scss">
    <title>Bad Words</title>
</head>
<body>
    <div class="response">
        <p><?php echo "Text: $text" ?></p>
        <div>Pharagraph lenght: <?php echo strlen($text) ?> </div>

        <p><?php echo "Text: $textCensored" ?></p>
        <div>Pharagraph lenght: <?php echo strlen($textCensored) ?> </div>
    </div>  
</body>
</html>