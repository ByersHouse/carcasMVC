<?php
require_once ROOT.'/components/View.php';
require_once ROOT.'/models/Users.php';



class SiteController{
       
     public function __construct() {
        
    
        $this->view = new View();
  
    }
    
    public function actionIndex() {
        
        $this->view->is_auth = $this->isAuth();
        $this->model = new Users();
        $users = $this->model->getUsers();
        
        $this -> view ->render('index',$users);
        
        
    }
    
    public function isAuth(){
        
        return (bool)@$_SESSION['logged_user'];
    }
    

    public function goURI($url='index'){
        
       
            echo '<script type="text/javascript">'; 
            echo 'window.location.href="'.$url.'";'; 
            echo '</script>'; 
    } 
}
