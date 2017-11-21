<!DOCTYPE html>
<html>
    <head>
        <meta charset='UFT-8'>
        <title>PHP Pracit</title>
    </head>
    <body>
        <form action="#" method="GET">
            <input type="text" name="fname" value="first name" />
            <input type="text" name="lname" value='last name' />
            <input type="text" name="address" value='address' />
            <input type="submit" value="Submit"/>
        </form>
        
    <?php
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $address = $_GET['address'];
        echo "This is your first name ". 
        $fname. 'This is your last name'. $lname. 'This is your city: '.  $address ;
    ?>
    <?php
        echo strlen('Hi Jampa!');
        echo str_word_count("How many words in this sentence?");
        echo strrev ("gnorasT yalnihT apmaJ");
        echo strpos ("Jampa Thinlay Tsarong", "Thinlay");
        echo str_replace("Thinla", "Thinlay","Jampa Thinla Tsarong" )
    ?>
    <hr/>
    <?php
     $x = 210;
     $y = 350;
       
      if($x < $y){
          echo $x." is smaller than ". $y;
        }else{
         echo $x." is bigger than ". $y;
      }
     
    ?>
    </body>
</html>


