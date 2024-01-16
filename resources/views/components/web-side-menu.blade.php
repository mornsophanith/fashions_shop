<div class="catagories-side-menu">
    <div id="sideMenuClose">
        <i class="bx bx-x"></i>
    </div>
    <div class="nav-side-menu">
        <div class="menu-list">
            <h6>Categories</h6>
            <ul id="menu-content" class="menu-content collapse out">
                @foreach($categories as $category)
                <li data-toggle="collapse" data-target="#{{$category->name}}" class="collapsed active">
                    <a href="#">{{$category->name}} <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu collapse" id="{{$category->name}}">
                        <li>
                        <a href="#">Midi Dresses</a>
                        </li>
                        <li>
                        <a href="#">Maxi Dresses</a>
                        </li>
                        <li>
                        <a href="#">Prom Dresses</a>
                        </li>
                        <li>
                        <a href="#">Little Black Dresses</a>
                        </li>
                        <li>
                        <a href="#">Mini Dresses</a>
                        </li>
                    </ul>
                </li>
                @endforeach
                
            </ul>
            <div class="footer-sidebar">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ ('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>