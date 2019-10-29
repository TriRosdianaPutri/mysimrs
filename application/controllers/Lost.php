<? php

/**
* 
*/
class ClassName extends AnotherClass{
	
	public function _contruct(){
		parent ::_contruct();
	}
	public function index(){
		//echo "<h1> Hello This Is 404 Page</h1>";
		//echo "<h2> Your Page Is Not Found</h2>";
		$this->load->view('viewlost');
	}
}