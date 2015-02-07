<?php
  //Joomla 2.5 and 3.x series

  $app = JFactory::getApplication();
  $menu = $app->getMenu();
  
  if ($menu->getActive() == $menu->getDefault()) {
  	echo 'This is the front page';
  }
  
  
  /*
   *For multi-lingual sites the front page is dependent on the currently selected language,
   *so you will need to use code like this
   */
   
    if ($menu->getActive() == $menu->getDefault( 'en-GB' )) {
	    echo 'This is the front page';
    }
    elseif ($menu->getActive() == $menu->getDefault( 'fr-FR' )) {
  	  echo 'Accueil';
    }
    
  /*
   *For multi-lingual sites, it could also be necessary to display a specific code/html for all Default Home pages.
   */
   
    $lang = JFactory::getLanguage();
    if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
    	echo 'This is the front page';
    }
    else {
    	echo 'Accueil';
    }
?>
