  <!-- ========== Left Sidebar Start ========== -->
  <div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg"  >
            <img style="width: 60px; height: 60px" src="/assets/images/logo_m.jpg" alt="logo">
        </span>
        <span class="logo-sm">
            <img style="width: 40px; height: 40px" src="/assets/images/logo_m.jpg" alt="logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="/assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="/assets/images/logo-dark-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="/assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">



            <li class="side-nav-item">
                <a href="{{ route('home') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a href="{{ route('home') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Categorias </span>
                </a>
            </li>


           <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarUsuario" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="ri-user-follow-line"></i>
                    <span> Usuarios </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarUsuario">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/usuarios">Usuarios</a>
                        </li>
                        <li>
                            <a href="/roles">Roles</a>
                        </li>
                        <li>
                            <a href="/blogs">Blogs</a>
                        </li>
                    </ul>
                </div>
           </li>
           <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Calendar </span>
                </a>
           </li>
           <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                <i class="uil-envelope"></i>
                <span> Email </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="apps-email-inbox.html">Inbox</a>
                    </li>
                    <li>
                        <a href="apps-email-read.html">Read Email</a>
                    </li>
                </ul>
            </div>
        </li>








        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
