<?php
    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }

   
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
        $username = "Unknown";
    }
?>

<html>
<head>
    <title>HTML form</title>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="0" width="80%" align="center">
        <tr>
            <th colspan="3">
                <div>
                    <h1 align="left" style="display: inline; float: left;">xCompany</h1>
                    <div align="right" style="display: inline; float: right;">
                    <span>Logged in as 
                        <a href="dashboard.php">
                            <?php echo $username; ?>
                        </a>
                    |</span>
                        <a href="home.php">Logout</a>
                    </div>
                </div>
                
            </th>
        </tr>
        <tr>
            <td>
                <h3>
                    Account
                </h3>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="viewprofile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></li>
                    <li><a href="profilepicture.php">Change Profile Picture</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                    <li><a href="home.php">Logout</a></li>
                </ul>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend>
                        CHANGE PASSWORD
                    </legend>
                    <table border="0">
                        <tr>
                            <td>
                                <p>Current Password:</p>
                            </td>
                            <td>
                                <input type="text" name="oldpassword">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p style="color:green;">New Password:</p>
                            </td>
                            <td>
                                <input type="text" name="newpassword">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p style="color:red;">Retype New Password:</p>
                            </td>
                            <td>
                                <input type="text" name="newpassword">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <hr>    
                            </td>
                            <td>
                                <hr>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="Submit" value="Submit"/>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
        </tr>
            <td colspan="3" align="center" height="50px">Copyright © 2017</td>
        </tr>
    </table>
</body>
</html>