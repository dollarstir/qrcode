<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="po.css">
</head>
<body>
   <!-- <script>window.print()</script> -->
    <?php
           include 'QRgen/qrlib.php';
          
        //    QRcode::svg('arguments');
           $back_color = 0x0f1f1f1;
           $fore_color = 0x0000000;
           $cntent = 'tel:*134*12353664885681#';
           QRcode::png($cntent, 'files/file.png', 'H', 2, 2,false, $back_color, $fore_color);
           echo '<div id="frame">';
           echo '<center id="sc">Scratch Here </center>';
           echo '<div id="cov">';
           echo '</div>';
           echo '<img id="q" src="files/file.png">';
           echo '<div id="num">12353664885681</div>';
           echo '<ul>
                   <li>Gently scratch the designated scratch-off area to reveal your 
                   card number and choose to scan or type</li>
                </ul>';
           echo '</div>';


    ?>
</body>
</html>