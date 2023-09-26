<?php 



class Home extends Controller{
     
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
        
   
     
        $posts=$this->model('Post')->orderby('created_at', 'DESC')
        ->limit(3)
        ->get();


       

     $this->view('home/index', ['pages'=>$this->pages, 'categories'=>$this->categories, 'recent_posts'=>$this->recent_posts, 'posts'=>$posts ]);

  
    }


    public function search(){

     $search= mb_strtolower($_POST['search']);
        $result=$this->model('Post')->whereRaw("lower(content) like ?", ['%'.$search.'%'])->orWhereRaw("lower(title) like? ", ['%'.$search.'%'])->get();

        $this->view('home/search', ['result'=>$result,   'pages'=>$this->pages, 'categories'=>$this->categories, 'recent_posts'=>$this->recent_posts ]);

    }
    public function pages($page=''){
        
        
        $page=$this->model('Pages')->where('slug',$page)->first();
       

     $this->view('home/page', ['page'=>$page, 'pages'=>$this->pages, 'categories'=>$this->categories, 'recent_posts'=>$this->recent_posts ]);

  
    }
    public function categories($category='', $page=1){
        
        
        $postPerPage = 5;
        $offset = ($page-1) *  $postPerPage;
        $total_pages= count($this->model('Post')->where('category',$category)->get())/$postPerPage;
         
        

        $posts=$this->model('Post')->where('category',$category)->orderby('created_at', 'DESC')->offset($offset)
        ->limit($postPerPage)
        ->get();
       
     //var_dump($posts);
     $this->view('home/categories', ['posts'=>$posts, 'pages'=>$this->pages, 'categories'=>$this->categories, 'recent_posts'=>$this->recent_posts, 'pagination'=>[$page, $total_pages] ]);

  
    }
    public function static($page)
    {
        $this->view('home/'.$page, ['pages'=>$this->pages, 'categories'=>$this->categories, 'recent_posts'=>$this->recent_posts ]);

        
    }
    public function create()
    {
        $this->view('home/create', []);

        
    }
    public function store()
    {
        $user=$_POST;
      //  print_r($user);
         User::create([
            'username'=>$user['username'],
            'email'=>$user['email']
         ]);
        

         //redirect 
         $users=User::all();

       

         $this->view('home/index', ['users'=>$users]);
    }
 

}