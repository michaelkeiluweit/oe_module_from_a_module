
## About
This repository should give an idea how to extend a module by a module. 


## Install

Switch to the root directory of the shop. You'll find the directories `source/` and `vendor/` there.

Execute the following commands
```
git clone https://github.com/michaelkeiluweit/oe_module_from_a_module _mke_repository/mke/

composer config repositories.mke/modulefromanothermodule/m1 path _mke_repository/mke/m1
composer config repositories.mke/modulefromanothermodule/m2 path _mke_repository/mke/m2

composer require michaelkeiluweit/module-from-another-module-m1
composer require michaelkeiluweit/module-from-another-module-m2
```

Call Module 1 somewhere, for example directly in the file `index.php`:
```php
// ...
redirectIfShopNotConfigured();


if (!isAdmin()) { // Execute the code only in the frontend area of the shop.
    
    $m = oxNew(\OxidEsales\Eshop\Core\Module\Module::class);
    
    if ($m->load('mke-module-from-another-module-m1') && $m->isActive()) {
        $o = oxNew(MichaelKeiluweit\ModuleFromAnotherModule\Module1\Cache::class);
        $o->action();
    }
}

//Starts the shop
OxidEsales\EshopCommunity\Core\Oxid::run();
```

Please note: Since we don't call the module by a controller, the framework doesn't check if the module is active.
This means the code will be executed, whether it is set active or not.
