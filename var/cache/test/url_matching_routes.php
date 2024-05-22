<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/promo' => [[['_route' => 'app_promo', '_controller' => 'App\\Controller\\AccueilController::promo'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\AccueilController::search'], null, null, null, false, false, null]],
        '/contact/submit' => [[['_route' => 'app_contact_submit', '_controller' => 'App\\Controller\\AccueilController::submitContact'], null, null, null, false, false, null]],
        '/adminproducts' => [
            [['_route' => 'app_adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
            [['_route' => 'adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
        ],
        '/adminajouterproducts' => [[['_route' => 'app_admin_add_products', '_controller' => 'App\\Controller\\AdminproductsController::addProducts'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'app_create_product', '_controller' => 'App\\Controller\\AdminproductsController::create'], null, null, null, false, false, null]],
        '/admindeleteproducts' => [[['_route' => 'app_admin_delete_products', '_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], null, null, null, false, false, null]],
        '/adminupdateproducts' => [[['_route' => 'app_admin_update_products', '_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], null, null, null, false, false, null]],
        '/compte/admin' => [
            [['_route' => 'app_admin_compte', '_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], null, null, null, false, false, null],
            [['_route' => 'compte_admin', '_controller' => 'App\\Controller\\AdminproductsController::profiladmin'], null, null, null, false, false, null],
        ],
        '/edit/admin/profile' => [[['_route' => 'edit_admin_profile', '_controller' => 'App\\Controller\\AdminproductsController::editUserProfile'], null, null, null, false, false, null]],
        '/search/admin' => [[['_route' => 'search_admin', '_controller' => 'App\\Controller\\AdminproductsController::search'], null, null, null, false, false, null]],
        '/adminvue' => [[['_route' => 'app_adminvue', '_controller' => 'App\\Controller\\AdminvueController::index'], null, null, null, false, false, null]],
        '/coupon' => [[['_route' => 'app_coupon_index', '_controller' => 'App\\Controller\\CouponController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coupon/new' => [[['_route' => 'app_coupon_new', '_controller' => 'App\\Controller\\CouponController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coupon/admin/loyalty_card/new' => [[['_route' => 'loyalty_card_new', '_controller' => 'App\\Controller\\CouponController::newCoupon'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'app_api_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/loyalty/card' => [[['_route' => 'app_loyalty_card_index', '_controller' => 'App\\Controller\\LoyaltyCardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/loyalty/card/new' => [[['_route' => 'app_loyalty_card_new', '_controller' => 'App\\Controller\\LoyaltyCardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promo/admin' => [[['_route' => 'app_promo_admin_index', '_controller' => 'App\\Controller\\PromoAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promo/admin/new' => [[['_route' => 'app_promo_admin_new', '_controller' => 'App\\Controller\\PromoAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/user/profile' => [
            [['_route' => 'user_profile', '_controller' => 'App\\Controller\\UservueController::userProfile'], null, null, null, false, false, null],
            [['_route' => 'user_profile_view', '_controller' => 'App\\Controller\\UserController::viewProfile'], null, null, null, false, false, null],
        ],
        '/edit/user/profile' => [[['_route' => 'edit_user_profile', '_controller' => 'App\\Controller\\UservueController::editUserProfile'], null, null, null, false, false, null]],
        '/contact/user' => [[['_route' => 'app_contact_user', '_controller' => 'App\\Controller\\UservueController::indexcontact'], null, null, null, false, false, null]],
        '/update-quantity' => [[['_route' => 'update_quantity', '_controller' => 'App\\Controller\\UservueController::updateQuantity'], null, ['POST' => 0], null, false, false, null]],
        '/remove_from_cart' => [[['_route' => 'remove_from_cart', '_controller' => 'App\\Controller\\UservueController::removeFromCart'], null, ['POST' => 0], null, false, false, null]],
        '/product/new' => [[['_route' => 'adminajouterproducts', '_controller' => 'App\\Controller\\AdminproductsController::new'], null, null, null, false, false, null]],
        '/product/delete' => [[['_route' => 'admindeleteproducts', '_controller' => 'App\\Controller\\AdminproductsController::delete'], null, null, null, false, false, null]],
        '/product/update' => [[['_route' => 'adminupdateproducts', '_controller' => 'App\\Controller\\AdminupdateController::update'], null, null, null, false, false, null]],
        '/compteadmin' => [[['_route' => 'compteadmin', '_controller' => 'App\\Controller\\AdminproductsController::adminPage'], null, null, null, false, false, null]],
        '/api/user/panier' => [[['_route' => 'api_user_panier', '_controller' => 'App\\Controller\\UserController::getUserPanier'], null, null, null, false, false, null]],
        '/admin/products/list' => [[['_route' => 'admin_products_list', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\AccueilController::indexcontact'], null, null, null, false, false, null]],
        '/contact/user/submit' => [[['_route' => 'app_contact_user_submit', '_controller' => 'App\\Controller\\UservueController::submitContact'], null, ['POST' => 0], null, false, false, null]],
        '/api/loyalty-card' => [[['_route' => 'api_loyalty_card', '_controller' => 'App\\Controller\\UservueController::getLoyaltyCard'], null, ['GET' => 0], null, false, false, null]],
        '/search-products' => [[['_route' => 'app_search_products', '_controller' => 'App\\Controller\\UservueController::searchProducts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/delete_account' => [[['_route' => 'delete_user_account', '_controller' => 'App\\Controller\\UservueController::deleteAccount'], null, ['POST' => 0], null, false, false, null]],
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
                                    .'|ductss(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:751)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:777)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:815)'
                                        .')'
                                    .')'
                                    .'|mos(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:857)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:883)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:921)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:967)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:993)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1031)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|min(?'
                            .'|formedit/([^/]++)(*:1071)'
                            .'|/(?'
                                .'|ad(?'
                                    .'|d_quantity(?'
                                        .'|_promo/([^/]++)(*:1117)'
                                        .'|/([^/]++)(*:1135)'
                                    .')'
                                    .'|minproducts/categorie/([^/]++)(*:1175)'
                                .')'
                                .'|remove_quantity(?'
                                    .'|_promo/([^/]++)(*:1218)'
                                    .'|/([^/]++)(*:1236)'
                                .')'
                                .'|products/([^/]++)/(?'
                                    .'|add_quantity(?'
                                        .'|(*:1282)'
                                        .'|_promo(*:1297)'
                                    .')'
                                    .'|remove_quantity(?'
                                        .'|(*:1325)'
                                        .'|_promo(*:1340)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|d\\-to\\-cart/([^/]++)(*:1373)'
                    .')'
                    .'|ccueil/categorie/([^/]++)(*:1408)'
                .')'
                .'|/de(?'
                    .'|leteproduct/([^/]++)(*:1444)'
                    .'|tails\\-pro(?'
                        .'|duit(?'
                            .'|/([^/]++)(*:1482)'
                            .'|\\-user/([^/]++)(*:1506)'
                        .')'
                        .'|motion(?'
                            .'|/([^/]++)(*:1534)'
                            .'|\\-user/([^/]++)(*:1558)'
                        .')'
                    .')'
                .')'
                .'|/coupon/([^/]++)(?'
                    .'|(*:1589)'
                    .'|/edit(*:1603)'
                    .'|(*:1612)'
                .')'
                .'|/loyalty/card/([^/]++)(?'
                    .'|(*:1647)'
                    .'|/edit(*:1661)'
                    .'|(*:1670)'
                .')'
                .'|/promo/admin/([^/]++)(?'
                    .'|(*:1704)'
                    .'|/edit(*:1718)'
                    .'|(*:1727)'
                .')'
                .'|/user/(?'
                    .'|loyalty\\-card/([^/]++)(*:1768)'
                    .'|uservue/ca(?'
                        .'|rd/([^/]++)(*:1801)'
                        .'|tegorie/([^/]++)(*:1826)'
                    .')'
                .')'
                .'|/editproduct/([^/]++)(*:1858)'
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
        751 => [[['_route' => '_api_/productss/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/productss/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        777 => [
            [['_route' => '_api_/productss{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/productss{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/productss{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/productss{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        815 => [
            [['_route' => '_api_/productss/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/productss/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/productss/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/productss/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/productss/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/productss/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        857 => [[['_route' => '_api_/promos/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        883 => [
            [['_route' => '_api_/promos{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/promos{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        921 => [
            [['_route' => '_api_/promos/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/promos/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/promos/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Promo', '_api_operation_name' => '_api_/promos/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        967 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        993 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1031 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1071 => [[['_route' => 'app_admin_form_edit', '_controller' => 'App\\Controller\\AdminproductsController::editProductForm'], ['id'], null, null, false, true, null]],
        1117 => [[['_route' => 'admin_add_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::addQuantityPromo'], ['productId'], null, null, false, true, null]],
        1135 => [[['_route' => 'admin_add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], ['productId'], null, null, false, true, null]],
        1175 => [[['_route' => 'admin_category_products', '_controller' => 'App\\Controller\\AdminproductsController::showCategoryProductsAdmin'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1218 => [[['_route' => 'admin_remove_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantityPromo'], ['productId'], null, null, false, true, null]],
        1236 => [[['_route' => 'admin_remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], ['productId'], null, null, false, true, null]],
        1282 => [[['_route' => 'add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], ['productId'], ['POST' => 0], null, false, false, null]],
        1297 => [[['_route' => 'add_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::addQuantityPromo'], ['promoId'], ['POST' => 0], null, false, false, null]],
        1325 => [[['_route' => 'remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], ['productId'], ['POST' => 0], null, false, false, null]],
        1340 => [[['_route' => 'remove_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantityPromo'], ['promoId'], ['POST' => 0], null, false, false, null]],
        1373 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\UservueController::addToCart'], ['id'], null, null, false, true, null]],
        1408 => [[['_route' => 'accueil_category_products', '_controller' => 'App\\Controller\\AccueilController::showCategoryProductsAccueil'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1444 => [[['_route' => 'app_delete_product', '_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], ['id'], null, null, false, true, null]],
        1482 => [[['_route' => 'details_produit', '_controller' => 'App\\Controller\\AccueilController::detailsProduit'], ['id'], null, null, false, true, null]],
        1506 => [[['_route' => 'details_produit_user', '_controller' => 'App\\Controller\\UservueController::detailsProduit'], ['id'], null, null, false, true, null]],
        1534 => [[['_route' => 'details_promotion', '_controller' => 'App\\Controller\\AccueilController::detailsPromotion'], ['id'], null, null, false, true, null]],
        1558 => [[['_route' => 'details_promotion_user', '_controller' => 'App\\Controller\\UservueController::detailsPromotion'], ['id'], null, null, false, true, null]],
        1589 => [[['_route' => 'app_coupon_show', '_controller' => 'App\\Controller\\CouponController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1603 => [[['_route' => 'app_coupon_edit', '_controller' => 'App\\Controller\\CouponController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1612 => [[['_route' => 'app_coupon_delete', '_controller' => 'App\\Controller\\CouponController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1647 => [[['_route' => 'app_loyalty_card_show', '_controller' => 'App\\Controller\\LoyaltyCardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1661 => [[['_route' => 'app_loyalty_card_edit', '_controller' => 'App\\Controller\\LoyaltyCardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1670 => [[['_route' => 'app_loyalty_card_delete', '_controller' => 'App\\Controller\\LoyaltyCardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1704 => [[['_route' => 'app_promo_admin_show', '_controller' => 'App\\Controller\\PromoAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1718 => [[['_route' => 'app_promo_admin_edit', '_controller' => 'App\\Controller\\PromoAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1727 => [[['_route' => 'app_promo_admin_delete', '_controller' => 'App\\Controller\\PromoAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1768 => [[['_route' => 'user_loyalty_card', '_controller' => 'App\\Controller\\UservueController::redirectToUserLoyaltyCard'], ['id'], null, null, false, true, null]],
        1801 => [[['_route' => 'user_loyalty_card_page', '_controller' => 'App\\Controller\\UservueController::showUserLoyaltyCardPage'], ['id'], null, null, false, true, null]],
        1826 => [[['_route' => 'user_category_products', '_controller' => 'App\\Controller\\UservueController::showCategoryProducts'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1858 => [
            [['_route' => 'app_edit_product', '_controller' => 'App\\Controller\\AdminproductsController::editProduct'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
