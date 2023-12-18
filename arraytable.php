<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>


    <?php
    if(isset($_GET['name'])){
        $data_array['Name']=$_GET['name'];
        $data_array['Father Name']=$_GET['fathername'];
        $data_array['Occupation']=$_GET['occupation'];
        $data_array['Mother Name']=$_GET['mothername'];
        $data_array['Street']=$_GET['street'];
        $data_array['Area']=$_GET['area'];
        $data_array['Post']=$_GET['post'];
        $data_array['District']=$_GET['district'];
        $data_array['State']=$_GET['state'];
        $data_array['Nationality']=$_GET['nationality'];
        echo "<h1 align=\"center\">Students Information</h1>";
        echo "<table border=\"1\" align=\"center\">";
        foreach($data_array as $x => $value) {
            
            echo "<tr><th>$x</th> <td> $value</td></tr>" ;
    }
        echo "</table>";
        // echo " Hi " ;
        // echo $data_array['Name']." ",$data_array['Father Name'];
        // echo "<br>This is your Address, please confirm..,<br>" ;
        // echo $data_array['Street'] .",<br>" ,$data_array['Area'] .",<br>" ,$data_array['Post']. ",<br>" ,$data_array['District'] .",<br>" ,$data_array['State'].",<br>" ,$data_array['Nationality'] .",<br>Thankyou";
}
    ?>
<!-- <form method="get">
        Name : <input type="text" name="name"><br>
        Father's Name: <input type="text" name="fathername"><br>
        Father's Occupation: <input type="text" name="occupation"><br>
        Mother's Name:<input type="text" name="mothername"><br>
        Street: <input type="text" name="street"><br>
        Area: <input type="text" name="area"><br>
        Post: <input type="text" name="post"><br>
        District: <input type="text" name="district"><br>
        State: <input type="text" name="state"><br>
        Nationality: <input type="text" name="nationality"><br>
        <input type="submit" value="Submit">
    </form> -->
</body>
</html>