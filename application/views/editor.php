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
            <span>Logged as:</span><span id="user-name"><?php echo $this->session->userdata("user"); ?></span>
            <a href="#" id="config"><img alt="config" src="<?php echo base_url()?>images/icons/77.png"></a>
            <a href="<?php echo base_url(); ?>login/exitapp" id="logout" >logout</a>
        </div>
        
        
    </div>
    
    <div id="files">
        
    </div>
    
    <div class="greenbox tiny-bar" id="graffle-menu">
        <ul class="dropdown">
            <li>
                <a href="#">Vertex</a>
                <ul class="greenbox sub_menu" >
                    <li>Add</li>
                    <li>Remove</li>
                </ul>
            </li>
            <li>    
                <a href="#">Links</a>
                <ul class="greenbox sub_menu" >
                    <li>Add</li>
                    <li>Remove</li>
                </ul>
            </li>
            <li>
                <a href="#">Algorithms</a>
                <ul class="greenbox sub_menu" >
                    <li>Teste 1</li>
                    <li>Teste 2</li>
                    <li>Teste 3</li>
                    <li>Teste 4</li>
                    <li>Teste 5</li>
                </ul>
            </li>
            
        </ul>    
    </div>
    
    </div>
    
    <div id="editor-stance">
    
    </div>
</div>