<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model {

public function savefile($data)
{
	$filedata = array(
		'title'=>$data[1],
		'sale'=>$data[3],
		'price'=>$data[4],
		'status'=>$data[6],
	);

	$this->db->insert('test',$filedata);
}
	

}

/* End of file file_model.php */
/* Location: ./application/models/file_model.php */