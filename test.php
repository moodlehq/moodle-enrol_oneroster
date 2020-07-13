<?php

define('CLI_SCRIPT', true);
require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/../../lib/clilib.php');

[$options, $unrecognized] = cli_get_params(
    [
        'version' => enrol_oneroster\client_helper::version_v1p1,
        'authenticate' => true,
        'stop-after-auth' => false,
        'token' => '',
        'verbose' => false,
    ],
    [
        'V' => 'version',
        'a' => 'authenticate',
        's' => 'stop-after-auth',
        't' => 'token',
        'v' => 'verbose',
    ]
);

if ($options['version'] === enrol_oneroster\client_helper::version_v1p1) {
    /*
    $client = enrol_oneroster\client_helper::get_client(
        enrol_oneroster\client_helper::oauth_20,
        enrol_oneroster\client_helper::version_v1p1,
        'https://oauth2server.imsglobal.org/oauth2server/clienttoken',
        'https://onerostervalidator.imsglobal.org:8443/oneroster-client-cts-endpoint',
        'or11tester',
        'eYuY5nnUcruSs'
    );
     */

    $client = enrol_oneroster\client_helper::get_client(
        enrol_oneroster\client_helper::oauth_20,
        enrol_oneroster\client_helper::version_v1p1,
        'https://demo.aeries.net/aeries/token',
        'https://demo.aeries.net/aeries/',

        '1279e5c6b747b6d62b7c76db3a205d40eb7458e678a90493d537d5af6b953550',
        '68019dbf8d8ba82980dd148eecc3977ac0d7f1f040d444225874c88eb80b9c1a'
    );
} else if ($options['version'] === enrol_oneroster\client_helper::version_v1p2) {
    $client = enrol_oneroster\client_helper::get_client(
        enrol_oneroster\client_helper::version_v1p2,
        'https://oauth2server.imsglobal.org/oauth2server/clienttoken',
        'https://certification.imsglobal.org/or12webapi',
        'or12tester2',
        'M;oga7hMxdKCm'
    );
}

if ($options['verbose']) {
    $client->set_trace(new text_progress_trace());
}

if ($options['authenticate']) {
    $client->authenticate();
}

if ($options['stop-after-auth']) {
    exit(0);
}

if ($options['token']) {
    $client->set_access_token(
        $options['token'],
        1594740199,
        'http://purl.imsglobal.org/spec/or/v1p2/scope/roster.readonly'
    );
}

$client->synchronise();
