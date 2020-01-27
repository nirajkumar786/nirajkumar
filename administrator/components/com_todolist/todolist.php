<?php
/**
 * To-do list entry point - administrator
 */
 
 //~ echo'Hello world.';
 
 //~ $params = JComponentHelper::getParams('com_todolist');
 
 //~ $message = $params->get('message','');
 //~ echo $message;
 
 defined('_JEXEC') or die;

 jimport('joomla.application.component.controller');
JLoader::registerPrefix('Todolist', JPATH_COMPONENT_ADMINISTRATOR);

 $controller = JControllerLegacy::getInstance('Todolist');
 $controller->execute(JFactory::getApplication()->input->get('task'));
 $controller->redirect();
