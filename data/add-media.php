<?php
function add_images($image_name,$imagefolder){
        $image_new_add = "";
        $get_photo_name = $_FILES[$image_name]['name'];
        $get_photo_tmp = $_FILES[$image_name]['tmp_name'];
        $get_photo_size = $_FILES[$image_name]['size'];
        $get_photo_type = $_FILES[$image_name]['type'];
        $file_location = $imagefolder. '/' .$get_photo_name;
        if(move_uploaded_file($get_photo_tmp, $file_location)){
                $image_new_add = $file_location;
        }
        return $image_new_add;

    }
?>