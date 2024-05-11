<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link {{Request::is('admin/dashboard') ? 'active' : ''}}" href="{{url('/admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                {{--<a class="nav-link {{Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'collapse active' : 'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory"
                    aria-expanded="false" aria-controls="collapseCategory">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'show' : ''}}" id="collapseCategory" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::is('admin/add-category') ? 'active' : ''}}" href="{{url('admin/add-category')}}">Add Category</a>
                        <a class="nav-link {{Request::is('admin/category') || Request::is('admin/edit-category/*') ? 'active' : ''}}" href="{{url('admin/category')}}">View Category</a>
                    </nav>
                </div>
                --}}

                <a class="nav-link {{Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/edit-post/*') ? 'collapse active' : 'collapsed'}} " href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts"
                    aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/edit-post/*') ? 'show' : ''}}" id="collapsePosts" aria-labelledby="headingThree"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::is('admin/add-post') ? 'active' : ''}}" href="{{url('admin/add-post')}}">Add Post</a>
                        <a class="nav-link {{Request::is('admin/posts') || Request::is('admin/edit-post/*') ? 'active' : ''}}" href="{{url('admin/posts')}}">View Posts</a>
                    </nav>
                </div>

                <a class="nav-link {{Request::is('admin/embed') || Request::is('admin/add-embed') || Request::is('admin/edit-embed/*') ? 'collapse active' : 'collapsed'}} " href="#" data-bs-toggle="collapse" data-bs-target="#collapseEmbeds"
                    aria-expanded="false" aria-controls="collapseEmbeds">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>
                    Embeds
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{Request::is('admin/embed') || Request::is('admin/add-embed') || Request::is('admin/edit-embed/*') ? 'show' : ''}}" id="collapseEmbeds" aria-labelledby="headingFour"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::is('admin/add-embed') ? 'active' : ''}}" href="{{url('/admin/add-embed')}}">Add Embed</a>
                        <a class="nav-link {{Request::is('admin/embed') || Request::is('admin/edit-embed/*') ? 'active' : ''}}" href="{{url('admin/embed')}}">View Embeds</a>
                    </nav>
                </div>

                <a class="nav-link {{Request::is('admin/jadwal') || Request::is('admin/add-jadwal') || Request::is('admin/edit-jadwal/*') ? 'collapse active' : 'collapsed'}} " href="#" data-bs-toggle="collapse" data-bs-target="#collapseJadwal"
                    aria-expanded="false" aria-controls="collapseJadwal">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>
                    Jadwal
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{Request::is('admin/jadwal') || Request::is('admin/add-jadwal') || Request::is('admin/edit-jadwal/*') ? 'show' : ''}}" id="collapseJadwal" aria-labelledby="headingFive"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::is('admin/add-jadwal') ? 'active' : ''}}" href="{{url('/admin/add-jadwal')}}">Add jadwal</a>
                        <a class="nav-link {{Request::is('admin/jadwal') || Request::is('admin/edit-jadwal/*') ? 'active' : ''}}" href="{{url('admin/jadwal')}}">View Jadwal</a>
                    </nav>
                </div>

                <a class="nav-link {{ Request::is('admin/datatable') ? 'active' : '' }}" href="{{ url('/admin/datatable') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-pen"></i></div>
                    Form Record
                </a>


                <a class="nav-link {{Request::is('admin/users') ? 'active' : ''}}" href="{{url('/admin/users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>

            </div>
        </div>
        
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
