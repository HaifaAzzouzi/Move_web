<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/front' => [[['_route' => 'app_eventfront_index', '_controller' => 'App\\Controller\\EventController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event/searcheventajax' => [[['_route' => 'app_searchevent', '_controller' => 'App\\Controller\\EventController::searchajax'], null, null, null, false, false, null]],
        '/event/date' => [[['_route' => 'app_event_date', '_controller' => 'App\\Controller\\EventController::decroissantDate'], null, null, null, false, false, null]],
        '/event/dateF' => [[['_route' => 'app_event_dateFin', '_controller' => 'App\\Controller\\EventController::decroissantDateF'], null, null, null, false, false, null]],
        '/event/nom' => [[['_route' => 'app_event_nom', '_controller' => 'App\\Controller\\EventController::decroissantNom'], null, null, null, false, false, null]],
        '/event/front/new' => [[['_route' => 'app_eventfront_new', '_controller' => 'App\\Controller\\EventController::frontnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eventplace' => [[['_route' => 'app_eventplace_index', '_controller' => 'App\\Controller\\EventplaceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/eventplace/new' => [[['_route' => 'app_eventplace_new', '_controller' => 'App\\Controller\\EventplaceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/event(?'
                    .'|/(?'
                        .'|front/([^/]++)(*:34)'
                        .'|([^/]++)(?'
                            .'|(*:52)'
                            .'|/edit(*:64)'
                            .'|(*:71)'
                        .')'
                    .')'
                    .'|place/([^/]++)(?'
                        .'|(*:97)'
                        .'|/edit(*:109)'
                        .'|(*:117)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:158)'
                    .'|wdt/([^/]++)(*:178)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:224)'
                            .'|router(*:238)'
                            .'|exception(?'
                                .'|(*:258)'
                                .'|\\.css(*:271)'
                            .')'
                        .')'
                        .'|(*:281)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_eventfront_details', '_controller' => 'App\\Controller\\EventController::eventdetails'], ['id'], ['GET' => 0], null, false, true, null]],
        52 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        64 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        71 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        97 => [[['_route' => 'app_eventplace_show', '_controller' => 'App\\Controller\\EventplaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        109 => [[['_route' => 'app_eventplace_edit', '_controller' => 'App\\Controller\\EventplaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        117 => [[['_route' => 'app_eventplace_delete', '_controller' => 'App\\Controller\\EventplaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        158 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        178 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        224 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        238 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        258 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        271 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        281 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
