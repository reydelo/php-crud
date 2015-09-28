<? php

// initial thoughts on pencil objects!
class Pencil {
  public $brand;
  public $grade;
  public $mechanical = false;
  public $vote_count = 0;

  function __construct($brand, $grade) {
    $this->brand = $brand;
    $this->grade = $grade;
  }

  public function upVote() {
    // returns pencil with increment
    ++$this->vote_count;
    // returns pencil, then increment $this->vote++;
  }
}

// create a new pencil object and increase it's vote!
$pencil = new Pencil("Ticonderoga", "HB");
$pencil.upVote();

?>
