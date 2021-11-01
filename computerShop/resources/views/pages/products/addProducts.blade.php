@extends('Layouts.app')
@section('addProducts')

  <form action="{{route('products')}}" method = "post" enctype="multipart/form-data">
    
    {{csrf_field()}}
    <div class="col-12">
    <div class="row g-3">
      <div class="col-md-4">
        <label for="category" class="form-label">Category:</label>
        <input type="text" class="form-control" id="category" name="category"  value="{{old('category')}}">
        @error('category')
                <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="type" class="form-label">Type:</label>
        <input type="text" class="form-control" id="type" name="type"  value="{{old('type')}}">
        @error('type')
                <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>


    <div class="row g-3">
      <div class="col-md-4">
        <label for="pId" class="form-label">Product ID:</label>
        <input type="text" class="form-control" id="pId" name="pId"  value="{{old('pId')}}">
        @error('pId')
                <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="pname" class="form-label">Product name:</label>
        <input type="text" class="form-control" id="pname" name="pname"  value="{{old('pname')}}">
        @error('pname')
                <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>


    <div class="row g-3">
      <div class="col-md-4">
        <label for="price" class="form-label">Price:</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
        @error('price')
                <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="text" class="form-control" id="quantity" name="quantity" value="{{old('quantity')}}">
        @error('quantity')
                <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
</div>



    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <div class="file-upload">
      <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

      <div class="image-upload-wrap">
        <input class="file-upload-input" type='file' id = "pic" name = "pic" onchange="readURL(this);" accept="image/*" />
        @error('pic')
                <span class="text-danger">{{$message}}</span>
        @enderror
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

    <h3><label class="p-3 mb-2 bg-body text-dark" for="specification">Product Specification:</label></h3>

    

    <table class = "table table-bordered" id = "specification">

      <tr>
        <th>Features</th>
        <th>Details</th>
        <th>Button</th>
      </tr>

      <tr>
        <td><input type="text" name = "component[]" id = "component" class = "form-control name-list"></td>
        <td><input type="text" name = "model[]" id = "model" class = "form-control name-list"></td>
        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>     
      </tr>

    </table>

    <script src = "{{asset('js/addProduct.js')}}"> </script>

    <br><br>
    <div class="d-grid gap-2 col-4 mx-auto">
        <input class="btn btn-success" type="submit" value="Submit">
    </div>
    <br><br>
  </form>
  

@endsection
