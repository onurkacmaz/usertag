<?php
/**
 * Created by PhpStorm.
 * User: Onur
 * Date: 11.12.2016
 * Time: 15:05
 */

    function usertag($variable) {

        $pattern = '/@((\@\;(.+?)\@\;)|(.[^ ]+))\s{0,}/';
        $variable = preg_replace($desen, '<a href="/$1">$0</a>', $variable);

        echo $variable;

    }

    echo usertag("Hello, my name is Onur. I tagged @Mehmet");

?>