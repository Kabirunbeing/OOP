 <?php
  class Kabeer{
    public $access = 'nothing';
    public function expand($defaultV = 'override' ){
        $fetchData = $this->access;
        echo $fetchData;
        echo $defaultV;
    }
}
$product = new Kabeer();
// echo "/n";
echo $product->expand('I am overriding this value');    
?> 