<?php

    setcookie('theme', 'dark', time() + 3600); # criando o cookie
    header('Location: index.php'); # redirecionamento da página