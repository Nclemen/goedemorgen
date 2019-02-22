<?php
date_default_timezone_set("Europe/Amsterdam");

function timeOfDay($time)
{
  if ($time < "6") {
    return "nacht";
  } elseif ($time < "12") {
    return "morgen";
  } elseif ($time < "18") {
    return "middag";
  } elseif ($time < "24") {
    return "avond";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="<?php echo timeOfDay(date("H")); ?>">

    <h1 id="groet">Goede <?php echo timeOfDay(date("H")); ?>!</h1>
    <h2 id="tijd">Het is nu <?php echo date("H:i"); ?></h2>
   <style>
     .nacht{
       background-image: url(images/night.png);
       text-align: center;
       margin-top: 280px;
     }

     .morgen{
       background-image: url(images/morning.png);
       text-align: center;
       margin-top: 280px;
     }

     .middag{
       background-image: url(images/afternoon.png);
       text-align: center;
       margin-top: 280px;
     }

     .avond{
       background-image: url(images/evening.png);
       text-align: center;
       margin-top: 280px;
     }
   </style>
</body>
</html>
