<?php

// Data Structures: Array
// Algorithms: Insertion Sort, Merge Sort


// Parent classes
abstract class AbstractClass{

    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    abstract protected function insertion_Sort($my_array);
    abstract protected function setFName($fname);
    abstract protected function getFName();
    
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

// Parent classes
abstract class AbstractClass2{

    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    abstract protected function merge_sort($my_array);
    abstract protected function setFName($fname);
    abstract protected function getFName();
    
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
  
    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

// Child classes
class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return " Sort $this->name !"; 
    }
    public function prefixValue($prefix) {
        return "{$prefix}";
    }
    public function insertion_Sort($my_array)
    {
	for($i = 0; $i < count($my_array); $i++){
		$val = $my_array[$i];
		$j = ($i - 1);
		while($j >= 0 && $my_array[$j] > $val){
			$my_array[$j + 1] = $my_array[$j];
			$j--;
		}
		$my_array[$j + 1] = $val;
	}
     return $my_array;
    }    
    // set user's first name
   public function setFName($fname)
   {
	$this->fname = $fname;
   }
 
   // get user's first name
   public function getFName()
   {
	return $this->fname;
   }
}

// Child classes
class ConcreteClass2 extends AbstractClass2
{ 
    public function getValue() {
       return " Sort $this->name !";  
    } 
    
    public function prefixValue($prefix) {
        return "{$prefix}";
    }
   public function merge_sort($my_array){
	if(count($my_array) == 1 ) return $my_array;
	$mid = count($my_array) / 2;
        $left = array_slice($my_array, 0, $mid);
        $right = array_slice($my_array, $mid);
	$left = merge_sort($left);
	$right = merge_sort($right);
	return merge($left, $right);
   }
   public function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
		if($left[0] > $right[0]){
			$res[] = $right[0];
			$right = array_slice($right , 1);
		}else{
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		$res[] = $left[0];
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		$res[] = $right[0];
		$right = array_slice($right, 1);
	}
	return $res;
   }
   
   // set user's first name
   public function setFName($fname)
   {
	$this->fname = $fname;
   }
 
   // get user's first name
   public function getFName()
   {
	return $this->fname;
   }
}

// need to fill array from the db
$test_array = array(3, 0, 2, 5, -1, 4, 1);
$test_array2 = array(100, 54, 7, 2, 5, 4, 1);
//print_r($test_array);
//print_r($test_array2);

$class1 = new ConcreteClass1("Algorithm");
$class1->setFName('Simple');

echo $class1->getFName();

$class1->printOut();

echo "<br>" .  $class1->prefixValue('This is insertion sort:') ."\n";
print_r($class1->insertion_Sort($test_array));


$class2 = new ConcreteClass2("Algorithm");

$html .= '<br>';
echo $html;

$class2->setFName('Complex');

echo $class2->getFName();

$class2->printOut();

echo "<br>" . $class2->prefixValue('This is merge sort:') ."\n";
print_r($class1->insertion_Sort($test_array2));








