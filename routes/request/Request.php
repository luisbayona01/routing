<?php 
 class Request 
  {  
     public   function __construct(){
     $getparamans= parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

     $url=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    
     $data=explode("/",$url);
          # output "myqueryhash"
     
       $urls= (empty($data[2])) ? '/' : $data[2]; 
 
      $array= array($urls=>$urls);
      
      $this->url= $urls;
  
     $this->method=$_SERVER['REQUEST_METHOD'];
     $this->params=$getparamans;
    
    }	
     

      public function getUrl() {
          return $this->url;
      }

      public function getMethod() {
          return $this->method;
      }

      public function getParams() {
          return $this->params;
      }

      public function setUrl($url) {
          $this->url = $url;
      }

      public function setMethod($method) {
          $this->method = $method;
      }

      public function setParams($params) {
          $this->params = $params;
      }

        	}



