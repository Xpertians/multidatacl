<?php

return
    [
        "base_url"   => "http://localhost:8000/hybrid.php",
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
            "LinkedIn" => [
                "enabled" => false,
                "keys"    => [ "key" => "", "secret" => "" ]
            ],
            "Github"   => array(
                "enabled" => true,
                "keys"    => array(
                    "id"     => "7fc2a3116c86b9dac673",
                    "secret" => "1a3a1ba0c158a3e0cd1538b4f3c36fd6e6c10556"
                ),
                "wrapper" => [ "path" => "providers/GitHub.php", "class" => "Hybrid_Providers_GitHub" ]
            ),
        ],
        "debug_mode" => false,
        "debug_file" => "bug.txt",
    ];
