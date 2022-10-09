<?php
// require_once 'App/Controllers/Controller.php';
// require_once 'App/Controllers/ProductController.php';
// require_once 'App/Models/BaseModel.php';
// require_once 'App/Models/Product.php';

const BASE_URL = 'http://localhost:8080/Lab3/';

require_once './vendor/autoload.php';
require_once './configs/router.php';

use App\Controllers\ProductController;

$pc = new ProductController();
$pc->getProducts();
