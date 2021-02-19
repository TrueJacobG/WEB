<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8"/>
    <title> Imieniny </title>
    <link rel="icon" type="image/gif" href="../images/image.png" />
    <meta name="description" content=":working_emoji:"/>
    <meta name="keywords" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <style>
      body{background-image: url('calendar.jpg');
      background-repeat: no-repeat;
      background-size: auto;}

      *{font-family: comic sans ms;
      color: black;}

      a{text-decoration: none;
      color: red;
      font-size: 40px;
      margin-left: 30%;}

      a:hover{background-color: blue;}

      #all{margin-top: 15%;
      text-align: center;}
    </style>
  </head>
  <body>
    <div class="">
      <a href="../">←</a>
      <a href="../list/index.php"> Lista </a>
    </div>
    <div id="all">
    <h1> Dzisiaj jest <?php


          $untranslated_date = date('l');
          translate_date($untranslated_date);

          function translate_date($untranslated_date)
          {
            define('translated_days', array(
               'Monday' => 'Poniedziałek',
               'Tuesday' => 'Wtorek',
               'Wednesday' => 'Środa',
               'Thursday' => 'Czwartek',
               'Friday' => 'Piątek',
               'Saturday' => 'Sobota',
                 'Sunday' => 'Niedziela')
             );

      echo translated_days[$untranslated_date];
      echo ": ";
    }







    echo date('d:m:Y'); ?></h1>
    <h1> więc imieniny mają:
      <?php

      $dzis = date('d:m');
      $pol = mysqli_connect("localhost","id16046045_zdiezert", "H}UF?=]%kG\i4}5^", "id16046045_zdiezert_zdiezert");
      $wys = "SELECT imie FROM imieniny WHERE data = '$dzis'";
      $wyn = mysqli_query($pol, $wys);
      while($row = mysqli_fetch_array($wyn)){
        echo $row['imie'];
      }

    ?>
    </h1>
    </div>

  </body>
</html>
