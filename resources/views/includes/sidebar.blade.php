<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
       <div class="sidebar-brand-icon rotate-n-15">
           <i class="fas fa-laugh-wink"></i>
       </div>
       <div class="sidebar-brand-text mx-3">Admin Panel</div>
   </a>

   {{-- Writer --}}
   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
    Writters
    </div>

   <!-- Nav Item - Charts -->
   <li class="nav-item">
    <a class="nav-link" href="{{ route('writer.index')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Writer List</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('writer.create')}}">
        <i class="fas fa-fw fa-plus"></i>
        <span>Add Writer</span></a>
    </li>

   {{-- Book --}}
   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
    Books
    </div>

   <!-- Nav Item - Charts -->
   <li class="nav-item ">
    <a class="nav-link" href="{{ route('book.index')}}">
        <i class="fas fa-fw fa-book"></i>
        <span>Book List</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('book.create')}}">
        <i class="fas fa-fw fa-plus"></i>
        <span>Add Book</span></a>
    </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->