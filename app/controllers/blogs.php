<?php 



class Blogs extends Controller{
       //call method middleware
       public $pages;
       public $categories;
       public $recent_posts;
       public function __construct(){
 
         $page=$this->model('Pages');
            
         $this->pages=$page->all();
         $category=$this->model('Categories');
           
         $this->categories=$category->all();
 
         
         $this->recent_posts = $this->model('Post')->orderBy('created_at', 'desc')->limit(5)->get();
         
     }
  
    public function index(){
        
   
        $post=$this->model('Post');
           
        $blogs=$post->all();

       

     $this->view('blogs/index',['blogs'=>$blogs]);

  
    }
    public function show($id=0){
        
       
        $post=$this->model('Post');
           
        $blog=$post->where('id',$id)->first();

       

     $this->view('blogs/single',['post'=>$blog, 'pages'=>$this->pages,  'categories'=>$this->categories, 'recent_posts'=>$this->recent_posts ]);

  
    }

 

}