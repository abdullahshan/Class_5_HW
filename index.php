<?php 

$str = "
<h1>Class_5 HW</h1>
";
echo $str;
echo htmlentities($str);
echo "<br/>";


/** */


$link = htmlentities("

<a href='facebook'><h1>facebook</h1></a>

");
echo $link;
$decolink = html_entity_decode($link);
echo "<h6>$decolink</h6>";


/** */


$name = "apple";
echo str_repeat($name, 8);
echo "<br/>";


/** */


$email = "abdullah@gamil.com";

if(!empty($email)){

    if(is_numeric($email)){
        echo "Thank you $email";
    }else{
        echo "No thanks";
    }
}else{
    echo "The email field is emty";
}
echo "<br/>";



/** */


//$num = '';
//$num = 12;
$num = null;

if(isset($num)){
   echo "yes";
}else{
    echo "The name field is null";
}
echo "<br/>";


/** */


$hobby  = "I like play football";

$arr = (explode(' ', $hobby));
var_dump($arr);echo "<br/>";
echo $arr[1];



/** */



$image = "ab.png.jpg";

echo "<pre>";
var_dump(explode('.',$image));
echo "</pre>";

$arry = explode('.',$image);
$lstex =  end($arry);

if($lstex=='png'){

    echo "ok";
}else{

    echo "Please select anohter image";
}
echo "<br/>";




/** */



$array = [

    "I",
    "like",
    "play",
    "football",
];

echo implode(' ', $array);



//** */




$user_email = "abdullah.cit.bd.@gmail.com";

$user_arry = explode('.', $user_email);

var_dump(in_array('cit', $user_arry)); echo "<br/>";

if(in_array('cit',$user_arry)){
    echo "Your email is $user_email";
}else{
    echo "Not find";
}
echo "<br/>";


//** */


$user = [
    "text@gmail.com"
];

$user2 = [];

echo count($user2);
echo "<br/>";



//** */




$userarry = [

   [
    "name" => "abdullah",
    "age"  => "22",
   ],
   [
    "name" => "abdullah",
    "age"  => "22",
   ],
   [
    "name" => "abdullah",
    "age"  => "22",
   ],
  
   
];


if(count($userarry) > 2){

    echo "Alredy have this name";
}else{
    echo "ok";
}




///** */





$array1 = [

     "name" => "abdullah",
     "age"  => "22",
 ];
 
$array2 = [

     "name" => "abdullah",
     "age"  => 21,
 ];

echo "<br/>";
var_dump(array_diff($array1,$array2));




///** */



$name = [
    "name" => "Abdullah",
    "age"  => "22",
];

array_unshift($name, "address => cox's bazar");
//array_shift($name);
echo "<pre>";
var_dump($name);
echo "</pre>";




//** */




$name = [
    "name" => "Abdullah",
    "age"  => "22",
];

array_push($name, "address => cox's bazar");
array_pop($name);
echo "<pre>";
var_dump($name);
echo "</pre>";







