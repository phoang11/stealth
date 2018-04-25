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
        'to'   => 'stealth@stealthaudiocables.com',
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
        'subject'  => 'What can we help you with?',
        'subject1'  => 'I have a question about a cable.',
        'subject2'  => 'I need some support help for a cable I already own.',
        'subject3'  => 'I would like to become a distributor.',
        'subject4'  => 'Other...',
        'message'  => 'Message',
        'btn-send' => 'Send'
    ]
];
