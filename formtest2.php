<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>
     
    </head>
    <body>
        <?php
            
            $fname=$_GET['FirstName']; 
            $lname=$_GET['LastName'];
            $gender=$_GET['Gender'];
            $DateOfBirth=$_GET['DateOfBirth'];
            $Street=$_GET['Street'];
            $Zipcode=$_GET['Zipcode'];
            $City=$_GET['City'];
            $usermail=$_GET['usermail'];
                
        $handle = fopen('wegotitfromhere.txt','a');
           
            fwrite($handle,'FIRSTNAME     : '.$fname."\n");
            fwrite($handle,'LASTNAME      : '.$lname."\n");
            fwrite($handle,'GENDER        : '.$gender."\n");
            fwrite($handle,'DATE OF BIRTH : '.$DateOfBirth."\n");
            fwrite($handle,'STREETNAME    : '.$Street."\n");
            fwrite($handle,'ZIPCODE       : '.$Zipcode."\n");
            fwrite($handle,'CITY          : '.$City."\n");
            fwrite($handle,'EMAIL         : '.$usermail."\n");
            fwrite($handle,'-----------------------------------------'."\n");
        fclose($handle);
        
        echo "Thanks for your registration, we will contact you soon.";
                
        ?>
        <br><br>
        <button><a href="formtest.php">Back to Registration</a></button>
        
        
    </body>
</html>

