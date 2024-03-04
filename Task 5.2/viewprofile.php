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
                        PROFILE
                    </legend>
                    <table border="0">
                        <tr>
                            <td>
                                Name:
                            </td>
                            <td>
                                Bob
                            </td>
                            <td rowspan="5">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" height="160px" width="150px">
                            </td>
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
                                Email:
                            </td>
                            <td>
                                bob@aiub.edu
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
                                Gender:
                            </td>
                            <td>
                                Male
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
                                DOB:
                            </td>
                            <td>
                                19/09/1998
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
                                <a href="">Edit Profile</a>
                            </td>
                            <td>
                            </td>
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