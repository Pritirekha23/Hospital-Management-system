<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paitent Registration</title>
    <link rel="stylesheet" type="text/css" href="css/patient.css">
</head>
<body>
    <div class="container">
        <header>Patient Registration</header>

        <form action="insert.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Paitent Name</label>
                            <input type="text" placeholder="Enter Name" name="uname" required>
                        </div>

                        <div class="input-field">
                            <label>Date Of Birth</label>
                            <input type="date" placeholder="Enter Birth date" name="dob" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your Email" name="email" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Mobile No.</label>
                            <input type="text" placeholder="Enter mobile no." name="mobile" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" placeholder="Enter password for login..." name="pass" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Gender</label>
                            <input type="text" placeholder="Enter your gender" name="gender" required>
                        </div>
                            <div class="input-field">
                                <label>ID Type</label>
                                <input type="text" placeholder="Enter ID Type" name="idtype" required>
                            </div>
    
                            <div class="input-field">
                                <label>ID No.</label>
                                <input type="text" placeholder="Enter ID No." name="idno" required>
                        </div>
                    </div>
                </div>
                

                <div class="form second">
                <div class="details address">
                    <span class="title">
                    Address Details
                    </span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter Street Address" name="address" required>
                        </div>

                        <div class="input-field">
                            <label>Zip Code</label>
                            <input type="text" placeholder="Enter zip code" name="zip" required>
                        </div>
                        
                        
                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter State" name="state" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Enter Country." name="country" required>
                        </div>
                        
                        
                    </div>
                
                    </div>
                    <button class="btn">Submit</button>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="patient.js"></script>




















    <!-- <div class="box">
        <form action="">
            <div class="personal">
                <h1>Personal details</h1>
                <label for="uname">Patient Name</label>
                <input type="text" name="uname" id="" placeholder="Enter name">
                <label for="uname">Date of Birth</label>
                <input type="date" name="dob" id="" placeholder="dob">
                <label for="uname">Email</label>
                <input type="email" name="email" id="" placeholder="Enter email">
                <label for="uname">Mobile No.</label>
                <input type="text" name="mob" id="" placeholder="Enter Mobile no">
            </div>
            <div class="personal2">

            </div>
            <div class="address">

            </div>
        </form>
    </div> -->


</body>
</html





























 

    