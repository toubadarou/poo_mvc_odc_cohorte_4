<?php
namespace App\Core;
class Controller{
    protected Request $request;
    // Injection de la request dans le controller
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function render(string $path, array $data=[]){
        $data['Constantes']=Constantes::class; // Dans une vue $Constantes::
        $data['request']= $this->request;      // Dans une vue $request
        ob_start();
        extract($data);
        
        require_once(Constantes::ROOT()."templates/".$path.".html.php");
        $content_for_views = ob_get_clean(); 
        require_once(Constantes::ROOT()."templates/layouts/base.html.php"); 
    }
    public function redirectToRoute(string $uri){
        header("location:".Constantes::WEB_ROOT.$uri);
    }

}
