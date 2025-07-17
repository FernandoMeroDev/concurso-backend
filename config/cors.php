<?php

return [

    'paths' => ['*'],

    'allowed_methods' => ['*'], // Permite todos los métodos: GET, POST, PUT, DELETE, etc.

    'allowed_origins' => ['http://localhost:5173'], // El puerto por defecto de Vite (usado en SvelteKit)

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Permite todos los headers

    'exposed_headers' => [],

    'max_age' => 0,

    // 'supports_credentials' => true, // Solo si usas cookies o autenticación con sesiones

];
