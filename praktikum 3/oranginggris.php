<?php

require_once "prang.php";

class oranginggris extends orang{

    //override
    public function ucapsalam() {
        echo "Hello My Name Is" . $this->nama . "<br>";
    }
}