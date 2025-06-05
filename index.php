<?php include "process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPORTER</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="box">
        <div class="exporterTitle"><h2>EXPORTER</h2></div>
        <div class="form">
            <form action="" method="post">
                <input type="text" name="title" id="title" placeholder="title">
                <textarea name="content" id="" placeholder="content"></textarea>
                <select name="format" id="">
                    <option value="text">text File</option>
                    <option value="pdf">pdf File</option>
                    <option value="json">json File</option>
                    <input type="submit" value="Export to file" name="exporter" id="submit">
                 </select>
             </form>
        </div>
    </div>
</body>
</html>