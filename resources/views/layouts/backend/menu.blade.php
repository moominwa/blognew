  {{-- <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1e09bd">
      <!-- Brand Logo -->
      <a href="{{ route('dashboard') }}" class="brand-link">
          <span class="brand-text font-weight-light ">แอดมิน</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="storage/{{ auth ()->user()->profile_photo_path }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name ??''}}</a>
        </div>
      </div> --}}

          <!-- SidebarSearch Form -->
          {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p> จัดการข้อมูลสมัคร
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('profile') }}" class="nav-link active">
                                  <i></i>
                                  <p>เปิด-ปิดการรับสมัคร</p>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link active">
                                <i></i>
                                <p>อนุมัติข้อมูลการสมัคร</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link active">
                                <i></i>
                                <p>อนุมัติการชำระเงิน</p>
                            </a>
                        </li>

                      </ul>
                  </li>
                  <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class=" fas fa-tachometer-alt"></i>
                        <p> จัดการข้อมูลแข่งขัน
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link active">
                                <i></i>
                                <p>แบ่งกลุ่มการแข่งขัน</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link active">
                                <i></i>
                                <p>จัดตารางแข่งขัน</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link active">
                                <i ></i>
                                <p>จัดการผลการแข่งขัน</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link active">
                                <i ></i>
                                <p>จัดการสถิติการแข่งขัน</p>
                            </a>
                        </li>


                    </ul>
                </li>
              </ul>
          </nav>

          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside> --}}
