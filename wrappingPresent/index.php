<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Wrapping paper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
      <?php
        ERROR_REPORTING (E_PARSE | E_ERROR);

        include 'data.php';
        
        $arr = explode("\n", $str); // make an array to handle this bunch of data more easier
        $wrap = 0;
        $long = 0;
        
        for ($i = 0; $i <= count($arr); $i++){
          //part one
          preg_match_all('!\d+!', $arr[$i], $sizes); //get the values of the sides
          $w = $sizes[0][0];
          $l = $sizes[0][1];
          $h = $sizes[0][2];
          $sides = array(($l * $w), ($w * $h), ($h * $l));
          $wrap += 2 * $sides[0]+ 2 * $sides[1] + 2 * $sides[2] + min($sides);
          //part two
          asort($sizes[0], SORT_NUMERIC); // obtain the two smallest data
          $shortest1 = array_slice($sizes[0], 0, 1); // smallest
          $shortest2 = array_slice($sizes[0], 1, 1); // second smallest
          $long += $shortest1[0] * 2 + $shortest2[0] * 2 + $w * $l * $h;
        };
        print "The elves needs " . $wrap . " square feet of wraping paper, and " . $long . " feet of ribbon!";
      ?>
  </body>

</html>