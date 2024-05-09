<?php
    function binbCreator($num=5,$sufix=3){
        $consonants = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
        $vowels = array('a','e','i','o','u');
        $binResult=array();
        for($cont=1;$cont<=$num;$cont++){
            $binWord = 'binb'.$vowels[array_rand($vowels)];
            while(strlen($binWord)<=$sufix+3){
                $binWord.= (rand(0,1) ? $consonants[array_rand($consonants)] : $vowels[array_rand($vowels)]);
            }
            array_push($binResult,$binWord);
        }
        return $binResult;
    }
?>