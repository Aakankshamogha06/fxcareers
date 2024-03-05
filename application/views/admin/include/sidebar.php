
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="<?=base_url()?>" class="text-nowrap logo-img">
			<img src="<?=base_url()?>public/web/img/logo.png"
 width="180" alt="" />

          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"><b style="font-size:20px;">HOME</b></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin/dashboard '); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-dashboard"></i>
                </span>
                <span class="hide-menu">DASHBOARD</span>
              </a>
            </li>
			<li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin/users'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">USER</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin/seo/seo_view'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-seo"></i>
                </span>
                <span class="hide-menu">SEO</span>
              </a>
            </li>
            
			<li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin/blog_category/blog_category_view'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-blogger"></i>
                </span>
                <span class="hide-menu">BLOGS CATEGORY</span>
              </a>
            </li>
			<li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin/blog_detail/blog_detail_view'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-blogger"></i>
                </span>
                <span class="hide-menu">BLOGS DETAIL</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin/gallery/gallery_view'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-gallery"></i>
                </span>
                <span class="hide-menu">GALLERY</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('admin/sub_gallery/sub_gallery_view'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-blogger"></i>
                </span>
                <span class="hide-menu">SUB GALLERY</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"><b style="font-size:20px;">AUTH</b></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?=base_url('admin/auth/login')?>" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">LOGOUT</span>
              </a>
            </li> 
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->