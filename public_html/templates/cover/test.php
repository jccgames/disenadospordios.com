<?php


$cars = array
  (
  array('model'=>"Volvo",'use'=>22 ,'new'=>18),
  array('model'=>"BMW",'use'=>15,'new'=>13),
  array('model'=>"Saab",'use'=>5,'new'=>2),
  array('model'=>"Land Rover",'use'=>17,'new'=>15)
  );

//$newdata = array('rank' => 100);
 $cars[0]['rank']=100;



//array_push($cars[0], $newdata);

echo json_encode($cars);


?>