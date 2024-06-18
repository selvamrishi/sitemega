<?php
    if (!empty($_SESSION['lang'])) {
        $sessionLang = $_SESSION['lang'];
        require_once ('assets/lang-php/'.$sessionLang.'.php');
    } else {
        require_once ('assets/lang-php/en.php');
    }
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo $lang["Menu"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards"><?php echo $lang["Dashboard"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.php" key="t-default"><?php echo $lang["Default"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-danger float-end" key="t-hot"><?php echo $lang["Hot"]; ?></span>
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts"><?php echo $lang["Layouts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical"><?php echo $lang["Vertical"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar.php" key="t-light-sidebar"><?php echo $lang["Light_Sidebar"]; ?></a></li>
                                <li><a href="layouts-compact-sidebar.php" key="t-compact-sidebar"><?php echo $lang["Compact_Sidebar"]; ?></a></li>
                                <li><a href="layouts-icon-sidebar.php" key="t-icon-sidebar"><?php echo $lang["Icon_Sidebar"]; ?></a></li>
                                <li><a href="layouts-boxed.php" key="t-boxed-width"><?php echo $lang["Boxed_Width"]; ?></a></li>
                                <li><a href="layouts-preloader.php" key="t-preloader"><?php echo $lang["Preloader"]; ?></a></li>
                                <li><a href="layouts-colored-sidebar.php" key="t-colored-sidebar"><?php echo $lang["Colored_Sidebar"]; ?></a></li>
                                <li><a href="layouts-scrollable.php" key="t-scrollable"><?php echo $lang["Scrollable"]; ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal"><?php echo $lang["Horizontal"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.php" key="t-horizontal"><?php echo $lang["Horizontal"]; ?></a></li>
                                <li><a href="layouts-hori-topbar-light.php" key="t-topbar-light"><?php echo $lang["Topbar_Light"]; ?></a></li>
                                <li><a href="layouts-hori-boxed-width.php" key="t-boxed-width"><?php echo $lang["Boxed_Width"]; ?></a></li>
                                <li><a href="layouts-hori-preloader.php" key="t-preloader"><?php echo $lang["Preloader"]; ?></a></li>
                                <li><a href="layouts-hori-colored-header.php" key="t-colored-topbar"><?php echo $lang["Colored_Header"]; ?></a></li>
                                <li><a href="layouts-hori-scrollable.php" key="t-scrollable"><?php echo $lang["Scrollable"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages"><?php echo $lang["Pages"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication"><?php echo $lang["Authentication"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.php" key="t-login"><?php echo $lang["Login"]; ?></a></li>
                        <li><a href="auth-login-2.php" key="t-login-2"><?php echo $lang["Login_2"]; ?></a></li>
                        <li><a href="auth-register.php" key="t-register"><?php echo $lang["Register"]; ?></a></li>
                        <li><a href="auth-register-2.php" key="t-register-2"><?php echo $lang["Register_2"]; ?></a></li>
                        <li><a href="auth-recoverpw.php" key="t-recover-password"><?php echo $lang["Recover_Password"]; ?></a></li>
                        <li><a href="auth-recoverpw-2.php" key="t-recover-password-2"><?php echo $lang["Recover_Password_2"]; ?></a></li>
                        <li><a href="auth-lock-screen.php" key="t-lock-screen"><?php echo $lang["Lock_Screen"]; ?></a></li>
                        <li><a href="auth-lock-screen-2.php" key="t-lock-screen-2"><?php echo $lang["Lock_Screen_2"]; ?></a></li>
                        <li><a href="auth-confirm-mail.php" key="t-confirm-mail"><?php echo $lang["Confirm_Email"]; ?></a></li>
                        <li><a href="auth-confirm-mail-2.php" key="t-confirm-mail-2"><?php echo $lang["Confirm_Email_2"]; ?></a></li>
                        <li><a href="auth-email-verification.php" key="t-email-verification"><?php echo $lang["Email_verification"]; ?></a></li>
                        <li><a href="auth-email-verification-2.php" key="t-email-verification-2"><?php echo $lang["Email_Verification_2"]; ?></a></li>
                        <li><a href="auth-two-step-verification.php" key="t-two-step-verification"><?php echo $lang["Two_Step_Verification"]; ?></a></li>
                        <li><a href="auth-two-step-verification-2.php" key="t-two-step-verification-2"><?php echo $lang["Two_Step_Verification_2"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-utility"><?php echo $lang["Utility"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.php" key="t-starter-page"><?php echo $lang["Starter_Page"]; ?></a></li>
                        <li><a href="pages-maintenance.php" key="t-maintenance"><?php echo $lang["Maintenance"]; ?></a></li>
                        <li><a href="pages-comingsoon.php" key="t-coming-soon"><?php echo $lang["Coming_Soon"]; ?></a></li>
                        <li><a href="pages-404.php" key="t-error-404"><?php echo $lang["Error_404"]; ?></a></li>
                        <li><a href="pages-500.php" key="t-error-500"><?php echo $lang["Error_500"]; ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-components"><?php echo $lang["Components"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level"><?php echo $lang["Multi_Level"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1"><?php echo $lang["Level_1.1"]; ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><?php echo $lang["Level_1.2"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1"><?php echo $lang["Level_2.1"]; ?></a></li>
                                <li><a href="javascript: void(0);" key="t-level-2-2"><?php echo $lang["Level_2.2"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->