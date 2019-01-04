<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Santa's map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
      <?php
        include 'data.php';
        $arr = str_split($str);
        $floor = 0;

        foreach($arr as $inst) {
          if ($inst == '(') {
            $floor++;
          }else {
            $floor--;
          }
        };

        print 'Dear Santa! You should go to the floor ' . $floor . '! You\'re welcome! I hope you will remember this next year! :P';
      ?>
  </body>

</html>