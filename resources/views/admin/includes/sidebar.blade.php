 <!-- sidebar part here -->
<nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{URL::to('/admin')}}">
          <img src="{{URL::to('/public/admin/assets')}}/images/logo-black.png" width="100%" alt="">
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li>
            <a href="{{route('admin.dashboard')}}"  aria-expanded="false">
              Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('admin.portfolio')}}"  aria-expanded="false">
              Portfolio
            </a>
        </li>
        <li>
            <a href="{{route('admin.catagories')}}"  aria-expanded="false">
              Categories
            </a>
        </li>
    </ul>
</nav>
<!-- sidebar part end -->


