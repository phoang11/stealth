<?php

return [
    'database' => [
        'host' => 'localhost',
        'port' => '3389',
        'dbname' => '',
        'username' => '',
        'password' => ''
    ],
    'subject' => [
        'prefix' => '[Register Form]'
    ],
    'emails' => [
        'to'   => 'admin@novemberstudio.com',
        'from' => 'noreply@stealthaudiocables.com'
    ],
    'messages' => [
        'error'   => 'There was an error sending, please try again later.',
        'success' => 'Your submission has been sent successfully. You will receive a confirmation email shortly.'
    ],
    'fields' => [
        'name'     => 'Name',
        'email'    => 'Email',
        'phone'    => 'Phone',
        'message'  => 'Message',
        'btn-send' => 'Submit'
    ]
];
