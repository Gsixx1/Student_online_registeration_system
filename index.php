<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>One Page Website</title>
</head>
<body>    
    <header class="header">
        <a href=""><img src="image/img.jpg" alt="">
        </a>       
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Sign up / Register</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </header>
    <div class="form_container">
        <div class="panel_primary_border">
            <div class="row">
                <div class="panel_heading">
                    Registration Form
                </div>
                <div class="panel_body">
                    <form action="process.php" method="POST">
                        <div class="form-group">
                            <label for="fname" class="lbfn">First Name</label><br>
                            <input type="text" name="fname" id="fname" required>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="lbln">Last Name</label><br>
                            <input type="text" name="lname" id="lname">
                        </div>
                        <div class="form-group">
                            <label for="dob" class="lbdob">Date of Birth</label><br>
                            <input type="text" name="dob" id="dob">
                        </div>
                        <div class="form-group">
                            <label for="add_home" class="lbadrs">Address</label><br>
                            <input type="text" name="address_home" id="add_home">
                        </div>
                        <div class="form-group">
                            <label for="phone_number" class="lbpnmb">Phone Number</label><br>
                            <input type="text" name="phone_number" id="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="next_of_kin" class="lbnxk">Next of Kin</label><br>
                            <input type="text" name="next_of_kin" id="next_of_kin">
                        </div>
                        <div class="form-group">
                            <label for="email" class="lbeml">Email</label><br>
                            <input type="text" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="edu_level" class="lbedulvl">Educational Level</label><br>
                            <input type="text" name="edu_level" id="edu_level">
                        </div>
                        <div>
                            <input type="submit" name="save" class="sign_upsave">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>