<?php
return
    [
        "base_url"   => "http://".$_SERVER['HTTP_HOST']."/hybrid.php",
        "providers"  => [
            "Google"   => [
                "enabled" => true,
                "keys"    => [
                  "id"      => "",
                  "secret"  => ""
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
                "enabled" => false,
                "keys"    => array(
                    "id"     => "",
                    "secret" => ""
                ),
                "wrapper" => [ "path" => "providers/GitHub.php", "class" => "Hybrid_Providers_GitHub" ]
            ),
        ],
        "debug_mode" => false,
        "debug_file" => "bug.txt",
    ];
