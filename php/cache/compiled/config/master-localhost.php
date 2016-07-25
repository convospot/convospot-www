<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1469411415,
    'checksum' => '51b7ac0bf14b86da7381d771387cefbb',
    'files' => [
        'user/config' => [
            'plugins/lightslider' => [
                'file' => 'user/config/plugins/lightslider.yaml',
                'modified' => 1469234713
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1462396528
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1465754188
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1469411411
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1462396528
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1462396528
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1462396528
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1465996268
            ]
        ],
        'user/plugins' => [
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1462396528
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1462396530
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1462396530
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1462396530
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1462396530
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'form' => [
                'enabled' => true,
                'files' => [
                    'multiple' => false,
                    'destination' => '@self',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => false,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect' => NULL,
                'parent_acl' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'access',
                        6 => 'state'
                    ],
                    'additional_params' => [
                        'access' => 'site.login'
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'validate_password' => false,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 1800,
                    'name' => 'grav-rememberme'
                ],
                'oauth' => [
                    'enabled' => false,
                    'user' => [
                        'autocreate' => false,
                        'access' => [
                            'site' => [
                                'login' => true
                            ]
                        ]
                    ],
                    'providers' => [
                        'Facebook' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Google' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'GitHub' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Twitter' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ]
                    ]
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'lightslider' => [
                'enabled' => true,
                'built_in_css' => true,
                'slider_type' => 'text',
                'type_text_height' => 'auto',
                'type_text_vertical_padding' => '80px',
                'type_text_horizontal_padding' => '50px',
                'type_text_brightness' => 0,
                'item' => 1,
                'slideMove' => 1,
                'slideMargin' => 0,
                'loop' => 'false',
                'mode' => 'fade',
                'controls' => 'true',
                'keyPress' => 'true',
                'auto' => 'false',
                'pause' => 2000,
                'speed' => 1000,
                'pager' => 'true',
                'gallery' => 'false',
                'gallery_thumb_width' => 100,
                'gallery_thumb_height' => 100,
                'gallery_margin' => 15,
                'gallery_thumb_margin' => 5,
                'enableTouch' => 'true',
                'enableDrag' => 'true',
                'pauseOnHover' => 'false'
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpe' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'aiff' => [
                'type' => 'audio',
                'mime' => 'audio/aiff'
            ],
            'aif' => [
                'type' => 'audio',
                'mime' => 'audio/aif'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'docx' => [
                'type' => 'file',
                'mime' => 'application/msword'
            ],
            'xls' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlm' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xld' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xla' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlc' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlw' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xll' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'ppt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'pps' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'rtf' => [
                'type' => 'file',
                'mime' => 'application/rtf'
            ],
            'bmp' => [
                'type' => 'file',
                'mime' => 'image/bmp'
            ],
            'tiff' => [
                'type' => 'file',
                'mime' => 'image/tiff'
            ],
            'mpeg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpe' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'avi' => [
                'type' => 'file',
                'mime' => 'video/msvideo'
            ],
            'wmv' => [
                'type' => 'file',
                'mime' => 'video/x-ms-wmv'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'htm' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'tar' => [
                'type' => 'file',
                'mime' => 'application/x-tar'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
            'title' => 'convospot.io - simple intelligent communication',
            'author' => [
                'name' => 'Homer Quan',
                'email' => 'web@convospot.io'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Convospot provides chatbot with knowledge and actions'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => [
                '/redirect-test' => '/',
                '/old/(.*)' => '/new/$1'
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/new/(.*)' => '/blog/$1'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'header' => [
                'logo' => 'user/themes/convospot/assets/imgs/logo.svg',
                'title' => 'convospot',
                'menu_name' => 'MENU'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home'
            ],
            'pages' => [
                'theme' => 'convospot',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 301,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.1.4.min.js'
                ]
            ],
            'errors' => [
                'display' => false,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site'
            ]
        ],
        'security' => [
            'salt' => 'MH9KNpqa0wiXzW'
        ]
    ]
];
