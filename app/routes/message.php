<?php

    use app\controllers\MessageController;

    $app->get('/message', 'app\controllers\MessageController:index');
    $app->post('/message/create', 'app\controllers\MessageController:create');
    $app->post('/message/update/{id}', 'app\controllers\MessageController:update');
    $app->delete('/message/delete/{id}', 'app\controllers\MessageController:delete');