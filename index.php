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
    <section id="badwords">
        <h1>Detecting Unwanted Words</h1>
        <form action="badwords.php" method="GET">
            
            <textarea type="text" name="text" class="textbox"></textarea>
            <label class="form-label">
                Text area
            </label>

            <input type="text" name="badword" placeholder="bad word">
            
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>