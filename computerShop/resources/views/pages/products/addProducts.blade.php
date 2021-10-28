@extends('Layouts.app')
@section('addProducts')

  <form action="">
    
    <label for="category">Category:</label>
    <input type="text" id="category" name="category"><br><br>

    <label for="category">Type:</label>
    <input type="text" id="type" name="type"><br><br>

    <label for="pname">Product name:</label>
    <input type="text" id="pname" name="pname"><br><br>

    <label for="category">Price:</label>
    <input type="text" id="price" name="price"><br><br>

    <label for="specification">Product Specification:</label>

    @php ($component = 0)
    @php ($model = 0)
        

    <div id = "more">
      <label for="component">Component</label>
      <input type="text" id = "compo{{$component}}" name = "comp{{$component}}">

      <label for="model">Model</label>
      <input type="text" id = "model{{$model}}" name = "model{{$model}}">

      @php ($component=$component+1)
      @php ($model=$model+1)
      
      <br><br>
    </div>
    <div id = "result" ></div>





    <input type ="button" id="myButton" value="Add more">
    


    <script>
      var x = 1;
          $(document).ready(function(){
            $("#myButton").click(function(){
              var template = $( $('#more').html() );
              $("#result").append(template.clone().attr('id','more'));
              x = x+1;
              var input = document.createElement('input');
              input.setAttribute("id",x);
              input.setAttribute("name",x);
            
            });
          });
    </script>



    <input type="submit" value="Submit">
  </form>
  

@endsection



