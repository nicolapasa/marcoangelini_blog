<footer class="mt-8 border-slate-700 border-t-2">
     <p class="prose text-center py-6">
        copyright Nicola Pasa 2023
    

        <?php    if(isset($_SESSION["username"]))    {           ?>

         <a href="<?php echo URL_GEN.'auth/logout';?>" class="capitalize text-slate-600 hover:text-black">logout</a>
         <a href="<?php echo URL_GEN.'admin/index';?>" class="capitalize text-slate-600 hover:text-black">admin dashboard</a>

         <?php } else{ ?>  
        <a href="<?php echo URL_GEN.'auth/login';?>" class="uppercase text-slate-600 hover:text-black">login</a>
 
      <a href="<?php echo URL_GEN.'auth/register';?>" class="uppercase text-slate-600 hover:text-black">register</a>
        <?php }  ?>  
     </p>
     <a id="scroll-to-top" href="#">Back to top</a>
      </footer>
      </main> 
      <script>
        const toggle_btn=document.querySelector('.mobile-btn')
        const toggle_btnIcon=document.querySelector('.mobile-btn i')
        const dropDownMenu=document.querySelector('#dropmenu')
     toggle_btn.onclick=function () {
         dropDownMenu.classList.toggle('open')
         const isOpen= dropDownMenu.classList.contains('open')
        //  toggle_btnIcon.classList=isOpen
        //  ? 'fa-solid fa-x'
        //  : 'fa-solid fa-bars'
     }

     const scrollToTopButton = document.getElementById('scroll-to-top');

// Add a click event listener to the arrow link
scrollToTopButton.addEventListener('click', () => {
  // Scroll to the top of the page smoothly
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});


const home =document.querySelector('.home');


function playAudio() {
  var audio = new Audio('http://localhost/marcoangelini/public/audio/home.mp3'); // replace path/to/audio/file.mp3 with the actual path to your audio file
  console.log('play')
  audio.play();
}
home.addEventListener('click', playAudio)

     </script>
</body>
</html>