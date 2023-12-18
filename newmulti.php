<?php 
if(isset($_POST['upload'])) {

    $images=$_FILES['images'];
    $num_of_images=count($images['name']);
    
    for ($i=0; $i < $num_of_images; $i++) { 
        $image_name=$images['name'][$i];
        
    }
    echo $image_name[];
//         $tmp_name=$images['tmp_name'][$i];
//         $error=$images['error'][$i];
//         if($error === 0) {
//             $img_ex=pathinfo($image_name,PATHINFO_EXTENSION);
//             $img_ex_lc = strtolower($img_ex);
            
//             $allowed_exs= array('jpg','jpeg','png','jfif');
            
//             if(in_array($img_ex_lc,$allowed_exs)) {

//             }else{ 
//             $em="You can't upload this file type ";
//             header("Location: index.php?error=$em");
//         }

//         }else{
//             $em="Unknown Errror Occurred while uploading";
//             header("Location: index.php?error=$em");
//         }
//     }
//     // echo "<pre>";
//     // print_r($_FILES['images']['name'][0]);
 }
?>