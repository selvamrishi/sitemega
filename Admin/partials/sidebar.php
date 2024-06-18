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
          

              
                    <ul class="sub-menu" aria-expanded="false">
                        
                        <li><a href="form-wizard.php" key="t-form-wizard"><?php echo $lang["Form_Wizard"]; ?></a></li>
                        
                    </ul>
              
                
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->