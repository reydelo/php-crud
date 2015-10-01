<?php
class PencilModel
{
  protected $db;
  public function __construct(PDO $db)
  {
    $this->db = $db;
  }
  public function getAllPencils() {
    return $this->db->query('SELECT * FROM pencils ORDER BY vote_count DESC');
  }
}
?>
