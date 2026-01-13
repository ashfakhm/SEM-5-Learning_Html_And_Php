<form method="POST">
    <label for="num">Enter A Number</label>
    <br>
    <input type="Number" name="number" id="num" required>
    <br>
    <input type="Submit" value="Check">
    <br>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST['number'];
    function IsArmstrong($number){
        $sum=0;
        $numDigits=strlen((string)$number);
        $temp=$number;
        
        while($temp>0){
            $digit=$temp%10;
            $sum+=pow($digit,$numDigits);
            $temp=(int)($temp/10);


        }
        return $sum==$number;
    }
    if(IsArmstrong($number)){
        echo"$number is An Armstrong Number";
    }
    else{
         echo"$number is Not An Armstrong Number";

    }
    }
?>