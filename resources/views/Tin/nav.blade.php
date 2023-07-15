<div class="main-menu d-none d-md-block">
  <nav>                  
      <ul id="navigation">    
          <li><a href="{{ route('tin.index') }}">Trang chủ</a></li>
          {{-- <li><a href="categori.html">Danh mục</a></li> --}}
          <li><a href="#">Danh mục</a>
              <ul class="submenu">
                @foreach ($tinTL as $tl)
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('tin.category',['idTL'=> $tl->id]) }}">{{$tl->category_nm}}</a>
                </li>     
                @endforeach
                
              </ul>
          </li>
          <li><a href="about.html">Thông tin</a></li>
          <li><a href="latest_news.html">Tin mới nhất</a></li>
          <li><a href="contact.html">Liên hệ</a></li>
      </ul>
  </nav>
</div>
</div>             
<div class="col-xl-2 col-lg-2 col-md-4">
<div class="header-right-btn f-right d-none d-lg-block">
  <i class="fas fa-search special-tag"></i>
  <div class="search-box">
      <form action="#">
          <input type="text" placeholder="Search">
          
      </form>
  </div>
</div>
</div>
<!-- Mobile Menu -->
<div class="col-12">
<div class="mobile_menu d-block d-md-none"></div>
</div>


{{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
</nav> --}}