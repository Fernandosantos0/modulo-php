<?php

    setcookie('theme', 'light', time() + 3600); # criando o cookie
    header('Location: index.php'); # redirecionamento da página