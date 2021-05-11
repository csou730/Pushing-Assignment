<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEEK 4 ASSIGNMENET </title>


</head>
<body>

<?php

 class Sale{
   
    public $name;
 
 function set_name($name)

    {
         $this->name=$name;
       
    }
 function get_name()
    {
        return $this->name;
    }
 
}
// new show object 
 $aba = new Sale();
 $wing = new Sale();
 $amount = new Sale();
 $aba-> set_name("<br> <br> The number of sale pay by ABA method is: " );
 $wing-> set_name('<br> <br> The number of sale pay by Wing and PiPay method is: <br>');
 $amount->set_name('<br> Display from Big amount of total <br>');
 echo$aba->get_name();
 echo$wing->get_name();
 echo$amount->get_name();

 $total = array("Item1"=>5,"Item2"=>6,"Item3"=>4,"Item4"=>5,"Item5"=>7,"Item6"=>10,"Item7"=>15,"Item8"=>2);
$payment = array
(
array("Item1",5,1,"ABA",5),
array("Item2",3,2,"Wing",6),
array("Item3",4,1,"ABA",4),
array("Item4",5,1,"ABA",5),
array("Item5",6,1,"PiPay",7),
array("Item6",10,1,"ABA",10),
array("Item7",15,1,"Wing",15),
array("Item8",2,1,"Wing",2),
);
rsort($total);
 $arrlength = count($total);
 for($x = 0; $x < $arrlength; $x++) 
        {
            // echo " <br> "  .$total[$x];
             //for ($row = 0; $row < 1; $row++) 
            echo "<br> Item" .":".$total[$x];
        }
     echo" <br> <b>Items | Price | Quantity | Method |Total </b>";

for ($row = 0; $row < 8; $row++) 
    {
        echo " <br><br>";
   for ($col = 0; $col < 5; $col++) 
    {
        echo $payment[$row][$col] ."<b>  / </b>";
    }
    
}
  

 ?>

</body>
</html>

