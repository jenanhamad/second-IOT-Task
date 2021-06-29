

<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title>dirctions</title>
      <style>
         .bn39 {
         background-image: linear-gradient(135deg, #008aff, #86d472);
         border-radius: 6px;
         box-sizing: border-box;
         color: #ffffff;
         display: inline-block;
         height: 50px;
         font-size: 1.4em;
         padding: 4px;
         position: relative;
         text-decoration: none;
         width: 7em;
         z-index: 2;
         }
         .bn39:hover {
         color: #fff;
         }
         .bn39 .bn39span {
         align-items: center;
         background: #0e0e10;
         border-radius: 6px;
         display: inline-block;
         justify-content: center;
         height: 100%;
         transition: backgrond 0.5s ease;
         width: 100%;
         }
         .bn39:hover .bn39span {
         background: transparent;
         }
         button{
         color: white;
         background-color: transparent;
         border: none;
         }
         body{
         background-color: black;
         }
         .container{
         margin-left : 400px;
         margin-top : 150px;
         } 
         @media screen and (max-width: 600px) {
            .container{
            margin-left : 0px;
            margin-top : 150px;
            }
         
         }
      </style>
   </head>
   <?php 
      // Create connection
      $connection = new mysqli("localhost","root","","dirction");
      
      // Check connection
      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";
      
      if(isset($_POST['left'])){
      
         echo "<br>";
      
         $Qu = "";
      
         $Qu = "select * from dirction WHERE 1 ";
         $result = mysqli_query($connection, $Qu);
      
         $Qu = "INSERT INTO dirction (leftd)
          VALUES ('L')";
         $result = mysqli_query($connection, $Qu);
        
      
      }else if(isset($_POST['forward'])) {
         echo "<br>";
      
         $Qu = "";
      
         $Qu = "select * from dirction WHERE 1 ";
         $result = mysqli_query($connection, $Qu);
      
         $Qu = "INSERT INTO dirction (forward) VALUES ('F')";
         $result = mysqli_query($connection, $Qu);
       
      }else if(isset($_POST['stop'])) {
      echo "<br>";
      
      $Qu = "";
      
      $Qu = "select * from dirction WHERE 1 ";
      $result = mysqli_query($connection, $Qu);
      
      $Qu = "INSERT INTO dirction (stopd) VALUES ('S')";
      $result = mysqli_query($connection, $Qu);
        
      }else if(isset($_POST['right'])) {
      echo "<br>";
      
      $Qu = "";
      
      $Qu = "select * from dirction WHERE 1 ";
      $result = mysqli_query($connection, $Qu);
      
      $Qu = "INSERT INTO dirction (rightd) VALUES ('R')";
      $result = mysqli_query($connection, $Qu);
        
      }else if(isset($_POST['backward'])) {
      echo "<br>";
      
      $Qu = "";
      
      $Qu = "select * from dirction WHERE 1 ";
      $result = mysqli_query($connection, $Qu);
      
      $Qu = "INSERT INTO dirction (backward) VALUES ('B')";
      $result = mysqli_query($connection, $Qu);
        
      }
      ?>
   <body>
      <div class="container">
         <div class="panel" >
            <form action="" method="POST">
               <table>
                  <tr>
                     <td></td>
                     <td> 
                        <span class="bn39">
                        <button class="bn39span" name="forward" type="submit">FORWARD</button>
                        </span>
                     </td>
                     <td></td>
                  </tr>
                  <tr>
                     <td> 
                        <span class="bn39">
                        <button  class="bn39span" name="left" type="submit">LEFT</button>
                        </span>
                     </td>
                     <td>     <span class="bn39">
                        <button class="bn39span" name="stop" type="submit">STOP</button>
                        </span>
                     </td>
                     <td>
                        <span class="bn39">
                        <button   class="bn39span" name="right" type="submit">RIGHT</button>
                        </span>
                     </td>
                  </tr>
                  <tr>
                     <td></td>
                     <td> <span class="bn39">
                        <button   class="bn39span" name="backward" type="submit">BACKWARD</button>
                        </span>
                     </td>
                     <td></td>
                  </tr>
               </table>
            </form>
         </div>
      </div>
   </body>
</html>

