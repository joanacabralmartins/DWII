<?php

    namespace atv\database\models;

    use atv\traits\Connection;
    use atv\traits\Create;
    use atv\traits\Read;
    use atv\traits\Update;
    use atv\traits\Monitor;
    
    abstract class Model {

        use Connection, Create, Read, Update, Monitor; 

    }