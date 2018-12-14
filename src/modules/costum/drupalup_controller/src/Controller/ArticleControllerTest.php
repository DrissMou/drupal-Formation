<?php

 namespace Drupal\drupalup_controller\Controller ;

 use Drupal\Core\Controller\ControllerBase;
 use Symfony\Component\VarDumper\VarDumper;

 class ArticleControllerTest extends ControllerBase{

   public  function page(){


//     VarDumper::dump($items);


     return array(
//       '#testarray' =>$testarray,
       '#theme' => 'article_list',
//       '#theme' =>  $test,
//       '#items' => $items,
       '#title' => 'la liste des articles'
     );
   }
 }

