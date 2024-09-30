<!--visibility.php -->
<?php

class visibility{
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';

    function tampilkanProperty(){
        echo "Ini diakses di dalam kelas <br>";
        echo "Public : " , $this->public , '<br>';
        echo "Protected : " , $this->protected , '<br>';
        echo "Private : " , $this->private , '<br>';
    }
}