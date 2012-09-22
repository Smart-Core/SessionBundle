SmartCore SessionBundle
=======================

Doctrine ORM Session Storage Handler

Installation
------------

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new SmartCore\Bundle\SessionBundle\SmartCoreSessionBundle(),
    );
}
```

Enable handler_id:

``` yaml    
# app/config/config.yml

framework:
    session:
        handler_id: smart_core_session.handler
```

@todo
-----

 *  Конфигурирование автоподключения, например:
 
    ``` yaml
    smart_core_session:
        autoconfigure: true
    ```
    
    В этом случае, будет автоматически применяется handler_id в конфигурации framework бандла.
