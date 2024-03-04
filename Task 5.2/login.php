

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
                        <a href="home.php">Home</a> |
                        <a href="login.php">Login</a> |
                        <a href="registration.php">Registration</a>
                    </div>
                </div>
                
            </th>
        </tr>
        <tr rowspan="5">
            <td colspan="3">
                <center>
					<form action="loginCheck.php" method="post" enctype="">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<fieldset>
										<legend><h3>LOGIN</h3></legend>
										User Name:
										<input type="text" name="username" value=""><br/>                               
										Password: 
										<input type="password" name="password">
										<br /><hr/>
										<input type="checkbox" name="rememberme"> Remember me
										<br>
										<br>
										<input type="submit" name="submit" value="Submit">
										<a href="forgoPassword">Forgot Password?</a>
									</fieldset>
								</td>
							</tr>                                
						</table>
					</form>
					</center>
            </td>
        </tr>
        </tr>
            <td colspan="3" align="center" height="50px">Copyright © 2017</td>
        </tr>
    </table>
</body>
</html>