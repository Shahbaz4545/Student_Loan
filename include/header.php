<header id="goto-here" >
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="javascript:" class="logo">
                    <img src="<?php echo $siteurl ?>assets/images/logo.png" alt="LOGO">
                </a>
            </div>
            <div class="col-md-9">
            <div class="mobile-screen">
                    <a href="javascript:" onclick="navOpen()" class="btn" id="list-btn">
                            <i class="fas fa-bars"></i>
                    </a>
                </div>     
                    <a href="javascript:" onclick="navClosed()" class="btn" id="cross">
                            <i class="fas fa-times"></i> 
                    </a>           
                <nav class="mobile-view navbar-expand-md main-menu" id="menu-list">
                    <ul class="menu">            
                        <li><a href="<?php echo $siteurl ?>" class="active">Home</a></li>
                        <li><a href="<?php echo $siteurl ?>"> About </a></li>
                        <li><a href="<?php echo $siteurl ?>">Borrower-Student</a></li>
                        <li><a class="btn btn_blue" href="<?php echo $siteurl ?>"><i class="fal fa-phone-volume"></i> Contact Us</a></li>                       
                    </ul>  
                </nav>
            </div>
        </div>
    </div>
</header>