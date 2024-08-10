<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="signupstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    
</head>
<body>
        <div class="container">
            <div class="item1">
                <div class="logo">
                    <img src="aa.png" alt="">
                </div>
                <div class="name">
                   <h3> <br>THE WORLD OF FASHION<br></h3>
                </div>
                <div class="line">
                   <h1> ____________<br></h1>   
                </div>
                <div class="message">
                    <h3 style="color:red;">To Post Order You Need To Create Your Account Or Need To Login <br></h3>
                 </div>
                 <div class="ask">
                    Not registered yet with FashionFusion? 
                 </div>
                 <div class="signup">
                 <a href="SIgnup.php"> Signup </a>
                 </div>
            </div>
            <div class="item2">
                    <!-- <h1>Men</h1> -->
                    <form action="process.php" method="post" enctype="multipart/form-data">
                        <table class="ltable">
                        <tr ><th colspan="3" >Login</th></tr>
                            <tr>
                                <td style="text-align:center;"><label for="">Email</label> </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;"><input type="email" name="lem" required placeholder="Enter your Email"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center;"><label for="">Password</label>  </td><br>
                            </tr>
                            <tr>
                                <td style="text-align:center;"><input type="password" name="lpw" required required placeholder="Enter your Password"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center; ">
                                    <br><br><input type="submit" name="submitl" value="Login" style="font-size:xx-large; background-color:darkgoldenrod;">
                                </td>
                            </tr>
                        </table>
                    </form>
            </div>

        </div>
    </body>
    </html>
   
</body>
</html>
</body>
</html>