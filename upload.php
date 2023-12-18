<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])) {
        $target_path="uploads/";
        $target_path=$target_path.basename($_FILES['uploadedfile']['name']);
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)) {
            echo "The file" . basename($_FILES['uploadedfile']['name']).  "has been upload";
            echo "<img src='$target_path'>";

        }else {
            echo "There was an error uploading the file,please try again";
        }
    }else {
        echo "<form method='POST' enctype='multipart/form-data'>
        <input type='hidden' name='MAX_FILE_SIZE' value='100000'><br>
        Choose a file to upload:<input type='file' name='uploadedfile' ><br>
        <input type='submit' value='Upload File' name='submit'>
    </form>";
    }
   
    ?>
</body>
</html>