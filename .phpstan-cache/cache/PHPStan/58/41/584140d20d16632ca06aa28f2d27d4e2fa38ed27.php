<?php declare(strict_types = 1);

// odsl-/Users/mantum/Documents/test-paypal/app
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v1',
   'data' => 
  array (
    '/Users/mantum/Documents/test-paypal/app/DTO/Transaction.php' => 
    array (
      0 => 'a78c4b4061d082076a7939a1b4bb19c193797212',
      1 => 
      array (
        0 => 'app\\dto\\transaction',
      ),
      2 => 
      array (
        0 => 'app\\dto\\__construct',
        1 => 'app\\dto\\gettransactionid',
        2 => 'app\\dto\\settransactionid',
        3 => 'app\\dto\\getstatus',
        4 => 'app\\dto\\setstatus',
        5 => 'app\\dto\\getamount',
        6 => 'app\\dto\\setamount',
        7 => 'app\\dto\\getuserid',
        8 => 'app\\dto\\setuserid',
        9 => 'app\\dto\\tocreate',
        10 => 'app\\dto\\toupdate',
        11 => 'app\\dto\\toarray',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/DTO/Registry.php' => 
    array (
      0 => '56d600e2ab463460e17e2d3f531cb8d7b984fbed',
      1 => 
      array (
        0 => 'app\\dto\\registry',
      ),
      2 => 
      array (
        0 => 'app\\dto\\__construct',
        1 => 'app\\dto\\setid',
        2 => 'app\\dto\\getid',
        3 => 'app\\dto\\setcreatedat',
        4 => 'app\\dto\\getcreatedat',
        5 => 'app\\dto\\setupdatedat',
        6 => 'app\\dto\\getupdatedat',
        7 => 'app\\dto\\toarray',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/DTO/User.php' => 
    array (
      0 => '6c3a7f28c9b148fb7b7ca6955714416136e3ea24',
      1 => 
      array (
        0 => 'app\\dto\\user',
      ),
      2 => 
      array (
        0 => 'app\\dto\\__construct',
        1 => 'app\\dto\\getname',
        2 => 'app\\dto\\setname',
        3 => 'app\\dto\\getemail',
        4 => 'app\\dto\\setemail',
        5 => 'app\\dto\\getpassword',
        6 => 'app\\dto\\setpassword',
        7 => 'app\\dto\\getbalance',
        8 => 'app\\dto\\setbalance',
        9 => 'app\\dto\\gettransactions',
        10 => 'app\\dto\\settransactions',
        11 => 'app\\dto\\increment',
        12 => 'app\\dto\\toupdate',
        13 => 'app\\dto\\toarray',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Providers/AppServiceProvider.php' => 
    array (
      0 => '01bf9e5cf5bb666446625056b618445ae4749675',
      1 => 
      array (
        0 => 'app\\providers\\appserviceprovider',
      ),
      2 => 
      array (
        0 => 'app\\providers\\register',
        1 => 'app\\providers\\boot',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Models/Transaction.php' => 
    array (
      0 => '25488bddf6b85b8db9028e507560f4137167f40e',
      1 => 
      array (
        0 => 'app\\models\\transaction',
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Models/User.php' => 
    array (
      0 => '27b24efbb1602f95863cc5fde8f9e10b9aab7b95',
      1 => 
      array (
        0 => 'app\\models\\user',
      ),
      2 => 
      array (
        0 => 'app\\models\\casts',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Http/Controllers/Controller.php' => 
    array (
      0 => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
      1 => 
      array (
        0 => 'app\\http\\controllers\\controller',
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php' => 
    array (
      0 => 'a12ba4b933178a27670bb53b16429abb15e8e291',
      1 => 
      array (
        0 => 'app\\http\\controllers\\webhookcontroller',
      ),
      2 => 
      array (
        0 => 'app\\http\\controllers\\handle',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php' => 
    array (
      0 => '5ed51b7a9f4dca702f9029061ac1270e38d9ef7e',
      1 => 
      array (
        0 => 'app\\http\\controllers\\transactioncontroller',
      ),
      2 => 
      array (
        0 => 'app\\http\\controllers\\__construct',
        1 => 'app\\http\\controllers\\index',
        2 => 'app\\http\\controllers\\show',
        3 => 'app\\http\\controllers\\topupform',
        4 => 'app\\http\\controllers\\createorder',
        5 => 'app\\http\\controllers\\paypalsuccess',
        6 => 'app\\http\\controllers\\paypalcancel',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Services/TransactionService.php' => 
    array (
      0 => '505b2ed5b840eaf88b40067a95570432a880d9f5',
      1 => 
      array (
        0 => 'app\\services\\transactionservice',
      ),
      2 => 
      array (
        0 => 'app\\services\\create',
        1 => 'app\\services\\update',
        2 => 'app\\services\\findbytransaction',
        3 => 'app\\services\\findbyuser',
        4 => 'app\\services\\transform',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php' => 
    array (
      0 => '071a0e3cd503ffd23da9e6c52b3378edc49e378c',
      1 => 
      array (
        0 => 'app\\services\\paypalservice',
      ),
      2 => 
      array (
        0 => 'app\\services\\__construct',
        1 => 'app\\services\\createorder',
        2 => 'app\\services\\captureorder',
        3 => 'app\\services\\getorderdetails',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Services/UserService.php' => 
    array (
      0 => 'd09e3d1c41b713cf0dffb897a4337eb73f3bfa5b',
      1 => 
      array (
        0 => 'app\\services\\userservice',
      ),
      2 => 
      array (
        0 => 'app\\services\\update',
        1 => 'app\\services\\findbyid',
        2 => 'app\\services\\getuserme',
        3 => 'app\\services\\exists',
        4 => 'app\\services\\transform',
        5 => 'app\\services\\start',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/mantum/Documents/test-paypal/app/Console/Commands/Start.php' => 
    array (
      0 => '5cb98d7bc7dc46c293d90ba848ea7f1f0c511751',
      1 => 
      array (
        0 => 'app\\console\\commands\\start',
      ),
      2 => 
      array (
        0 => 'app\\console\\commands\\__construct',
        1 => 'app\\console\\commands\\handle',
      ),
      3 => 
      array (
      ),
    ),
  ),
));