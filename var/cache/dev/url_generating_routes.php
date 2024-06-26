<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_event_index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event/']], [], [], []],
    'app_eventfront_index' => [[], ['_controller' => 'App\\Controller\\EventController::indexfront'], [], [['text', '/event/front']], [], [], []],
    'app_event_new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], [], []],
    'app_searchevent' => [[], ['_controller' => 'App\\Controller\\EventController::searchajax'], [], [['text', '/event/searcheventajax']], [], [], []],
    'app_event_date' => [[], ['_controller' => 'App\\Controller\\EventController::decroissantDate'], [], [['text', '/event/date']], [], [], []],
    'app_event_dateFin' => [[], ['_controller' => 'App\\Controller\\EventController::decroissantDateF'], [], [['text', '/event/dateF']], [], [], []],
    'app_event_nom' => [[], ['_controller' => 'App\\Controller\\EventController::decroissantNom'], [], [['text', '/event/nom']], [], [], []],
    'app_eventfront_new' => [[], ['_controller' => 'App\\Controller\\EventController::frontnew'], [], [['text', '/event/front/new']], [], [], []],
    'app_eventfront_details' => [['id'], ['_controller' => 'App\\Controller\\EventController::eventdetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/front']], [], [], []],
    'app_event_show' => [['id'], ['_controller' => 'App\\Controller\\EventController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_event_edit' => [['id'], ['_controller' => 'App\\Controller\\EventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_event_delete' => [['id'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_eventplace_index' => [[], ['_controller' => 'App\\Controller\\EventplaceController::index'], [], [['text', '/eventplace/']], [], [], []],
    'app_eventplace_new' => [[], ['_controller' => 'App\\Controller\\EventplaceController::new'], [], [['text', '/eventplace/new']], [], [], []],
    'app_eventplace_show' => [['id'], ['_controller' => 'App\\Controller\\EventplaceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eventplace']], [], [], []],
    'app_eventplace_edit' => [['id'], ['_controller' => 'App\\Controller\\EventplaceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/eventplace']], [], [], []],
    'app_eventplace_delete' => [['id'], ['_controller' => 'App\\Controller\\EventplaceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eventplace']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
