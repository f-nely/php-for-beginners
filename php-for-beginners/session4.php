<?php

session_start();

session_unset();

session_destroy();

echo 'session now is destroyed';