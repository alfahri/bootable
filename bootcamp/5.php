<?php

function minmax($data)
    {
        echo '['.min($data).','.max($data).']';
        return $data;
    }
    $data = ['a','b','d','c'];
    minmax($data);

?>