$(document).ready(function(){  
  var i=1;  
  $('#add').click(function(){  
      i++;  
      $('#specification').append('<tr id="row'+i+'"><td><input type="text" name="component[]"  class="form-control name_list" /></td><td><input type="text" name="model[]"  class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
      
  });  
  $(document).on('click', '.btn_remove', function(){  
      var button_id = $(this).attr("id");   
      $('#row'+button_id+'').remove();  
  });  
   
});