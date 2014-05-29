<?php

    //var_dump($recieved_files['media_file']['tmp_name']);
    var_dump($recieved_files);
    var_dump($recieved_post);
    
    $target_path = $ApplicationConfiguration["FileDatabaseTemp"];

    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
        // For testing:
        echo "The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded";
        // Queue encode proceedure:
        // ... Convert $uploaded_name to $unique_media_name 480 / 720...
    }  else{
        problem_happened("500: Your data couldn't be uploaded. Something failed.");
    }

// encode job out


// database tasks
