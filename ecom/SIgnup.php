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
                    Already have account with FashionFusion? 
                 </div>
                 <div class="login">
                 <a href="login.php"> Login </a>
                 </div>
            </div>
            <div class="item2">
                    <!-- <h1>Men</h1> -->
                        <form action="process.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                            <tr ><th colspan="4">Create an account</th></tr>
                                <tr>
                                    <td> <label for="">First name:<i style="color:red; font-size:large;">*</i></label>  </td>
                                    <td colspan="3"><input type="text" name="fname" required placeholder="Enter your first name"></td>
                                </tr>
                                
                                <tr>
                                
                                    <td><label for=""><br>Last name:</label>  </td>
                                    <td colspan="3"><br><input type="text" name="lname" placeholder="Enter your last name"></td>
                                </tr>
                                <tr>
                                    <td><label for=""><br>Email:<i style="color:red; font-size:large;">*</i></label>  </td>
                                    <td colspan="3"><br><input type="email" name="em" required placeholder="Enter your email"></td>
                                </tr>
                                <tr>
                                    <td><label for=""><br>Password:<i style="color:red; font-size:large;">*</i></label>  </td>
                                    <td colspan="3"><br><input type="password" name="pw" required placeholder="Enter your password" ></td>
                                </tr>
                                <tr>
                                    <td><label for=""><br>Gender:</label>  </td>
                                    <td><br>
                                        <input type="radio" name="gen" value="male"> Male
                                        <input type="radio" name="gen" value="female"> Female
                                        <input type="radio" name="gen" value="other"> Other
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for=""><br>Interest:</label>  </td>
                                    <td colspan="3"><br>
                                        <select name="i">
                                            <option value="Easteren">Eastern</option>
                                            <option value="Western">Western</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for=""><br>Languages:</label>  </td>
                                    <td><br>
                                        <input type="checkbox" name="l[]" value="english"> English
                                        <input type="checkbox" name="l[]" value="urdu"> Urdu
                                        <input type="checkbox" name="l[]" value="punjabi"> Punjabi
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for=""><br>Date of birth:</label>  </td>
                                    <td colspan="3"><br><input type="date" name="dob"></td>
                                </tr>
                                <tr>
                                    <td><label for=""><br>Contact no.:<i style="color:red; font-size:large;">*</i></label>  </td>
                                    <td colspan="3"><br><input type="tel" name="con" required placeholder="Enter your phone"></td>
                                </tr>        

                                <tr>
                                    <td><label for=""><br>Address:</label>  </td>
                                    <td colspan="3"><br><textarea name="add" rows="2" cols="21" placeholder="Enter your complete address"></textarea> </td>
                                </tr>
                                
                                <tr>
                                    <td><label for=""><br>Upload image:<i style="color:red; font-size:large;">*</i></label>  </td>
                                    <td colspan="3"><br><input type="file" name="img" required></td>
                                </tr>
                                
                                <tr>
                                    <td colspan="3">
                                        <br>
                                             I have read, agree and understood the <a href="t&cs.html">Terms & Conditions </a> <input type="checkbox" name="check" >
                                    </td>
                                  </tr>
                                <tr>
                                    <td  colspan="4"  style="text-align:center; " >
                                        <br><br>
                                        <input type="submit" name="submitr" value="Signup" style=" font-size: xx-large; background-color:darkgoldenrod;">
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