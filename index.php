<?php
$connection= new mysqli("localhost","root" ,"","robot");



if(isset($_POST['Forward'])){

    $my_query = "select * from robotbase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO robotbase (Forward) VALUES ('f')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "f";
    }
    else{
        echo "ERROR";
    }

}else if(isset($_POST['R'])){

        $my_query = "select * from robotbase WHERE 1 ";
        $result = mysqli_query($connection, $my_query);
    
        $my_query = "INSERT INTO robotbase (R) VALUES ('r')";
        $result = mysqli_query($connection, $my_query);
        if($result)
        {
            echo "r";
        }
        else{
            echo "ERROR";
        }

    }else if(isset($_POST['L'])){

        $my_query = "select * from robotbase WHERE 1 ";
        $result = mysqli_query($connection, $my_query);
    
        $my_query = "INSERT INTO robotbase (L) VALUES ('l')";
        $result = mysqli_query($connection, $my_query);
        if($result)
        {
            echo "l";
        }
        else{
            echo "ERROR";
        }


}else if(isset($_POST['Stop'])){

    $my_query = "select * robotbase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO robotbase (Stop) VALUES ('S')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "s";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Back'])){

    $my_query = "select * from robotbase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO robotbase (Back) VALUES ('b')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "b";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}





?>
