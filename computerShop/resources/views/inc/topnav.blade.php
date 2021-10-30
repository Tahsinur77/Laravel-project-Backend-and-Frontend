<div class="navbar">
@foreach(json_decode(session('pCategorys')) as $category)
<div class="dropdown">
  <button class="dropbtn">{{$category}}
     <i class="fa fa-caret-down"></i> 
  </button>

  <div class="dropdown-content">
    @foreach(json_decode(session($category)) as $type)
    <a href="#">{{$type}}</a>
    @endforeach
    <a href="#">Show All</a>
  </div>

</div> 
@endforeach
</div>
