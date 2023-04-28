<?php

session_start();

session_destroy();
header('Location: /phpTry/13_sessions.php');