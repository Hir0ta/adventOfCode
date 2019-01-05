<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Santa's coordinate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
      <?php
        ERROR_REPORTING (E_PARSE | E_ERROR);
        include 'data.php';

        $arr = str_split($str);
        $house = array(0, 0);  //begining house
        $houses = array($house);  //the houses what santa visited
        $x = 0;
        $y = 0;
        //use the direction as a two-axis coordinate system
         foreach( $arr as $coor){
           //get the x coordinate
           if ($coor == '>'){
            $x++;
           }else if($coor == '<'){
            $x--; 
           }else if ($coor == '^'){
           //get the y coordinate
             $y++;
           }else if ($coor == 'v'){
             $y--;
           }
           $house = array($x, $y);  //fix it in an array
           if(!in_array($house, $houses)){  //check that santa was it here
             array_push($houses, $house);   //if not, push it to the main array
           }
          };
          print 'The Santa visited ' . count($houses) . ' houses at least once!';
      ?>
  </body>

</html>