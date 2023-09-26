<?php  include_once(__ROOT__.'views/layouts/header.php'); ?>

 





            <section class="lg:flex py-6 ">  
      <!--body -->
         <div class="lg:w-4/5 w-full mx-auto text-center lg:text-left">
         <?php 
       
         
         foreach ($data['posts'] as $post) { ?>
          
            <!--features article-->
            <h2 class="capitalize text-2xl py-2   ">   <?php echo $post->title; ?> </h2>
              <?php if   ($post->image !="0" ) {  ?>
              <img src="<?php echo URL_IMAGES.$post->image; ?>" alt="" class="lg:w-4/5  shadow-lg rounded border-2 ">
              <?php }   ?>   
            <div class="lg:w-4/5 lg:text-justify py-2 text-center mt-4 mb-32">
                <p class="prose  text-justify post">
                <?php echo $post->content; ?>    </p>

            </div>  
           
            <!--end features article-->

            <?php }     ?>   

           
         </div>     
  <?php  include_once(__ROOT__.'views/layouts/sidebar.php'); ?>
   
</section> 

<ul class="flex gap-4 mt-4 ">
        <li><a href="<?php echo URL_GEN.'home/categories/'.$post->category.'/1';?>">First</a></li>
        <li class="<?php if($data['pagination'][0] <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($data['pagination'][0]  <= 1){ echo '#'; } else { echo URL_GEN.'home/categories/'.$post->category.'/'.($data['pagination'][0]  - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($data['pagination'][0]  >= $data['pagination'][1]){ echo 'disabled'; } ?>">
            <a href="<?php if($data['pagination'][0]  >= $data['pagination'][1]){ echo '#'; } else { echo URL_GEN.'home/categories/'.$post->category.'/'.($data['pagination'][0] + 1); } ?>">Next</a>
        </li>
        <li><a href="<?php echo URL_GEN.'home/categories/'.$post->category.'/'.$data['pagination'][1];?>">Last</a></li>
         </ul>        

  <?php  include_once(__ROOT__.'views/layouts/footer.php'); ?>