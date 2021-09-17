<?

class PostModel {

	protected static $name;
	public $lastName;

	// public function __construct($name,$lastName){
	// 	$this->name = $name;
	// 	$this->lastName = $lastName;
	// }

	// public function __destruct(){
	// 	echo " Destroy";
	// }

	public static function set_ten($name){
		PostModel::$name = $name;
	}

	public static function get_ten(){
		return self::$name;
	}

	public static function all($name){
		PostModel::set_ten($name);
		return PostModel::get_ten();
	}
}

// class ten extends PostModel{

// }

?>