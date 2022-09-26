<?php

function user_type($id = false)
{
    $userTypeArray   = config('role.OPTIONS');


    echo '<option>Select User Type</option>';
    foreach ($userTypeArray as $key => $value) {
        # code...
        if($id  == $value):
            echo '<option selected value='.$value.'>'.$key.'</option>';
        else : 
            echo '<option value='.$value.'>'.$key.'</option>';
        endif;
    }

    // echo "helper function";
}

/*
* debug code
*/
function aprint($data, $isDie = 1){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    if( $isDie )
        die();
}














?>