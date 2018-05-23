<?php
/**
 *
 */
class ModelofUser extends CI_Model
{

  function getAllData()
  {
    $this->db->order_by('id','desc');
    $query = $this->db->get("user");
    return $query;
  }
}

 ?>
