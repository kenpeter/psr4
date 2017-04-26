<?php
// backward, backward, backward
// why backward, because not dir
// they are namespace\namespace\class
use Codecourse\Repositories\UserRepository as UserRepository;
use Codecourse\Filters\AutoFilter as AutoFilter;

//use Codecourse\Repositories\UserRepository;
//use Codecourse\Filters\AutoFilter;

// start.php is auto load, once auto reload,
// can do object stuff
// same as auto load in index.php
require_once 'app/start.php';

$user = new UserRepository();
$user->myprint();

$autoFilter = new AutoFilter();
$autoFilter->myprint();
