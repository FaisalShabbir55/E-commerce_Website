<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!-- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    
</head>
<body>
    <div class="containerr">
        
            <div class="search">
                
                <div class="logo">
                    <img src="aa.png" alt="">
                </div>

                <div class="searchbox">
                    <input type="search" name="search"  placeholder="Enter your keyword">
                    <button>Search</button>
                </div>

                <div class="profileInfo">
                    <i class="fa-regular fa-user"></i>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <a class="dropdown" href="Login.php"> <i style="font-size:24px" class="fa">&#xf090;</i></a>
                </div>
            </div>

            <div class="menu">
                <ul>
                    <li><a class="dropdown" href="index.php">Home</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn"><a href="#">Category <i class="fa-solid fa-caret-down"></i></a></button>
                            <div class="dropdown-content">
                              <a href="man.php">Men</a>
                              <a href="women.php">Woman</a>
                              <a href="child.php">Children</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Blogs</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn"><a href="#">Shops <i class="fa-solid fa-caret-down"></i></a></button>
                            <div class="dropdown-content">
                                <a href="jewellery.php">Jewellery</a>
                                <a href="bag.php">Bags</a>
                                <a href="Glass.php">Glasses</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

            </div>

        </div>

        <!-- ------------------------------contant--------------------------------------- -->

        <!---------------------------------Home page-------------------------------------->

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="girlsdress/Homepic1.JPEG" style="height:85vh; width:100%">
            <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="girlsdress/Homepic2.jpg" style="height:85vh; width:100% ">
            <div class="text">Caption Two</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="girlsdress/Homepic3.jpg" style="height:85vh; width: 100vw;">
            <div class="text">Caption Three</div>
            </div>
        
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
  
  
        <!-----------------***-------------------Home page------------------***----------------->



        <div class="productsmw">
            <h1>All Products</h1>

            <div class="contentmw">
                <div class="box1">
        <?php
       $con = mysqli_connect("localhost","root","","Project");

       $qp = "select * from Products2 where 1";
        $fetchp = mysqli_query($con,$qp);
        $norowsp = mysqli_num_rows($fetchp);

   
            
       echo  "   <div class='picture'>
             <img src='girlsdress/g1.jpeg' alt='loading'>
              </div>";
              if($norowsp>0)
              {
                   $record = mysqli_fetch_assoc($fetchp);
                   echo  "<h3>".$record['PName']."</h3>";
                   echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                   echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                  
       
              }
              echo"
                    <div class='givestar'>
                        <p ><i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i></p>
                    </div>
                   
                </div>
                <div class='box2'>";
               
           echo  "<div class='picture'>
                        <img src='girlsdress/g3.jpeg' alt='loading'>
                    </div>";
                    if($norowsp>0)
                    {
                        $record = mysqli_fetch_assoc($fetchp);
                        echo  "<h3>".$record['PName']."</h3>";
                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                    }
           echo"    <div class='givestar'>
           <p ><i class='fa-solid fa-star'></i>
           <i class='fa-solid fa-star'></i>
           <i class='fa-solid fa-star'></i>
           <i class='fa-solid fa-star'></i>
           <i class='fa-solid fa-star'></i></p>
       </div>
                   
                </div>
                <div class='box3'>";
               
             
                echo " <div class='picture'>
                        <img src='girlsdress/g2.jpeg' alt='loading'>
                    </div>";
                    if($norowsp>0)
                    {
                        $record = mysqli_fetch_assoc($fetchp);
                        echo  "<h3>".$record['PName']."</h3>";
                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                    }

                   echo "     <div class='givestar'>
                   <p ><i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i></p>
               </div>
                   
                </div>
                <div class='box4'>";
                
              

                echo "    <div class='picture'>
                        <img src='girlsdress/g6.jpeg' alt='loading'>
                    </div>";
                    if($norowsp>0)
                    {
                        $record = mysqli_fetch_assoc($fetchp);
                        echo  "<h3>".$record['PName']."</h3>";
                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                    }
                   echo "     <div class='givestar'>
                   <p ><i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i></p>
               </div>
                   
                </div>
                <div class='box5'>";
               
                 echo"   <div class='picture'>
                        <img src='girlsdress/g4.jpeg' alt='loading'>
                    </div>";
                    if($norowsp>0)
                    {
                        $record = mysqli_fetch_assoc($fetchp);
                        echo  "<h3>".$record['PName']."</h3>";
                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                    }
                    echo "    <div class='givestar'>
                    <p ><i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star'></i>
                    <i class='fa-solid fa-star'></i></p>
                </div>
                   
                </div>
                <div class='box6'>";
              
                 echo "<div class='picture'>
                        <img src='girlsdress/g6.jpeg' alt='loading'>
                    </div>";
                    if($norowsp>0)
                    {
                        $record = mysqli_fetch_assoc($fetchp);
                        echo  "<h3>".$record['PName']."</h3>";
                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                    }
                   echo "     <div class='givestar'>
                   <p ><i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i>
                   <i class='fa-solid fa-star'></i></p>
               </div>
                </div>
                <div class='box7'>
                <div class='picture'>
                       <img src='gullary/1g.jpg' alt='loading'>
                        </div>";
                        if($norowsp>0)
                        {
                             $record = mysqli_fetch_assoc($fetchp);
                             echo  "<h3>".$record['PName']."</h3>";
                             echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                             echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                            
                 
                        }
                        echo"
                              <div class='givestar'>
                                  <p ><i class='fa-solid fa-star'></i>
                                  <i class='fa-solid fa-star'></i>
                                  <i class='fa-solid fa-star'></i>
                                  <i class='fa-solid fa-star'></i>
                                  <i class='fa-solid fa-star'></i></p>
                              </div>
                               
                          </div>
                          <div class='box8'>";
                         
                     echo  "<div class='picture'>
                                  <img src='gullary/2g.jpg' alt='loading'>
                              </div>";
                              if($norowsp>0)
                              {
                                  $record = mysqli_fetch_assoc($fetchp);
                                  echo  "<h3>".$record['PName']."</h3>";
                                  echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                  echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                              }
                     echo"    <div class='givestar'>
                     <p ><i class='fa-solid fa-star'></i>
                     <i class='fa-solid fa-star'></i>
                     <i class='fa-solid fa-star'></i>
                     <i class='fa-solid fa-star'></i>
                     <i class='fa-solid fa-star'></i></p>
                 </div>
                               
                          </div>
                          <div class='box9'>";
                         
                       
                          echo " <div class='picture'>
                                  <img src='gullary/3g.jpg' alt='loading'>
                              </div>";
                              if($norowsp>0)
                              {
                                  $record = mysqli_fetch_assoc($fetchp);
                                  echo  "<h3>".$record['PName']."</h3>";
                                  echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                  echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                              }
          
                             echo "    <div class='givestar'>
                             <p ><i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i></p>
                         </div>
                               
                          </div>
                          <div class='box10'>";
                          
                        
          
                          echo "    <div class='picture'>
                                  <img src='gullary/4g.jpg' alt='loading'>
                              </div>";
                              if($norowsp>0)
                              {
                                  $record = mysqli_fetch_assoc($fetchp);
                                  echo  "<h3>".$record['PName']."</h3>";
                                  echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                  echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                              }
                             echo "     <div class='givestar'>
                             <p ><i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i></p>
                         </div>
                               
                          </div>
                          <div class='box11'>";
                         
                           echo"   <div class='picture'>
                                  <img src='gullary/5g.jpg' alt='loading'>
                              </div>";
                              if($norowsp>0)
                              {
                                  $record = mysqli_fetch_assoc($fetchp);
                                  echo  "<h3>".$record['PName']."</h3>";
                                  echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                  echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                              }
                              echo "    <div class='givestar'>
                              <p ><i class='fa-solid fa-star'></i>
                              <i class='fa-solid fa-star'></i>
                              <i class='fa-solid fa-star'></i>
                              <i class='fa-solid fa-star'></i>
                              <i class='fa-solid fa-star'></i></p>
                          </div>
                               
                          </div>
                          <div class='box12'>";
                        
                           echo "<div class='picture'>
                                  <img src='gullary/6g.jpg' alt='loading'>
                              </div>";
                              if($norowsp>0)
                              {
                                  $record = mysqli_fetch_assoc($fetchp);
                                  echo  "<h3>".$record['PName']."</h3>";
                                  echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                  echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                              }
                             echo "     <div class='givestar'>
                             <p ><i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i>
                             <i class='fa-solid fa-star'></i></p>
                         </div>
   
                          </div>
                          <div class='box13'>";
                             echo  "   <div class='picture'>
                                   <img src='bags/600x600.jpeg' alt='loading'>
                                    </div>";
                                    if($norowsp>0)
                                    {
                                         $record = mysqli_fetch_assoc($fetchp);
                                         echo  "<h3>".$record['PName']."</h3>";
                                         echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                         echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                        
                             
                                    }
                                    echo"
                                          <div class='givestar'>
                                              <p ><i class='fa-solid fa-star'></i>
                                              <i class='fa-solid fa-star'></i>
                                              <i class='fa-solid fa-star'></i>
                                              <i class='fa-solid fa-star'></i>
                                              <i class='fa-solid fa-star'></i></p>
                                          </div>
                                           
                                      </div>
                                      <div class='box14'>";
                                     
                                 echo  "<div class='picture'>
                                              <img src='bags/600x600 (1).jpeg' alt='loading'>
                                          </div>";
                                          if($norowsp>0)
                                          {
                                              $record = mysqli_fetch_assoc($fetchp);
                                              echo  "<h3>".$record['PName']."</h3>";
                                              echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                              echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                          }
                                 echo"    <div class='givestar'>
                                 <p ><i class='fa-solid fa-star'></i>
                                 <i class='fa-solid fa-star'></i>
                                 <i class='fa-solid fa-star'></i>
                                 <i class='fa-solid fa-star'></i>
                                 <i class='fa-solid fa-star'></i></p>
                             </div>
                                           
                                      </div>
                                      <div class='box15'>";
                                     
                                   
                                      echo " <div class='picture'>
                                              <img src='bags/600x600 (2).jpeg' alt='loading'>
                                          </div>";
                                          if($norowsp>0)
                                          {
                                              $record = mysqli_fetch_assoc($fetchp);
                                              echo  "<h3>".$record['PName']."</h3>";
                                              echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                              echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                          }
                      
                                         echo "    <div class='givestar'>
                                         <p ><i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i></p>
                                     </div>
                                           
                                      </div>
                                      <div class='box16'>";
                                      
                                    
                      
                                      echo "    <div class='picture'>
                                              <img src='bags/600x600 (3).jpeg' alt='loading'>
                                          </div>";
                                          if($norowsp>0)
                                          {
                                              $record = mysqli_fetch_assoc($fetchp);
                                              echo  "<h3>".$record['PName']."</h3>";
                                              echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                              echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                          }
                                         echo "     <div class='givestar'>
                                         <p ><i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i></p>
                                     </div>
                                           
                                      </div>
                                      <div class='box17'>";
                                     
                                       echo"   <div class='picture'>
                                              <img src='bags/600x600 (4).jpeg' alt='loading'>
                                          </div>";
                                          if($norowsp>0)
                                          {
                                              $record = mysqli_fetch_assoc($fetchp);
                                              echo  "<h3>".$record['PName']."</h3>";
                                              echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                              echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                          }
                                          echo "    <div class='givestar'>
                                          <p ><i class='fa-solid fa-star'></i>
                                          <i class='fa-solid fa-star'></i>
                                          <i class='fa-solid fa-star'></i>
                                          <i class='fa-solid fa-star'></i>
                                          <i class='fa-solid fa-star'></i></p>
                                      </div>
                                           
                                      </div>
                                      <div class='box18'>";
                                    
                                       echo "<div class='picture'>
                                              <img src='bags/600x600 (5).jpeg' alt='loading'>
                                          </div>";
                                          if($norowsp>0)
                                          {
                                              $record = mysqli_fetch_assoc($fetchp);
                                              echo  "<h3>".$record['PName']."</h3>";
                                              echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                              echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                          }
                                         echo "     <div class='givestar'>
                                         <p ><i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i>
                                         <i class='fa-solid fa-star'></i></p>
                                     </div>
                                           
                                      </div>

                                      <div class='box19'>
                                      <div class='picture'>
                                             <img src='glasses/1g.jpg' alt='loading'>
                                              </div>";
                                              if($norowsp>0)
                                              {
                                                   $record = mysqli_fetch_assoc($fetchp);
                                                   echo  "<h3>".$record['PName']."</h3>";
                                                   echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                                   echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                                  
                                       
                                              }
                                              echo"
                                                    <div class='givestar'>
                                                        <p ><i class='fa-solid fa-star'></i>
                                                        <i class='fa-solid fa-star'></i>
                                                        <i class='fa-solid fa-star'></i>
                                                        <i class='fa-solid fa-star'></i>
                                                        <i class='fa-solid fa-star'></i></p>
                                                    </div>
                                                     
                                                </div>
                                                <div class='box20'>";
                                               
                                           echo  "<div class='picture'>
                                                        <img src='glasses/600x600.jpeg' alt='loading'>
                                                    </div>";
                                                    if($norowsp>0)
                                                    {
                                                        $record = mysqli_fetch_assoc($fetchp);
                                                        echo  "<h3>".$record['PName']."</h3>";
                                                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                                    }
                                           echo"    <div class='givestar'>
                                           <p ><i class='fa-solid fa-star'></i>
                                           <i class='fa-solid fa-star'></i>
                                           <i class='fa-solid fa-star'></i>
                                           <i class='fa-solid fa-star'></i>
                                           <i class='fa-solid fa-star'></i></p>
                                             </div>
                                                     
                                                </div>
                                                <div class='box21'>";
                                               
                                             
                                                echo " <div class='picture'>
                                                        <img src='glasses/600x600 (1).jpeg' alt='loading'>
                                                    </div>";
                                                    if($norowsp>0)
                                                    {
                                                        $record = mysqli_fetch_assoc($fetchp);
                                                        echo  "<h3>".$record['PName']."</h3>";
                                                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                                    }
                                
                                                   echo "    <div class='givestar'>
                                                   <p ><i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i></p>
                                               </div>
                                                     
                                                </div>
                                                <div class='box22'>";
                                                
                                              
                                
                                                echo "    <div class='picture'>
                                                        <img src='glasses/4c.jpg' alt='loading'>
                                                    </div>";
                                                    if($norowsp>0)
                                                    {
                                                        $record = mysqli_fetch_assoc($fetchp);
                                                        echo  "<h3>".$record['PName']."</h3>";
                                                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                                    }
                                                   echo "     <div class='givestar'>
                                                   <p ><i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i></p>
                                               </div>
                                                     
                                                </div>
                                                <div class='box23'>";
                                               
                                                 echo"   <div class='picture'>
                                                        <img src='glasses/3g.jpg' alt='loading'>
                                                    </div>";
                                                    if($norowsp>0)
                                                    {
                                                        $record = mysqli_fetch_assoc($fetchp);
                                                        echo  "<h3>".$record['PName']."</h3>";
                                                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                                    }
                                                    echo "    <div class='givestar'>
                                                    <p ><i class='fa-solid fa-star'></i>
                                                    <i class='fa-solid fa-star'></i>
                                                    <i class='fa-solid fa-star'></i>
                                                    <i class='fa-solid fa-star'></i>
                                                    <i class='fa-solid fa-star'></i></p>
                                                </div>
                                                     
                                                </div>
                                                <div class='box24'>";
                                              
                                                 echo "<div class='picture'>
                                                        <img src='glasses/2g.jpg' alt='loading'>
                                                    </div>";
                                                    if($norowsp>0)
                                                    {
                                                        $record = mysqli_fetch_assoc($fetchp);
                                                        echo  "<h3>".$record['PName']."</h3>";
                                                        echo  "<h5 style='color:red;'><del  > ".$record['PCode']."</del> -15% </h5> ";
                                                        echo  "<h4>Now ".$record['PPrice']." pkr</h4>";
                                                    }
                                                   echo "     <div class='givestar'>
                                                   <p ><i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i>
                                                   <i class='fa-solid fa-star'></i></p>
                                               </div>
                                                     
                                                </div>  
                                                </div>
            
    </div> "
    ?>
    
        
        <!-- ----------------***--------------contant-------------------***-------------------- -->
       
        <div class="footer">

            <div class="footer1">

                <div class="shopp">
                    <a href="#"><i class="fa-solid fa-truck-fast"></i></a>
                    <h2>Free Shopping</h2>
                    <p>Sign up for update and free shopping</p>
                </div>
                <div class="delivery">
                    <a href="#"><i class="fa-solid fa-truck-fast"></i></a>
                    <h2>Fast delivery</h2>
                    <p>We deliver goods around the world</p>
                </div>
                <div class="quality">
                    <a href="#"><i class="fa-solid fa-a"></i></a>
                    <h2>Best quality</h2>
                    <p>We are Internation chain of restorents</p>
                </div>
                <div class="store">
                    <a href="#"><i class="fa-solid fa-store"></i></a>
                    <h2>Our Store</h2>
                    <p>You can see "here and now" Product</p>
                </div>

            </div>

            <div class="footer2">
                <div class="info">
                    <h1>Information</h1>
                    <ul>
                        <li>Privacy policy </li>
                        <li>Refund policy</li>
                        <li>shipping & Return</li>
                        <li>Team of Use</li>
                    </ul>
                </div>
                <div class="Quicklinks">
                    <h1>Quick links</h1>
                    <ul>
                        <li>My Account</li>
                        <li>Cart</li>
                        <li>Wish list</li>
                        <li>Order</li>
                    </ul>
                </div>
                <div class="contactus">
                    <h1>Contact Us</h1>
                    <ul>
                        <li>Find a location nearest you.</li>
                        <li>See our store</li>
                        <li><h3>+923012345678</h3></li>
                        <li>fashionfusion@gmail.com</li>
                    </ul>
                </div>

                <div class="ourcompany">
                    <ul>
                        <h1>Our Company</h1>
                        <li><b>Address:</b> Laborty chock, Gulbarg III, Lahore</li>
                        <li><b>Hours:</b>9:00 - 6:30 Monday to Friday</li>
                    </ul>
                </div>
            </div>

            <div class="footer3">
                <div class="left">

                </div>
                <div class="FOOOTERlogo">
                    <h2>Fashion Fusion</h2>
                </div>
                <div class="right">
                    
                </div>
            </div>

            <div class="footer4">

                <div class="socalicons">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <p>Copyright @ 2023.All right Reserved.</p>
                </div>

                <div class="cardicons">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-cc-paypal"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>



    </div>


    <script>

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script> -->
</body>
</html>