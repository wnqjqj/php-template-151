<?php

namespace wnqjqj\Controller;

use wnqjqj\SimpleTemplateEngine;

class IndexController 
{
  /**
   * @var ihrname\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   */
  public function __construct(SimpleTemplateEngine $template)
  {
     $this->template = $template;
  }

  public function homepage() {
    echo $this->template->render("index.html.php");
  }

  public function greet($name) {
  	echo $this->template->render("hello.html.php", ["name" => $name]);
  }
  
  public function introduce () {
  	echo $this->template->render("introduce.html.php");
  }
}
