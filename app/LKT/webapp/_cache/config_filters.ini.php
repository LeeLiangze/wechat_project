<?php
// auth-generated by FilterConfigHandler
// date: 12/17/2018 18:36:17
require_once('/Applications/XAMPP/xamppfiles/htdocs/laiketui/app/LKT/webapp/filter/LoginFilter.class.php');
require_once('/Applications/XAMPP/xamppfiles/htdocs/laiketui/app/LKT/webapp/filter/ThdFilter.class.php');
require_once('/Applications/XAMPP/xamppfiles/htdocs/laiketui/app/LKT/webapp/filter/SedFilter.class.php');
$filters = array();
$filter = new ExecutionTimeFilter();
$filter->initialize($this->context, array('comment' => true));
$filters[] = $filter;
$filter = new LoginFilter();
$filter->initialize($this->context, array('effect' => true));
$filters[] = $filter;
$filter = new ThdFilter();
$filter->initialize($this->context, array('effect' => true));
$filters[] = $filter;
$filter = new SedFilter();
$filter->initialize($this->context, array('effect' => true));
$filters[] = $filter;
$list[$moduleName] =& $filters;
?>