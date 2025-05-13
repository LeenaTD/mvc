<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card_instruction', '_controller' => 'App\\Controller\\CardGameController::instruction'], null, ['GET' => 0], null, false, false, null]],
        '/session' => [[['_route' => 'page_session', '_controller' => 'App\\Controller\\CardGameController::showSession'], null, ['GET' => 0], null, false, false, null]],
        '/session/delete' => [[['_route' => 'page_session_delete', '_controller' => 'App\\Controller\\CardGameController::sessionDelete'], null, ['POST' => 0], null, false, false, null]],
        '/card/test/draw' => [[['_route' => 'card_test_draw', '_controller' => 'App\\Controller\\CardGameController::testDraw'], null, null, null, false, false, null]],
        '/card/play' => [[['_route' => 'card_play', '_controller' => 'App\\Controller\\CardGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/card/init' => [[['_route' => 'card_init', '_controller' => 'App\\Controller\\CardGameController::init'], null, ['POST' => 0], null, false, false, null]],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\CardGameController::deck'], null, ['GET' => 0], null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'card_deck_shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffle'], null, ['POST' => 0], null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card_deck_draw_one', '_controller' => 'App\\Controller\\CardGameController::drawOne'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck', '_controller' => 'App\\Controller\\CardGameControllerJson::apiDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api_deck_shuffle', '_controller' => 'App\\Controller\\CardGameControllerJson::apiShuffle'], null, ['POST' => 0], null, false, false, null]],
        '/test/api/shuffle' => [[['_route' => 'test_api_shuffle_post', '_controller' => 'App\\Controller\\CardGameControllerJson::testShufflePost'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'api_deck_draw_one', '_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawOne'], null, ['POST' => 0], null, false, false, null]],
        '/test/api/draw' => [[['_route' => 'test_api_draw_one_post', '_controller' => 'App\\Controller\\CardGameControllerJson::testDrawOnePost'], null, ['GET' => 0], null, false, false, null]],
        '/test/api/draw/many' => [[['_route' => 'test_api_draw_many_post', '_controller' => 'App\\Controller\\CardGameControllerJson::testDrawManyPost'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig' => [[['_route' => 'pig_start', '_controller' => 'App\\Controller\\DiceGameController::beginning'], null, null, null, false, false, null]],
        '/game/pig/test/roll' => [[['_route' => 'test_roll_dice', '_controller' => 'App\\Controller\\DiceGameController::testRollDice'], null, null, null, false, false, null]],
        '/game/pig/init' => [
            [['_route' => 'pig_init_get', '_controller' => 'App\\Controller\\DiceGameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pig_init_post', '_controller' => 'App\\Controller\\DiceGameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/pig/play' => [[['_route' => 'pig_play', '_controller' => 'App\\Controller\\DiceGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig/roll' => [[['_route' => 'pig_roll', '_controller' => 'App\\Controller\\DiceGameController::roll'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig/save' => [[['_route' => 'pig_save', '_controller' => 'App\\Controller\\DiceGameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/lucky/hi' => [[['_route' => 'app_lucky_hi', '_controller' => 'App\\Controller\\LuckyController::hi'], null, null, null, false, false, null]],
        '/api/lucky/number' => [[['_route' => 'app_luckycontrollerjson_jsonnumber', '_controller' => 'App\\Controller\\LuckyControllerJson::jsonNumber'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\LuckyControllerJson::quote'], null, null, null, false, false, null]],
        '/lucky/number/twig' => [[['_route' => 'lucky_number', '_controller' => 'App\\Controller\\LuckyControllerTwig::number'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\LuckyControllerTwig::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\LuckyControllerTwig::about'], null, null, null, false, false, null]],
        '/me' => [[['_route' => 'me', '_controller' => 'App\\Controller\\LuckyControllerTwig::me'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\LuckyControllerTwig::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\LuckyControllerTwig::lyckyNumber'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'landingPage', '_controller' => 'App\\Controller\\LuckyControllerTwig::landingPage'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/card/(?'
                    .'|test/(?'
                        .'|draw/(\\d+)(*:229)'
                        .'|cardhand/(\\d+)(*:251)'
                    .')'
                    .'|deck/draw/(\\d+)(*:275)'
                .')'
                .'|/api/deck/draw/(\\d+)(*:304)'
                .'|/game/pig/test/(?'
                    .'|roll/(\\d+)(*:340)'
                    .'|dicehand/(\\d+)(*:362)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'card_test_draw_many', '_controller' => 'App\\Controller\\CardGameController::testDrawMany'], ['num'], null, null, false, true, null]],
        251 => [[['_route' => 'card_test_card_hand', '_controller' => 'App\\Controller\\CardGameController::testCardHand'], ['num'], null, null, false, true, null]],
        275 => [[['_route' => 'card_deck_draw_many', '_controller' => 'App\\Controller\\CardGameController::drawMany'], ['number'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'api_deck_draw_many', '_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawMany'], ['number'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'test_roll_num_dices', '_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num'], null, null, false, true, null]],
        362 => [
            [['_route' => 'test_dicehand', '_controller' => 'App\\Controller\\DiceGameController::testDiceHand'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
