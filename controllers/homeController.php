<?

// AutoLoad Class -> Class of Name the same File of Name
spl_autoload_register('Loader');
function Loader($className){
	$path = "models/";
	$extension = ".php";
	$fullPath = $path.$className.$extension;
	include_once $fullPath;
}

class PostController {

	public function getPost() {

		// use Static with Publlic
		// echo PostModel::$name="LUC";

		// use Static with Protected
		// echo PostModel::all("LUC");
		

		// use Normal 
		// $post = new PostModel();
		// $post->set_ten('Luc');
		// echo $post->get_ten();

		// $index = 1;

		// require_once('view/header/header.php');
		require_once('view/home/index.php');
		// require_once('view/footer/footer.php');


	}
}

?>