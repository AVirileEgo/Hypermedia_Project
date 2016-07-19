function controlla(){
    
    $.ajax({
  url: 'php/inserisci.php',
  success: function() {
    alert('inserimento avvenuto con successo.');
  }
});
}



