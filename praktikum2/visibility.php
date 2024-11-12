<!-- visibility.php -->
 >?php 

 class visibility{
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';

    function tampilkanproperty(){
        echo "ini diakses didalam kelas <br>";
        echo "public"