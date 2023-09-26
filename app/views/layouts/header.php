
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marco Angelini Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coustard:wght@400;900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">

       <!-- Scripts -->
       <script src="https://cdn.tiny.cloud/1/bvd9c7l707a61o6ecrwwobfnj29yan9dsr1xgl52wshmyk98/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
       <link rel="stylesheet" href="<?php echo PUBLIC_DIR.'css/main.css';?>">
</head>
<body>
<main class="w-3/5 mx-auto">
        <header class="lg:flex justify-between  mt-8 ">
        <ul class="lg:flex justify-center items-center hidden border-slate-600/10 border-b-2 border-t-2 mt-8">
    <li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN;?>">Home</a></li>

    <?php foreach ($data['categories'] as $category) { ?>
         <?php   if($category->title=='racconti') {?>

           <li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN.'home/categories/'.$category->title;?>"><?php echo $category->title;?></a></li>
         <?php } ?>    
     <?php } ?>  
    <?php foreach ($data['pages'] as $page) { ?>
        <?php   if($page->title!='Home') {?>
        <li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN.'home/pages/'.$page->slug;?>"><?php echo $page->title;?></a></li>
        <?php } ?>   
        <?php } ?>   

    <li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN.'home/static/contact';?>">Contatti</a></li>
</ul>
<div class="mobile-btn lg:hidden">
    <i  class=" fa-solid fa-bars"></i>
</div>

<div id="dropmenu" class="md:hidden absolute top-[220px]   bg-white rounded shadow  h-0 overflow-hidden w-[300px] text-center">
<li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN;?>">Home</a></li>
<?php foreach ($data['categories'] as $category) { ?>
         <?php   if($category->title=='racconti') {?>

           <li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN.'home/categories/'.$category->title;?>"><?php echo $category->title;?></a></li>
         <?php } ?>    
     <?php } ?> 
<?php foreach ($data['pages'] as $page) { ?>
  <?php   if($page->title!='Home') {?>
        <li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN.'home/pages/'.$page->slug;?>"><?php echo $page->title;?></a></li>
        <?php } ?>  
        <?php } ?>  
     <li class="px-4 py-3"><a class="text-slate-700 capitalize border-slate-600/10 hover:border-b-2" href="<?php echo URL_GEN.'home/static/contact';?>">Contatti</a></li>
</div>
             <div class="hidden lg:block   py-4 mt-8">
             <a class="text-lg px-4" href="https://www.instagram.com/marco._.angelini/">    <i class="fa-brands fa-instagram px-2"></i></a>
                   <a class="text-lg px-4" href="https://www.facebook.com/marco.angelini.927">   <i class="fa-brands fa-facebook px-2"></i></a>

             </div>
        </header>

        <section class="mt-12 border-slate-500 border-b-2 py-32 text-center">
         <img src="<?php echo URL_IMAGES.'logo2.png'; ?>" class="mx-auto w-32 mb-6 home">
          <a href="<?php echo URL_GEN;?>" class="text-center"><h1 class="text-6xl font-bold" >Marco Angelini</h1></a> 
            <p class="prose text-center py-2">"Se non ti esplode dentro a dispetto di tutto, non farlo" </p>
        </section>

    
