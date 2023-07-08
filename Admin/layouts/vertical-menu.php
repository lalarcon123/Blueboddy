<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Blueboddy</span>
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Minia</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?php //echo $language["Search"]; ?>">
                    <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                </div>
            </form>
            -->
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
        
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="<?php echo $language["Search"]; ?>" aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>
<!--
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item right-bar-toggle me-2">
                    <i data-feather="settings" class="icon-lg"></i>
                </button>
            </div>
-->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item topbar-light bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $language["Shawn_L"]; ?>.</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="apps-contacts-profile.php"><i class="mdi mdi-face-man font-size-16 align-middle me-1"></i> <?php echo $language["Profile"]; ?></a>
                    <a class="dropdown-item" href="auth-lock-screen.php"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> <?php echo $language["Lock_screen"]; ?> </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?php echo $language["Logout"]; ?></a>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo $language["Menu"]; ?></li>

                <li>
                    <a href="index.php">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"><?php echo $language["Dashboard"]; ?></span>
                    </a>
                </li>




                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps"><?php echo 'Administracion'; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="apps-calendar.php">
                                <span data-key="t-calendar"><?php echo 'Usuarios'; ?></span>
                            </a>
                        </li>
        
                        <li>
                            <a href="apps-chat.php">
                                <span data-key="t-chat"><?php echo $language["Chat"]; ?></span>
                            </a>
                        </li>
        
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email"><?php echo $language["Email"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox.php" data-key="t-inbox"><?php echo $language["Inbox"]; ?></a></li>
                                <li><a href="apps-email-read.php" data-key="t-read-email"><?php echo $language["Read_Email"]; ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices"><?php echo $language["Invoices"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-invoices-list.php" data-key="t-invoice-list"><?php echo $language["Invoice_List"]; ?></a></li>
                                <li><a href="apps-invoices-detail.php" data-key="t-invoice-detail"><?php echo $language["Invoice_Detail"]; ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-contacts"><?php echo $language["Contacts"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-contacts-grid.php" data-key="t-user-grid"><?php echo $language["User_Grid"]; ?></a></li>
                                <li><a href="apps-contacts-list.php" data-key="t-user-list"><?php echo $language["User_List"]; ?></a></li>
                                <li><a href="apps-contacts-profile.php" data-key="t-profile"><?php echo $language["Profile"]; ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="">
                                <span data-key="t-blog"><?php echo $language["Blog"]; ?></span>
                                <span class="badge rounded-pill badge-soft-danger float-end" key="t-new"><?php echo $language["New"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-blog-grid.php" data-key="t-blog-grid"><?php echo $language["Blog_Grid"]; ?></a></li>
                                <li><a href="apps-blog-list.php" data-key="t-blog-list"><?php echo $language["Blog_List"]; ?></a></li>
                                <li><a href="apps-blog-detail.php" data-key="t-blog-details"><?php echo $language["Blog_Details"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps"><?php echo $language["Apps"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="apps-calendar.php">
                                <span data-key="t-calendar"><?php echo $language["Calendar"]; ?></span>
                            </a>
                        </li>
        
                        <li>
                            <a href="apps-chat.php">
                                <span data-key="t-chat"><?php echo $language["Chat"]; ?></span>
                            </a>
                        </li>
        
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email"><?php echo $language["Email"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox.php" data-key="t-inbox"><?php echo $language["Inbox"]; ?></a></li>
                                <li><a href="apps-email-read.php" data-key="t-read-email"><?php echo $language["Read_Email"]; ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices"><?php echo $language["Invoices"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-invoices-list.php" data-key="t-invoice-list"><?php echo $language["Invoice_List"]; ?></a></li>
                                <li><a href="apps-invoices-detail.php" data-key="t-invoice-detail"><?php echo $language["Invoice_Detail"]; ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-contacts"><?php echo $language["Contacts"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-contacts-grid.php" data-key="t-user-grid"><?php echo $language["User_Grid"]; ?></a></li>
                                <li><a href="apps-contacts-list.php" data-key="t-user-list"><?php echo $language["User_List"]; ?></a></li>
                                <li><a href="apps-contacts-profile.php" data-key="t-profile"><?php echo $language["Profile"]; ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="">
                                <span data-key="t-blog"><?php echo $language["Blog"]; ?></span>
                                <span class="badge rounded-pill badge-soft-danger float-end" key="t-new"><?php echo $language["New"]; ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-blog-grid.php" data-key="t-blog-grid"><?php echo $language["Blog_Grid"]; ?></a></li>
                                <li><a href="apps-blog-list.php" data-key="t-blog-list"><?php echo $language["Blog_List"]; ?></a></li>
                                <li><a href="apps-blog-detail.php" data-key="t-blog-details"><?php echo $language["Blog_Details"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication"><?php echo $language["Authentication"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login.php" data-key="t-login"><?php echo $language["Login"]; ?></a></li>
                        <li><a href="pages-register.php" data-key="t-register"><?php echo $language["Register"]; ?></a></li>
                        <li><a href="pages-recoverpw.php" data-key="t-recover-password"><?php echo $language["Recover_Password"]; ?></a></li>
                        <li><a href="auth-lock-screen.php" data-key="t-lock-screen"><?php echo $language["Lock_Screen"]; ?></a></li>
                        <li><a href="auth-confirm-mail.php" data-key="t-confirm-mail"><?php echo $language["Confirm_Mail"]; ?></a></li>
                        <li><a href="auth-email-verification.php" data-key="t-email-verification"><?php echo $language["Email_Verification"]; ?></a></li>
                        <li><a href="auth-two-step-verification.php" data-key="t-two-step-verification"><?php echo $language["Two_Step_Verification"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages"><?php echo $language["Pages"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.php" data-key="t-starter-page"><?php echo $language["Starter_Page"]; ?> </a></li>
                        <li><a href="pages-maintenance.php" data-key="t-maintenance"><?php echo $language["Maintenance"]; ?></a></li>
                        <li><a href="pages-comingsoon.php" data-key="t-coming-soon"><?php echo $language["Coming_Soon"]; ?></a></li>
                        <li><a href="pages-timeline.php" data-key="t-timeline"><?php echo $language["Timeline"]; ?></a></li>
                        <li><a href="pages-faqs.php" data-key="t-faqs"><?php echo $language["FAQs"]; ?></a></li>
                        <li><a href="pages-pricing.php" data-key="t-pricing"><?php echo $language["Pricing"]; ?></a></li>
                        <li><a href="pages-404.php" data-key="t-error-404"><?php echo $language["Error_404"]; ?></a></li>
                        <li><a href="pages-500.php" data-key="t-error-500"><?php echo $language["Error_500"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="layouts-horizontal.php">
                        <i data-feather="layout"></i>
                        <span data-key="t-horizontal"><?php echo $language["Horizontal"]; ?></span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->