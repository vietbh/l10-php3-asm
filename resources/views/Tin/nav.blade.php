<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('tin.index') }}">Trang chủ</a>
      </li>
      @foreach ($tinTL as $tl)
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tin.category',['idTL'=> $tl->id]) }}">{{$tl->category_nm}}</a>
      </li>     
    @endforeach
  </ul>
</div>
</nav>