<div class="content">
    <div class=" greenbox tiny-bar" id="main_menu">
        <div id="main-lblock">
            <ul class="dropdown">
                <li>
                    <a href="#">File</a>
                    <ul class="greenbox sub_menu" >
                        <li>New</li>
                        <li>Save</li>
                        <li>Load</li>
                    </ul>    
                </li>
                <li>
                    <a href="#">Edit</a>
                    <ul class="greenbox sub_menu" >
                        <li>Cut</li>
                        <li>Copy</li>
                        <li>Paste</li>
                    </ul>    
                </li>
                <li>
                    <a href="#">Help</a>
                    <ul class="greenbox sub_menu" >
                        <li>About</li>
                    </ul>
                </li>
            </ul>    
        </div>
        <div id="main-rblock">
            <span>Logged as: <?php echo $this->session->userdata("user"); ?></span>
            <a href="#"><img alt="config" src="<?php echo base_url()?>images/icons/77.png"></a>
            <a href="<?php echo base_url(); ?>login/exitapp" >logout</a>
        </div>
    </div>
</div>