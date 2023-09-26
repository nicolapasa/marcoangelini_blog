<?php  include_once(__ROOT__.'views/layouts/header.php'); ?>

 





            <section class="lg:flex py-6 ">  
            <div class="lg:w-4/5 w-full mx-auto text-center lg:text-left">
                
            <?php 
       
         
       foreach ($data['result'] as $post) { ?>
        
          <!--features article-->
          <h2 class="capitalize text-2xl py-2   ">   <?php echo $post->title; ?> </h2>
        <img src="<?php echo URL_IMAGES.$post->image; ?>" alt="" class="lg:w-4/5  shadow-lg rounded border-2 ">
          <div class="lg:w-4/5 lg:text-justify py-2 text-center mt-4 mb-32">
              <p class="prose  text-justify">
              <?php echo $post->content; ?>    </p>

          </div>  
         
          <!--end features article-->

          <?php }     ?>   

        
        
        </div>      
          
  <?php  include_once(__ROOT__.'views/layouts/sidebar.php'); ?>
</section> 

         

  <?php  include_once(__ROOT__.'views/layouts/footer.php'); ?>