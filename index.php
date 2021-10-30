<?php

require_once 'functions/connect.php';
require_once 'controller/router.php';

$app = new MainRouter();

$app->rota();