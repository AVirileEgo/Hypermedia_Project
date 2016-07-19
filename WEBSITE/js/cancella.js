function cancella(){
    
    $.ajax({
  url: 'php/cancella.php',
  success: function() {
    alert('Eliminazione Avvenuta');
  }
});
}



