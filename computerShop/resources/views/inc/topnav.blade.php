<div class="navbar">
@foreach(json_decode(session('pCategorys')) as $category)
<div class="dropdown">
  <a href="/products/list/{{$category}}">
    <button class="dropbtn">{{$category}}
      <i class="fa fa-caret-down"></i> 
    </button>
  </a>
  

  <div class="dropdown-content">
    @foreach(json_decode(session($category)) as $type)
    <a href="/products/list/{{$category}}/{{$type}}">{{$type}}</a>
    @endforeach
    <a href="#">Show All</a>
  </div>

</div> 
@endforeach
</div>
