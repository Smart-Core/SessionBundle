SmartCore SessionBundle
=======================

Doctrine ORM Session Storage Handler

@todo
-----

 *  Конфигурирование автоподключения, например:
 
    ``` yaml
    smart_core_session:
        autoconfigure: true
    ```
    
    В этом случае, автоматически применяется handler_id, кау будто прописать:
    
    ``` yaml    
    # app/config/config.yml
    framework:
        session:
            handler_id: smart_core_session.handler
    ```