<?php
/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
    [
        "base_url"   => "http://mdata.opendatacollector.com/hybrid.php",
        "providers"  => [
            "Google"   => [
                "enabled" => true,
                "keys"    => [
                    "id" => "204025247100-7lefpfc4arp25fkfffnj2hg2bbd9imuj.apps.googleusercontent.com",
                    "secret" => "pEiZ1DtkxUjWKiudNSQFLouu"
                    ],
            ],
            "Facebook" => [
                "enabled"        => false,
                "keys"           => [ "id" => "", "secret" => "" ],
                "trustForwarded" => false
            ],
            "Twitter"  => [
                "enabled" => false,
                "keys"    => [ "key" => "", "secret" => "" ]
            ],
        ],
        // If you want to enable logging, set 'debug_mode' to true.
        // You can also set it to
        // - "error" To log only error messages. Useful in production
        // - "info" To log info and error messages (ignore debug messages)
        "debug_mode" => "error",
        // Path to file writable by the web server. Required if 'debug_mode' is not false
        "debug_file" => "bug.txt",
    ];
