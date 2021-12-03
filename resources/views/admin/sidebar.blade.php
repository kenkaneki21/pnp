 <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
             
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Menu</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('enroll.student') }}">
            <i class="mdi mdi-account-search menu-icon"></i>
            <span class="menu-title">Enroll</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account-multiple menu-icon"></i>
            <span class="menu-title">Entities</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('entity.register') }}"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('entity.all') }}"> Entity List </a></li>
              
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('course.list') }}">
            <i class="mdi mdi-library-books menu-icon"></i>
            <span class="menu-title">Course</span>
          </a>
        </li>
       
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('user.record') }}">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">User</span>
          </a>
        </li>
        
        
         
        
        
         
        <li class="nav-item">
          <a class="nav-link" href="http://www.bootstrapdash.com/demo/spica/template/">
            <button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
          </a>
        </li>
      </ul>
    </nav>