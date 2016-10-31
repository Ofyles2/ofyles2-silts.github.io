<?php

namespace AppBundle\Form;
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form;

use AppBundle\Entity\Radio_article;

class SomeController extends Controller
{
   /**
   * @Route("/radio", name="radio_welcome")
   */
  public function someAction(Request $request)
  {
  	//By adding this line, you will be redirected to a URL after logging in or out.
  	$this->currentUri($request);
  	
  	//Rest of code...
  }
  
  /**
  *	It only takes four lines. Simple!
  */
  public function currentUri(Request $request){
  	$session = $request->getSession();
  	$session->set("current_url", $request->getUri());
  }
    
}
