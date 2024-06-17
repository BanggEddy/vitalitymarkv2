<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/legals' => [[['_route' => 'app_legals', '_controller' => 'App\\Controller\\AccueilController::mentionsLegalsPage'], null, null, null, false, false, null]],
        '/promo' => [[['_route' => 'app_promo', '_controller' => 'App\\Controller\\AccueilController::afficherLesPromos'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\AccueilController::rechercherUnProduitVisiteur'], null, null, null, false, false, null]],
        '/contact/submit' => [[['_route' => 'app_contact_submit', '_controller' => 'App\\Controller\\AccueilController::submitContact'], null, ['POST' => 0], null, false, false, null]],
        '/accepterterms' => [[['_route' => 'app_accepterterms', '_controller' => 'App\\Controller\\AccueilController::accepterTerms'], null, null, null, false, false, null]],
        '/adminproducts' => [
            [['_route' => 'app_adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
            [['_route' => 'adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
        ],
        '/adminajouterproducts' => [[['_route' => 'app_admin_add_products', '_controller' => 'App\\Controller\\AdminproductsController::ajoutProductPage'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'app_create_product', '_controller' => 'App\\Controller\\AdminproductsController::createProduit'], null, null, null, false, false, null]],
        '/admindeleteproducts' => [[['_route' => 'app_admin_delete_products', '_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], null, null, null, false, false, null]],
        '/adminupdateproducts' => [[['_route' => 'app_admin_update_products', '_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], null, null, null, false, false, null]],
        '/compte/admin' => [
            [['_route' => 'app_admin_compte', '_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], null, null, null, false, false, null],
            [['_route' => 'compte_admin', '_controller' => 'App\\Controller\\AdminproductsController::modifierProfilAdmin'], null, null, null, false, false, null],
        ],
        '/edit/admin/profile' => [[['_route' => 'edit_admin_profile', '_controller' => 'App\\Controller\\AdminproductsController::modifierProfilAdminFlush'], null, null, null, false, false, null]],
        '/search/admin' => [[['_route' => 'search_admin', '_controller' => 'App\\Controller\\AdminproductsController::rechercherUnProduitAdmin'], null, null, null, false, false, null]],
        '/coupon' => [[['_route' => 'app_coupon_index', '_controller' => 'App\\Controller\\CouponController::index'], null, null, null, true, false, null]],
        '/coupon/new' => [[['_route' => 'app_coupon_new', '_controller' => 'App\\Controller\\CouponController::new'], null, null, null, false, false, null]],
        '/coupon/admin/loyalty_card/new' => [[['_route' => 'loyalty_card_new', '_controller' => 'App\\Controller\\CouponController::newCoupon'], null, null, null, false, false, null]],
        '/gestion/user' => [[['_route' => 'app_gestion_user_index', '_controller' => 'App\\Controller\\GestionUserController::index'], null, null, null, true, false, null]],
        '/loyalty/card' => [[['_route' => 'app_loyalty_card_index', '_controller' => 'App\\Controller\\LoyaltyCardController::index'], null, null, null, true, false, null]],
        '/promo/admin' => [[['_route' => 'app_promo_admin_index', '_controller' => 'App\\Controller\\PromoAdminController::index'], null, null, null, true, false, null]],
        '/promo/admin/new' => [[['_route' => 'app_promo_admin_new', '_controller' => 'App\\Controller\\PromoAdminController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/uservue' => [
            [['_route' => 'app_uservue', '_controller' => 'App\\Controller\\UservueController::index'], null, null, null, false, false, null],
            [['_route' => 'uservue', '_controller' => 'App\\Controller\\UservueController::index'], null, null, null, false, false, null],
        ],
        '/user/promo' => [[['_route' => 'app_user_promo', '_controller' => 'App\\Controller\\UservueController::promo'], null, null, null, false, false, null]],
        '/user/panier' => [
            [['_route' => 'user_panier', '_controller' => 'App\\Controller\\UservueController::getUserPanier'], null, null, null, false, false, null],
            [['_route' => 'panier_index', '_controller' => 'App\\Controller\\UserController::getUserPanier'], null, null, null, false, false, null],
        ],
        '/search/user' => [[['_route' => 'search_user', '_controller' => 'App\\Controller\\UservueController::search'], null, null, null, false, false, null]],
        '/user/uservue/creer/carte/loyalty' => [[['_route' => 'creer_carte_loyalty', '_controller' => 'App\\Controller\\UservueController::CreerCarteLoyalty'], null, null, null, false, false, null]],
        '/user/profile' => [
            [['_route' => 'user_profile', '_controller' => 'App\\Controller\\UservueController::userProfile'], null, null, null, false, false, null],
            [['_route' => 'user_profile_view', '_controller' => 'App\\Controller\\UserController::viewProfile'], null, null, null, false, false, null],
        ],
        '/edit/user/profile' => [[['_route' => 'edit_user_profile', '_controller' => 'App\\Controller\\UservueController::modifierProfilUser'], null, null, null, false, false, null]],
        '/contact/user' => [[['_route' => 'app_contact_user', '_controller' => 'App\\Controller\\UservueController::indexcontact'], null, null, null, false, false, null]],
        '/contact/user/submit' => [[['_route' => 'app_contact_user_submit', '_controller' => 'App\\Controller\\UservueController::submitContact'], null, null, null, false, false, null]],
        '/update-quantity' => [[['_route' => 'update_quantity', '_controller' => 'App\\Controller\\UservueController::updateQuantityProduit'], null, ['POST' => 0], null, false, false, null]],
        '/enleverproduit_fromcart' => [[['_route' => 'enleverproduit_fromcart', '_controller' => 'App\\Controller\\UservueController::removeFromCartProduit'], null, ['POST' => 0], null, false, false, null]],
        '/legals/user' => [[['_route' => 'app_legals_user', '_controller' => 'App\\Controller\\UservueController::mentionsLegalsPage'], null, null, null, false, false, null]],
        '/product/new' => [[['_route' => 'adminajouterproducts', '_controller' => 'App\\Controller\\AdminproductsController::new'], null, null, null, false, false, null]],
        '/product/delete' => [[['_route' => 'admindeleteproducts', '_controller' => 'App\\Controller\\AdminproductsController::delete'], null, null, null, false, false, null]],
        '/product/update' => [[['_route' => 'adminupdateproducts', '_controller' => 'App\\Controller\\AdminupdateController::update'], null, null, null, false, false, null]],
        '/compteadmin' => [[['_route' => 'compteadmin', '_controller' => 'App\\Controller\\AdminproductsController::adminPage'], null, null, null, false, false, null]],
        '/api/user/panier' => [[['_route' => 'api_user_panier', '_controller' => 'App\\Controller\\UserController::getUserPanier'], null, null, null, false, false, null]],
        '/admin/products/list' => [[['_route' => 'admin_products_list', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\AccueilController::indexcontact'], null, null, null, false, false, null]],
        '/api/loyalty-card' => [[['_route' => 'api_loyalty_card', '_controller' => 'App\\Controller\\UservueController::getLoyaltyCard'], null, ['GET' => 0], null, false, false, null]],
        '/delete_account' => [[['_route' => 'delete_user_account', '_controller' => 'App\\Controller\\UservueController::suppressionCompte'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login', '_controller' => 'App\\Security\\AuthAuthenticator::onAuthenticationSuccess'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|\\.well\\-known/genid/([^/]++)(*:49)'
                            .'|errors(?:/(\\d+))?(*:73)'
                            .'|validation_errors/([^/]++)(*:106)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:143)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:174)'
                            .'|co(?'
                                .'|nt(?'
                                    .'|exts/([^.]+)(?:\\.(jsonld))?(*:219)'
                                    .'|acts(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:260)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:286)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:324)'
                                        .')'
                                    .')'
                                .')'
                                .'|upons(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:369)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:395)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:433)'
                                    .')'
                                .')'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:473)'
                            .')'
                            .'|loyalty_cards(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:524)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:550)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:588)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|aniers(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:637)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:663)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:701)'
                                    .')'
                                .')'
                                .'|ro(?'
                                    .'|ducts(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:750)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:776)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:814)'
                                        .')'
                                    .')'
                                    .'|mos(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:856)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:882)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:920)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:966)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:992)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1030)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|min(?'
                            .'|formedit/([^/]++)(*:1070)'
                            .'|/(?'
                                .'|ad(?'
                                    .'|d_quantity/([^/]++)(*:1107)'
                                    .'|minproducts/categorie/([^/]++)(*:1146)'
                                .')'
                                .'|remove_quantity/([^/]++)(*:1180)'
                                .'|products/([^/]++)/(?'
                                    .'|add_quantity(*:1222)'
                                    .'|remove_quantity(*:1246)'
                                .')'
                            .')'
                        .')'
                        .'|d\\-dans\\-panier/([^/]++)(*:1282)'
                    .')'
                    .'|ccueil/categorie/([^/]++)(*:1317)'
                .')'
                .'|/de(?'
                    .'|leteproduct/([^/]++)(*:1353)'
                    .'|tails\\-pro(?'
                        .'|duit(?'
                            .'|/([^/]++)(*:1391)'
                            .'|\\-user/([^/]++)(*:1415)'
                        .')'
                        .'|motion(?'
                            .'|/([^/]++)(*:1443)'
                            .'|\\-user/([^/]++)(*:1467)'
                        .')'
                    .')'
                .')'
                .'|/coupon/([^/]++)(?'
                    .'|(*:1498)'
                    .'|/edit(*:1512)'
                    .'|(*:1521)'
                .')'
                .'|/gestion/user/([^/]++)(?'
                    .'|(*:1556)'
                    .'|/edit(*:1570)'
                    .'|(*:1579)'
                .')'
                .'|/loyalty/card/([^/]++)(?'
                    .'|(*:1614)'
                    .'|/edit(*:1628)'
                    .'|(*:1637)'
                .')'
                .'|/promo/admin/([^/]++)(?'
                    .'|(*:1671)'
                    .'|/edit(*:1685)'
                    .'|(*:1694)'
                .')'
                .'|/user/(?'
                    .'|loyalty\\-card/([^/]++)(*:1735)'
                    .'|uservue/ca(?'
                        .'|rd/([^/]++)(*:1768)'
                        .'|tegorie/([^/]++)(*:1793)'
                    .')'
                .')'
                .'|/editproduct/([^/]++)(*:1825)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        73 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.not_exposed', 'status' => '500'], ['status'], null, null, false, true, null]],
        106 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        174 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        219 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        260 => [[['_route' => '_api_/contacts/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Contact', '_api_operation_name' => '_api_/contacts/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        286 => [
            [['_route' => '_api_/contacts{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Contact', '_api_operation_name' => '_api_/contacts{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/contacts{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Contact', '_api_operation_name' => '_api_/contacts{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        324 => [
            [['_route' => '_api_/contacts/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Contact', '_api_operation_name' => '_api_/contacts/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/contacts/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Contact', '_api_operation_name' => '_api_/contacts/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/contacts/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Contact', '_api_operation_name' => '_api_/contacts/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        369 => [[['_route' => '_api_/coupons/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Coupon', '_api_operation_name' => '_api_/coupons/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        395 => [
            [['_route' => '_api_/coupons{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Coupon', '_api_operation_name' => '_api_/coupons{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/coupons{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Coupon', '_api_operation_name' => '_api_/coupons{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        433 => [
            [['_route' => '_api_/coupons/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Coupon', '_api_operation_name' => '_api_/coupons/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/coupons/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Coupon', '_api_operation_name' => '_api_/coupons/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/coupons/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Coupon', '_api_operation_name' => '_api_/coupons/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        473 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        524 => [[['_route' => '_api_/loyalty_cards/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\LoyaltyCard', '_api_operation_name' => '_api_/loyalty_cards/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        550 => [
            [['_route' => '_api_/loyalty_cards{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\LoyaltyCard', '_api_operation_name' => '_api_/loyalty_cards{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/loyalty_cards{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\LoyaltyCard', '_api_operation_name' => '_api_/loyalty_cards{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        588 => [
            [['_route' => '_api_/loyalty_cards/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\LoyaltyCard', '_api_operation_name' => '_api_/loyalty_cards/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/loyalty_cards/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\LoyaltyCard', '_api_operation_name' => '_api_/loyalty_cards/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/loyalty_cards/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\LoyaltyCard', '_api_operation_name' => '_api_/loyalty_cards/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        637 => [[['_route' => '_api_/paniers/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        663 => [
            [['_route' => '_api_/paniers{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/paniers{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        701 => [
            [['_route' => '_api_/paniers/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/paniers/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/paniers/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        750 => [[['_route' => '_api_/products/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        776 => [
            [['_route' => '_api_/products{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/products{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        814 => [
            [['_route' => '_api_/products/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/products/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/products/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        856 => [[['_route' => '_api_/promos/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        882 => [
            [['_route' => '_api_/promos{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/promos{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        920 => [
            [['_route' => '_api_/promos/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/promos/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/promos/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        966 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        992 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1030 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1070 => [[['_route' => 'app_admin_form_edit', '_controller' => 'App\\Controller\\AdminproductsController::editProductFormFront'], ['id'], null, null, false, true, null]],
        1107 => [[['_route' => 'admin_add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::ajoutQuantiteProduitAdmin'], ['productId'], null, null, false, true, null]],
        1146 => [[['_route' => 'admin_category_products', '_controller' => 'App\\Controller\\AdminproductsController::showCategoryProductsAdmin'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1180 => [[['_route' => 'admin_remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::enleverQuantiteProduitAdmin'], ['productId'], null, null, false, true, null]],
        1222 => [[['_route' => 'add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::ajoutQuantiteProduitAdmin'], ['productId'], ['POST' => 0], null, false, false, null]],
        1246 => [[['_route' => 'remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::enleverQuantiteProduitAdmin'], ['productId'], ['POST' => 0], null, false, false, null]],
        1282 => [[['_route' => 'add_dans_panier', '_controller' => 'App\\Controller\\UservueController::addDansPanier'], ['id'], null, null, false, true, null]],
        1317 => [[['_route' => 'accueil_category_products', '_controller' => 'App\\Controller\\AccueilController::categorieAccueil'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1353 => [[['_route' => 'app_delete_product', '_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], ['id'], null, null, false, true, null]],
        1391 => [[['_route' => 'details_produit', '_controller' => 'App\\Controller\\AccueilController::detailsDunProduit'], ['id'], null, null, false, true, null]],
        1415 => [[['_route' => 'details_produit_user', '_controller' => 'App\\Controller\\UservueController::detailsProduit'], ['id'], null, null, false, true, null]],
        1443 => [[['_route' => 'details_promotion', '_controller' => 'App\\Controller\\AccueilController::detailsPromotion'], ['id'], null, null, false, true, null]],
        1467 => [[['_route' => 'details_promotion_user', '_controller' => 'App\\Controller\\UservueController::detailsPromotion'], ['id'], null, null, false, true, null]],
        1498 => [[['_route' => 'app_coupon_show', '_controller' => 'App\\Controller\\CouponController::show'], ['id'], null, null, false, true, null]],
        1512 => [[['_route' => 'app_coupon_edit', '_controller' => 'App\\Controller\\CouponController::edit'], ['id'], null, null, false, false, null]],
        1521 => [[['_route' => 'app_coupon_delete', '_controller' => 'App\\Controller\\CouponController::delete'], ['id'], null, null, false, true, null]],
        1556 => [[['_route' => 'app_gestion_user_show', '_controller' => 'App\\Controller\\GestionUserController::show'], ['id'], null, null, false, true, null]],
        1570 => [[['_route' => 'app_gestion_user_edit', '_controller' => 'App\\Controller\\GestionUserController::edit'], ['id'], null, null, false, false, null]],
        1579 => [[['_route' => 'app_gestion_user_delete', '_controller' => 'App\\Controller\\GestionUserController::delete'], ['id'], null, null, false, true, null]],
        1614 => [[['_route' => 'app_loyalty_card_show', '_controller' => 'App\\Controller\\LoyaltyCardController::show'], ['id'], null, null, false, true, null]],
        1628 => [[['_route' => 'app_loyalty_card_edit', '_controller' => 'App\\Controller\\LoyaltyCardController::edit'], ['id'], null, null, false, false, null]],
        1637 => [[['_route' => 'app_loyalty_card_delete', '_controller' => 'App\\Controller\\LoyaltyCardController::delete'], ['id'], null, null, false, true, null]],
        1671 => [[['_route' => 'app_promo_admin_show', '_controller' => 'App\\Controller\\PromoAdminController::show'], ['id'], null, null, false, true, null]],
        1685 => [[['_route' => 'app_promo_admin_edit', '_controller' => 'App\\Controller\\PromoAdminController::edit'], ['id'], null, null, false, false, null]],
        1694 => [[['_route' => 'app_promo_admin_delete', '_controller' => 'App\\Controller\\PromoAdminController::delete'], ['id'], null, null, false, true, null]],
        1735 => [[['_route' => 'user_loyalty_card', '_controller' => 'App\\Controller\\UservueController::redirectToUserLoyaltyCard'], ['id'], null, null, false, true, null]],
        1768 => [[['_route' => 'user_loyalty_card_page', '_controller' => 'App\\Controller\\UservueController::showUserLoyaltyCardPage'], ['id'], null, null, false, true, null]],
        1793 => [[['_route' => 'user_category_products', '_controller' => 'App\\Controller\\UservueController::pageCategoriesUser'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1825 => [
            [['_route' => 'app_edit_product', '_controller' => 'App\\Controller\\AdminproductsController::editProductFormFront'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
