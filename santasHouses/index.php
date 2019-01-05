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
        //House they visited at least once
        $house = array(0, 0);  //begining house
        $houses = array($house);  //the houses what get present
        //Santa's coordinate
        $sX = 0; 
        $sY = 0;
        //RoboSanta's coordinate
        $rX = 0;
        $rY = 0;
        $counter = 0;
        //use the direction as a two-axis coordinate system
        //part one
         foreach( $arr as $coor){
           //get the x coordinate
           if ($coor == '>'){
            $sX++;
           }else if($coor == '<'){
            $sX--; 
           }else if ($coor == '^'){
           //get the y coordinate
             $sY++;
           }else if ($coor == 'v'){
             $sY--;
           }
           $house = array($sX, $sY);  //fix it in an array
           if(!in_array($house, $houses)){  //check that santa was it here
             array_push($houses, $house);   //if not, push it to the main array
           }
          };
          print 'The Santa visited ' . count($houses) . ' houses at least once! <br>';

          //part two
          $house = array(0, 0);  //begining house
          $houses = array($house);  //the houses what get present
          foreach( $arr as $coor){
            if ($counter % 2 == 0){
              //get the x coordinate
              if ($coor == '>'){
              $sX++;
              }else if($coor == '<'){
              $sX--; 
              }else if ($coor == '^'){
              //get the y coordinate
                $sY++;
              }else if ($coor == 'v'){
                $sY--;
              }
              $house = array($sX, $sY);  //fix it in an array
              if(!in_array($house, $houses)){  //check that santa was it here
                array_push($houses, $house);   //if not, push it to the main array
              }
            }else{
              //get the x coordinate
              if ($coor == '>'){
                $rX++;
                }else if($coor == '<'){
                $rX--; 
                }else if ($coor == '^'){
                //get the y coordinate
                  $rY++;
                }else if ($coor == 'v'){
                  $rY--;
                }
                $house = array($rX, $rY);  //fix it in an array
                if(!in_array($house, $houses)){  //check that RoboSanta was it here
                  array_push($houses, $house);   //if not, push it to the main array
                }
            }
            $counter++;
           };
           print 'In the next year the Santa and the RoboSanta visited ' . count($houses) . ' houses at least once!';
      ?>
  </body>

</html>