function editPencil(id) {
  window.location.href='update.php?edit='+id;
}

function deletePencil(id) {
  window.location.href='index.php?delete='+id;
}

function upVotePencil(id) {
  window.location.href='index.php?vote='+id;
}
