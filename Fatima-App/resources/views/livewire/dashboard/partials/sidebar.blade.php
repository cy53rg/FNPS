<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark bg-black" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <img src= "" alt="Avatar" class="avatar">
                
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dash.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Actions</div>
                <a class="nav-link collapsed" href="{{route('dash.users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{route('dash.contact')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div>Contacts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{route('dash.parentsComments')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>Parent Comment
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{route('dash.staff')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>Staffs
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{route('dash.gallery')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>Gallery
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
               
               
                
                
            </div>
        </div>
        <div class="sb-sidenav-footer" style="background-color: darkblue;">
            <div class="small">Logged in as:</div>
            
        </div>
    </nav>
</div>
