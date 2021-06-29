
<?php 
 

    $connection = mysqli_connect("localhost","root","","dirction");


    $res = mysqli_query($connection, "SELECT `forward`,`stopd`,`backward`,`rightD`,`leftD` FROM dirction ORDER BY id DESC LIMIT 1");

    $print_data = mysqli_fetch_row($res);
    mysqli_close($connection);

    echo "Dirction :  ";

    foreach($print_data as $p){
        print_r ($p);
    }


   ?>