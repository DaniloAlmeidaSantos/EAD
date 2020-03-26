function pesquisaMaterias(name) {
    $.ajax({
      url: "../source/includes/pesquisaMaterias.php",
      method: "POST",
      data: {name:name},
      success: function(data){
        $('#resultado').html(data);
      }
    });
  }
  
  $(document).ready(function(){
    pesquisaMaterias();
  
    $('#txtPesquisar').keydown(function(){
      var name = $(this).val();
      if (name != ''){
        pesquisaMaterias(name);
      }
      else
      {
        pesquisaMaterias();
      }
    });
  });

