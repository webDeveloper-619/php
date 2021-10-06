<?php
    
    include "JotForm.php";
    
    $jotformAPI = new JotForm("902fe6c38d6fdfdcc704ad27f19fb626");
    $forms = $jotformAPI->getForms();
    
    foreach ($forms as $form) {
      //  print $form["title"];
    }


    
    try {
 

        $submissions = $jotformAPI->getSubmissions(0, 100, null, "created_at");
        echo "<pre>";
        print_r($submissions);
    }
    catch (Exception $e) {
        var_dump($e->getMessage());
    }
    
?>