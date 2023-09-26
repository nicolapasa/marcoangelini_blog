<aside class="lg:w-1/5 py-6">
            <!--sidebar-->
            <img src="<?php echo URL_IMAGES.'pro.jpg'; ?>" alt="" class="rounded shadow-md   grayscale mx-auto ">
            <p class="prose italic text-center">
               
            </p>
            <form class="uppercase text-center border-slate-900 border-2 p-2 mt-4" action="<?php echo URL_GEN.'home/search';?>"   method="POST">
                <input type="text" name="search"  placeholder="search" class="my-2  w-5/6 py-2 text-center border-slate-700 border-2">
                <button class="uppercase bg-slate-800 text-slate-50 py-2 px-8" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
  
               
                <h3 class="uppercase bg-slate-900 text-slate-50 py-4 px-8  mt-4 text-center">Argomenti</h3>
         
                <ul class="text-center mt-4">
                <?php foreach ($data['categories'] as $category) { ?>
                    <?php   if($category->title!='racconti') {?> 
                    <li class="capitalize py-2">
                        <a class="text-slate-600 hover:text-slate-900" href="<?php echo URL_GEN.'home/categories/'.$category->title;?>"> <?php echo $category->title;?></a>
                    </li>
                    <?php } ?>    
                 <?php } ?>     
                  
                </ul>
                <h3 class="uppercase bg-slate-900 text-slate-50 py-4 px-6  mt-4 text-center">Post più recenti</h3>
                <?php foreach ($data['recent_posts'] as $recent_post) { ?>
                <img src="<?php echo URL_IMAGES.$recent_post->image; ?>" alt="" class=" mt-4 grayscale">
                <a class="text-slate-600 hover:text-slate-900" href="<?php echo URL_GEN.'blogs/show/'.$recent_post->id;?>">  <h4 class="italic text-center first-letter:uppercase"> <?php echo $recent_post->title; ?></h4></a>
           
                <p class="italic">
                    <?php echo Helpers::cut_text(strip_tags( $recent_post->content), 100);  ?>
                </p>
               <?php } ?>   
                
         </aside>