<?php

    function add($num1, $num2){
        return $num1+$num2;
    }

    function compare($val){
        $list = ['apple','orange','pear'];
        if(in_array($val,$list)){
            return true;
        }
        else {
            return false;
        }
    }

?>