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
        'prefix' => '[Contact Form]'
    ],
    'emails' => [
        'to'   => 'admin@novemberstudio.com',
        'from' => 'noreply@stealthaudiocables.com'
    ],
    'messages' => [
        'error'   => 'There was an error sending, please try again later.',
        'success' => 'Your message has been sent successfully.'
    ],
    'fields' => [
        'name'     => 'Name',
        'email'    => 'Email',
        'phone'    => 'Phone',
        'subject'  => 'Subject',
        'message'  => 'Message',
        'btn-send' => 'Send'
    ]
];
