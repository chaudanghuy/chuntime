<div id="wrapper-login">
    <div class="background-img" style="background-image:url('<?php echo $this->webroot; ?>img/background/galaxy.png')">
    </div><!-- /.background-img -->
    <div class="content-login">
      <div class="container">
        <div class="login-box">
         <div class="row">
           <div class="col-lg-12">
             <div id="brand">
               <img class="img-circle" src="http://placehold.it/75x75" alt="" />
               <h1>Chuntime <small>App</small></h1>
             </div><!-- /#brand -->
           </div><!-- /.col-lg-12 -->
           <div class="col-lg-12">
             <div id="login-form">
               <h5>Login</h5>
               <?php
                echo $this->Html->link(
                    'Facebook Login',
                    $loginUrl
                ); 
               ?>              
             </div><!-- /#login-form -->
           </div><!-- /.col-lg-12 -->
         </div><!-- /.row -->
       </div><!-- /.login-box -->
      </div><!-- /.container -->
    </div><!-- /.content-login -->
  </div>