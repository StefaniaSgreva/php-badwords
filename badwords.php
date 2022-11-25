<?php 

$text = $_GET['text'];
$badword = $_GET['badword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p><?php echo "Text: $text" ?></p>
    <div><?php echo "word: $badword" ?></div>
    
</body>
</html>