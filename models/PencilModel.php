<?php
class PencilModel
{
  protected $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function getAllPencils() {
    return $this->db->query('SELECT * FROM pencils');
  }

  public function getOnePencil($id) {
    return $this->db->query('SELECT * FROM pencils WHERE id=$id');
  }

  public function updatePencil($id, $brand, $grade) {
    return $this->db->query("UPDATE pencils SET brand='$brand',grade='$grade' WHERE id=$id");
  }
}

?>
