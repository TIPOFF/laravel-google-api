<?php

return [
    'my-business' => [
        'client-secret' => [
            "web" => [
                "client_id" => env('GOOGLE_MYBUSINESS_CLIENT_ID') ?? env('GOOGLE_CLIENT_ID'),
                "project_id" => env('GOOGLE_MYBUSINESS_PROJECT_ID') ?? env('GOOGLE_PROJECT_ID'),
                "auth_uri" => env('GOOGLE_MYBUSINESS_AUTH_URI', env('GOOGLE_AUTH_URI', 'https://accounts.google.com/o/oauth2/auth')),
                "token_uri" => env('GOOGLE_MYBUSINESS_TOKEN_URI', env('GOOGLE_TOKEN_URI', 'https://oauth2.googleapis.com/token')),
                "auth_provider_x509_cert_url" => env('GOOGLE_MYBUSINESS_CERT_URL', env('GOOGLE_CERT_URL', 'https://www.googleapis.com/oauth2/v1/certs')),
                "client_secret" => env('GOOGLE_MYBUSINESS_CLIENT_SECRET') ?? env('GOOGLE_CLIENT_SECRET'),
                "redirect_uris" => explode('|', env('GOOGLE_MYBUSINESS_REDIRECT_URIS') ?? env('GOOGLE_REDIRECT_URIS', '')),
                "javascript_origins" => explode('|', env('GOOGLE_MYBUSINESS_JAVASCRIPT_ORIGINS') ?? env('GOOGLE_JAVASCRIPT_ORIGINS', '')),
                "scopes" => explode('|', env('GOOGLE_MYBUSINESS_SCOPES') ?? env('GOOGLE_SCOPES', 'https://www.googleapis.com/auth/business.manage')),
            ],
        ],
        'access-token-slug' => env('GOOGLE_MYBUSINESS_ACCESS_TOKEN_SLUG', env('GOOGLE_ACCESS_TOKEN_SLUG', 'gmb-token')),
    ],

    'youtube' => [
        'client-secret' => [
            "web" => [
                "client_id" => env('YOUTUBE_CLIENT_ID') ?? env('GOOGLE_CLIENT_ID'),
                "project_id" => env('YOUTUBE_PROJECT_ID') ?? env('GOOGLE_PROJECT_ID'),
                "auth_uri" => env('YOUTUBE_AUTH_URI', env('GOOGLE_AUTH_URI', 'https://accounts.google.com/o/oauth2/auth')),
                "token_uri" => env('YOUTUBE_TOKEN_URI', env('GOOGLE_TOKEN_URI', 'https://oauth2.googleapis.com/token')),
                "auth_provider_x509_cert_url" => env('YOUTUBE_CERT_URL', env('GOOGLE_CERT_URL', 'https://www.googleapis.com/oauth2/v1/certs')),
                "client_secret" => env('YOUTUBE_CLIENT_SECRET') ?? env('GOOGLE_CLIENT_SECRET'),
                "redirect_uris" => explode('|', env('YOUTUBE_REDIRECT_URIS') ?? env('GOOGLE_REDIRECT_URIS', '')),
                "javascript_origins" => explode('|', env('YOUTUBE_JAVASCRIPT_ORIGINS') ?? env('GOOGLE_JAVASCRIPT_ORIGINS', '')),
                "scopes" => explode('|', env('YOUTUBE_SCOPES') ?? env('GOOGLE_SCOPES', '')),
            ],
        ],
        'access-token-slug' => env('YOUTUBE_ACCESS_TOKEN_SLUG', env('GOOGLE_ACCESS_TOKEN_SLUG', 'youtube-token')),
    ],

    'youtube-analytics' => [
        'client-secret' => [
            "web" => [
                "client_id" => env('YOUTUBE_ANALYTICS_CLIENT_ID') ?? env('GOOGLE_CLIENT_ID'),
                "project_id" => env('YOUTUBE_ANALYTICS_PROJECT_ID') ?? env('GOOGLE_PROJECT_ID'),
                "auth_uri" => env('YOUTUBE_ANALYTICS_AUTH_URI', env('GOOGLE_AUTH_URI', 'https://accounts.google.com/o/oauth2/auth')),
                "token_uri" => env('YOUTUBE_ANALYTICS_TOKEN_URI', env('GOOGLE_TOKEN_URI', 'https://oauth2.googleapis.com/token')),
                "auth_provider_x509_cert_url" => env('YOUTUBE_ANALYTICS_CERT_URL', env('GOOGLE_CERT_URL', 'https://www.googleapis.com/oauth2/v1/certs')),
                "client_secret" => env('YOUTUBE_ANALYTICS_CLIENT_SECRET') ?? env('GOOGLE_CLIENT_SECRET'),
                "redirect_uris" => explode('|', env('YOUTUBE_ANALYTICS_REDIRECT_URIS') ?? env('GOOGLE_REDIRECT_URIS', '')),
                "javascript_origins" => explode('|', env('YOUTUBE_ANALYTICS_JAVASCRIPT_ORIGINS') ?? env('GOOGLE_JAVASCRIPT_ORIGINS', '')),
                "scopes" => explode('|', env('YOUTUBE_ANALYTICS_SCOPES') ?? env('GOOGLE_SCOPES', '')),
            ],
        ],
        'access-token-slug' => env('YOUTUBE_ANALYTICS_ACCESS_TOKEN_SLUG', env('GOOGLE_ACCESS_TOKEN_SLUG', 'youtube-analytics-token')),
    ],

    'test' => [
        'mock-json-token' => '{"access_token":"mock-access-token","expires_in":3599,"scope":"https:\/\/www.googleapis.com\/auth\/business.manage","token_type":"Bearer","created":'.time().',"refresh_token":"mock-refresh-token"}',
    ]
];
