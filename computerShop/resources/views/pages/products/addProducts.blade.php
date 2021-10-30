@extends('Layouts.app')
@section('addProducts')

  <form action="{{route('products')}}" method = "post" enctype="multipart/form-data">
    
    {{csrf_field()}}
    <label for="category">Category:</label>
    <input type="text" id="category" name="category"><br><br>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type"><br><br>

    <label for="pId">Product ID:</label>
    <input type="text" id="pId" name="pId"><br><br>

    <label for="pname">Product name:</label>
    <input type="text" id="pname" name="pname"><br><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br><br>

    <label for="quantity">Quantity:</label>
    <input type="text" id="quantity" name="quantity"><br><br>



    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <div class="file-upload">
      <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

      <div class="image-upload-wrap">
        <input class="file-upload-input" type='file' id = "pic" name = "pic" onchange="readURL(this);" accept="image/*" />
        <div class="drag-text">
          <h3>Drag and drop a file or select add Image</h3>
        </div>
      </div>
      <div class="file-upload-content">
        <img class="file-upload-image" src="#" alt="your image" />
        <div class="image-title-wrap">
          <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
        </div>
      </div>
    </div>

    <script src = "{{asset('js/picturePreview.js')}}"> </script>








  

    <!-- <div class="holder">
        <img id="imgPreview" src="#" alt="pic" width=200 height= 200 />
    </div>

    <input type="file" id="pic" name="pic" >
    <label for="pic">Add Picture:</label>

    <script>
      $(document).ready(()=>{
      $('#pic').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
      });
    </script> -->

  

    <label for="specification">Product Specification:</label>

    

    <table class = "table table-bordered" id = "specification">

    <tr>
      <th>Component</th>
      <th>Model</th>
      <th>Button</th>
    </tr>

    <tr>
      <td><input type="text" name = "component[]" id = "component" class = "form-control name-list"></td>
      <td><input type="text" name = "model[]" id = "model" class = "form-control name-list"></td>
      <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td> 
      
    </tr>

    </table>

    <script src = "{{asset('js/addProduct.js')}}"> </script>

    <!-- <script>  
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
      </script> -->

    <input type="submit" value="Submit">
  </form>
  

@endsection
