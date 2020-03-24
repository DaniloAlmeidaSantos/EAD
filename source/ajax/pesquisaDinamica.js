function searchTorneios(name) {
    $.ajax({
      url: "includes/searchTorneios.php",
      method: "POST",
      data: {name:name},
      success: function(data){
        $('#resultTorneios').html(data);
      }
    });
  }
  
  $(document).ready(function(){
    searchTorneios();
  
    $('#searchTorneios').keydown(function(){
      var name = $(this).val();
      if (name != ''){
        searchTorneios(name);
      }
      else
      {
        searchTorneios();
      }
    });
  });