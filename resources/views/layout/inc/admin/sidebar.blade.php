      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{Route('dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-plus-box menu-icon"></i>
              <span class="menu-title">Add Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu ">
                <li class="list-arrow"><a class="nav-link" href="pages/ui-features/buttons.html">Add Scene</a></li>
                <li class="list-arrow"><a class="nav-link" href="{{Route('admin.product.index')}}">Add Movie</a></li>
                <li class="list-arrow"><a class="nav-link" href="{{Route('cast.create')}}">Add Cast</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-plus-box menu-icon"></i>
              <span class="menu-title">Product List</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu ">
                <li class="list-arrow"><a class="nav-link" href="pages/ui-features/buttons.html">Scenes List</a></li>
                <li class="list-arrow"><a class="nav-link" href="{{Route('admin.product.index')}}">Movie List</a></li>
                <li class="list-arrow"><a class="nav-link" href="{{Route('cast.index')}}">Cast List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Manager</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('user')}}"> User </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
