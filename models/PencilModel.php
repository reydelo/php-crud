<?php
class PencilModel
{
  protected $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function get_pencils() {
    $res = $this->db->query('SELECT * FROM pencils');
    return $res->fetchAll(PDO::FETCH_ASSOC);
  }

  public function get_pencil_by_id($id) {
    $res = $this->db->query('SELECT * FROM pencils WHERE id='.$id);
    return $res->fetch(PDO::FETCH_ASSOC);
  }

  public function register_new_pencil($form_data) {
    // the $form_data argument comes from the form method POST
    // so $form_data['brand'] == req.body.brand
    return $this->db->query('INSERT INTO pencils (brand, grade) VALUES ($form_data[0], $form_data[1])');
  }

  public function loan_pencil($form_data, $id) {
    return $this->db->query('UPDATE pencils SET brand=$form_data[0] grade=$form_data[1] WHERE id='.$id);
  }

  public function delete_pencil($id) {
    return $this->$db->query('DELETE FROM pencils WHERE id='.$id);
  }
}

?>
