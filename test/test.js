var expect = chai.expect;
var should = chai.should();

describe("Create a new pencil object", function() {
  it('should start with vote_count of zero', function() {
    $pencil = new Pencil("Ticonderoga", "HB");
    expect('$pencil->vote').to.equal(0);
  });
  it('should increment vote_count by 1 with every vote')
    $pencil.upVote();
    expect('$pencil->vote').to.equal(1);
  });
};
