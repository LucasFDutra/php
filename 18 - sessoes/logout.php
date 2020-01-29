<?php

// aqui nos limpamos e destruimos as sessoes

session_start();
session_unset();
session_destroy();
