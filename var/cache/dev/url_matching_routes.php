<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/contest' => [[['_route' => 'app_admin_contest_index', '_controller' => 'App\\Controller\\Admin\\ContestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/contest/new' => [[['_route' => 'app_admin_contest_new', '_controller' => 'App\\Controller\\Admin\\ContestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/game' => [[['_route' => 'app_admin_game', '_controller' => 'App\\Controller\\Admin\\GameController::index'], null, null, null, false, false, null]],
        '/admin/game/new' => [[['_route' => 'app_admin_game_new', '_controller' => 'App\\Controller\\Admin\\GameController::new'], null, null, null, false, false, null]],
        '/admin/player' => [[['_route' => 'app_admin_player_index', '_controller' => 'App\\Controller\\Admin\\PlayerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/player/new' => [[['_route' => 'app_admin_player_new', '_controller' => 'App\\Controller\\Admin\\PlayerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::displayGame'], null, null, null, false, false, null]],
        '/ici/test' => [[['_route' => 'app_ici_test', '_controller' => 'App\\Controller\\IciTestController::index'], null, null, null, false, false, null]],
        '/test/calcul' => [[['_route' => 'app_test_calcul', '_controller' => 'App\\Controller\\IciTestController::calcul'], null, null, null, false, false, null]],
        '/test/salut' => [[['_route' => 'app_test_salut', '_controller' => 'App\\Controller\\IciTestController::salut'], null, null, null, false, false, null]],
        '/test/array' => [[['_route' => 'app_icitest_array', '_controller' => 'App\\Controller\\IciTestController::array'], null, null, null, false, false, null]],
        '/test/assoc' => [[['_route' => 'app_icitest_tab', '_controller' => 'App\\Controller\\IciTestController::tab'], null, null, null, false, false, null]],
        '/test/object' => [[['_route' => 'app_icitest_object', '_controller' => 'App\\Controller\\IciTestController::object'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/Deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|contest/([^/]++)(?'
                        .'|(*:198)'
                        .'|/edit(*:211)'
                        .'|(*:219)'
                    .')'
                    .'|game/(?'
                        .'|edit/([^/]++)(*:249)'
                        .'|modify/([^/]++)(*:272)'
                        .'|delete/([^/]++)(*:295)'
                    .')'
                    .'|player/([^/]++)(?'
                        .'|(*:322)'
                        .'|/edit(*:335)'
                        .'|(*:343)'
                    .')'
                    .'|user/(?'
                        .'|([0-9]+)(*:368)'
                        .'|([^/]++)(?'
                            .'|/edit(*:392)'
                            .'|(*:400)'
                        .')'
                        .'|update(*:415)'
                    .')'
                .')'
                .'|/commencer\\-une\\-partie\\-([^/]++)(*:458)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'app_admin_contest_show', '_controller' => 'App\\Controller\\Admin\\ContestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'app_admin_contest_edit', '_controller' => 'App\\Controller\\Admin\\ContestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'app_admin_contest_delete', '_controller' => 'App\\Controller\\Admin\\ContestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        249 => [[['_route' => 'app_admin_game_edit', '_controller' => 'App\\Controller\\Admin\\GameController::edit'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'app_admin_game_modify', '_controller' => 'App\\Controller\\Admin\\GameController::modify'], ['title'], null, null, false, true, null]],
        295 => [[['_route' => 'app_admin_game_delete', '_controller' => 'App\\Controller\\Admin\\GameController::delete'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'app_admin_player_show', '_controller' => 'App\\Controller\\Admin\\PlayerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_admin_player_edit', '_controller' => 'App\\Controller\\Admin\\PlayerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_admin_player_delete', '_controller' => 'App\\Controller\\Admin\\PlayerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        368 => [[['_route' => 'app_admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        415 => [[['_route' => 'app_admin_user_update', '_controller' => 'App\\Controller\\Admin\\UserController::update'], [], null, null, false, false, null]],
        458 => [
            [['_route' => 'app_home_contest', '_controller' => 'App\\Controller\\HomeController::commencer'], ['title'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
