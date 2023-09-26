

<?php  include_once(__ROOT__.'views/layouts/header.php'); ?>

 





            <section class="lg:flex py-6 ">  
      <!--body -->
         <div class="lg:w-4/5 w-full mx-auto text-center lg:text-left">
         <?php foreach ($data['pages'] as $page) { ?>
          <?php   if($page->title=='Home') {?>
            <!--features article-->
          <div class="flex flex-wrap ">
       <!--   <img src="<?php echo URL_IMAGES.$page->image; ?>" alt="" class="lg:w-2/5 text-center lg:text-left shadow-lg rounded border-2 ">-->
            <div class="lg:w-4/5 lg:text-justify py-2 text-center">
                <p class="prose  text-justify">
                <?php echo $page->content; ?>    </p>

             
            </div>
          </div>  
           
            <!--end features article-->
            <?php }     ?>   
            <?php }     ?>
            
            


          

         </div>     
  <?php  include_once(__ROOT__.'views/layouts/sidebar.php'); ?>
</section> 

         

  <?php  include_once(__ROOT__.'views/layouts/footer.php'); ?>


