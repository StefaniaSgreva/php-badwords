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
    <div><?php echo "Word: $badword" ?></div>
    
</body>
</html>