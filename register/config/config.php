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
        'to'   => 'stealth@stealthaudiocables.com',
        'from' => 'noreply@stealthaudiocables.com'
    ],
    'messages' => [
        'error'   => 'Please try again and complete the CAPTCHA, if you are not a robot.',
        'success' => 'Your submission has been sent successfully. You will receive a confirmation email shortly.'
    ],
    'fields' => [
        'name'     => 'Name',
        'email'    => 'Email',
        'address'     => 'Address',
        'address2'     => 'Address 2',
        'city'     => 'City',
        'state'     => 'State/Province',
        'zipcode'     => 'ZIP code',
        'country'     => 'Country',
        'cable_category'    => 'Cable Type',
        'cable_name'     => 'Cable Name',
        'cable_serial_number'     => 'Cable Serial Number',
        'cable_purchased_place'     => 'Cable Purchased Place',
        'message'  => 'Message',
        'btn-send' => 'Submit'
    ]
];
