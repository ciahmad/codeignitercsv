<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileImport extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model('file_model');
	}

	public function index()
	{
		//echo 1; die();
		$this->load->view('upload');

		if(isset($_POST['submit'])){
			$file=$_FILES['file']['tmp_name'];
		//	echo $file; die();
			$handel = fopen($file, 'r');

			$c = 0;
			while (($filepos= fgetcsv($handel,1000,','))!==false)
			{
				echo "<pre>";
				print_r($filepos);
				echo "<pre>";
				if($c>0)
				{
					$this->file_model->savefile($filepos);
				}
				$c=$c+1;
			}
			echo "file import successfully";
		}
		
	}

}

/* End of file fileImport.php */
/* Location: ./application/controllers/fileImport.php */