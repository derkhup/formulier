<html>
    <center>
    <head>

        <title>Form</title> 
        
        <link rel="stylesheet" type="text/css" href="formStyle.css">
    </head>
    
    <body>
      <img src="download.png">

        
        <p> <h2>Registration</h2> 
  
        <table> 
            <tr>
                <td  
                    <p><h4><br>Your Info</h4></p>
                    <form action="formtest2.php" method="GET">
                        
                        First name: <input type="text" name="FirstName" value="" required><br>
                        Last name: <input type="text" name="LastName" value="" required><br><br>
                       <input type="radio" name="Gender" value="Female">Male<br>
                        <input type="radio" name="Gender" value="Male">Female<br><br> 
                        Date of birth<input type="text" name="DateOfBirth" value="" maxlength="10" size="10">(dd-mm-yyyy)<br><br>
                        <p><h4>Address</h4></p>
                        Street  <input type="text" name="Street" value="" required><br>
                        Zipcode <input type="text" name="Zipcode" value=""><br>
                        City    <input type="text" name="City" value="" required><br><br>
                    
                        E-mail: <input type="email" name="usermail" required> <br>  <br> <br>                             
                        <center> <input type="submit" value="Submit"> </center><br>       
                    </form>
                </td>
            </tr>  
    </body>
    </center>
</html>