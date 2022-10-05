
<?php

require_once 'helpers.php';

switch (getUri()) {
    case '/register':
        require_once controllers('register');
        break;
        case '/login':
            require_once controllers('login');
            break;
    default:
        require_once controllers('error');
}
