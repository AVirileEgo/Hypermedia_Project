function acquista(){
    
    $.ajax({
  url: 'php/acquista.php',
  success: function() {
    alert('Acquisto avvenuto');
  }
});
}



