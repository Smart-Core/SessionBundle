SmartCore SessionBundle
=======================

Doctrine ORM Session Storage Handler

@todo
-----

 * Конфигурирование автоподключения, например:
        
        smart_core_session:
            autoconfigure: true
       
   В этом случае, автоматически прописывается:
        
        framework:
            session:
                handler_id: smart_core_session.handler
