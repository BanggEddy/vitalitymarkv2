<?php

namespace Container5v2XMpW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5AOYZqLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5AOYZqL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5AOYZqL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AccueilController::afficherLesPromos' => ['privates', '.service_locator.1j13wVw', 'get_ServiceLocator_1j13wVwService', true],
            'App\\Controller\\AccueilController::categorieAccueil' => ['privates', '.service_locator.DdYZow0', 'get_ServiceLocator_DdYZow0Service', true],
            'App\\Controller\\AccueilController::detailsDunProduit' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AccueilController::index' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AccueilController::rechercherUnProduitVisiteur' => ['privates', '.service_locator.497Dqc6', 'get_ServiceLocator_497Dqc6Service', true],
            'App\\Controller\\AdminproductsController::createProduit' => ['privates', '.service_locator.OTAdKRU', 'get_ServiceLocator_OTAdKRUService', true],
            'App\\Controller\\AdminproductsController::deleteProduct' => ['privates', '.service_locator.oG50dAC', 'get_ServiceLocator_OG50dACService', true],
            'App\\Controller\\AdminproductsController::deleteProducts' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AdminproductsController::editProductFormFront' => ['privates', '.service_locator.oG50dAC', 'get_ServiceLocator_OG50dACService', true],
            'App\\Controller\\AdminproductsController::index' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AdminproductsController::modifierProfilAdminFlush' => ['privates', '.service_locator.EU0TCmr', 'get_ServiceLocator_EU0TCmrService', true],
            'App\\Controller\\AdminproductsController::rechercherUnProduitAdmin' => ['privates', '.service_locator.KYY0qKo', 'get_ServiceLocator_KYY0qKoService', true],
            'App\\Controller\\AdminproductsController::showCategoryProductsAdmin' => ['privates', '.service_locator.KYY0qKo', 'get_ServiceLocator_KYY0qKoService', true],
            'App\\Controller\\AdminproductsController::updateProducts' => ['privates', '.service_locator.KYY0qKo', 'get_ServiceLocator_KYY0qKoService', true],
            'App\\Controller\\CouponController::delete' => ['privates', '.service_locator.FH0U8W3', 'get_ServiceLocator_FH0U8W3Service', true],
            'App\\Controller\\CouponController::edit' => ['privates', '.service_locator.FH0U8W3', 'get_ServiceLocator_FH0U8W3Service', true],
            'App\\Controller\\CouponController::index' => ['privates', '.service_locator.KuADytJ', 'get_ServiceLocator_KuADytJService', true],
            'App\\Controller\\CouponController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CouponController::newCoupon' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CouponController::show' => ['privates', '.service_locator.m2Z5Caj', 'get_ServiceLocator_M2Z5CajService', true],
            'App\\Controller\\GestionUserController::delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\GestionUserController::edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\GestionUserController::index' => ['privates', '.service_locator.Gv8Stob', 'get_ServiceLocator_Gv8StobService', true],
            'App\\Controller\\GestionUserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Controller\\LoyaltyCardController::delete' => ['privates', '.service_locator.DxJ_gkE', 'get_ServiceLocator_DxJGkEService', true],
            'App\\Controller\\LoyaltyCardController::edit' => ['privates', '.service_locator.DxJ_gkE', 'get_ServiceLocator_DxJGkEService', true],
            'App\\Controller\\LoyaltyCardController::index' => ['privates', '.service_locator.7i3BCB3', 'get_ServiceLocator_7i3BCB3Service', true],
            'App\\Controller\\LoyaltyCardController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LoyaltyCardController::show' => ['privates', '.service_locator.oFpVnn4', 'get_ServiceLocator_OFpVnn4Service', true],
            'App\\Controller\\PromoAdminController::delete' => ['privates', '.service_locator.DtsKEqY', 'get_ServiceLocator_DtsKEqYService', true],
            'App\\Controller\\PromoAdminController::edit' => ['privates', '.service_locator.DtsKEqY', 'get_ServiceLocator_DtsKEqYService', true],
            'App\\Controller\\PromoAdminController::index' => ['privates', '.service_locator.1j13wVw', 'get_ServiceLocator_1j13wVwService', true],
            'App\\Controller\\PromoAdminController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PromoAdminController::show' => ['privates', '.service_locator.mcb6ZOo', 'get_ServiceLocator_Mcb6ZOoService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.ywU5Sl_', 'get_ServiceLocator_YwU5SlService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UservueController::CreerCarteLoyalty' => ['privates', '.service_locator.dAO6ypm', 'get_ServiceLocator_DAO6ypmService', true],
            'App\\Controller\\UservueController::addDansPanier' => ['privates', '.service_locator.pXnaH3B', 'get_ServiceLocator_PXnaH3BService', true],
            'App\\Controller\\UservueController::detailsProduit' => ['privates', '.service_locator.ncyOCPw', 'get_ServiceLocator_NcyOCPwService', true],
            'App\\Controller\\UservueController::getUserPanier' => ['privates', '.service_locator.SE3MauL', 'get_ServiceLocator_SE3MauLService', true],
            'App\\Controller\\UservueController::index' => ['privates', '.service_locator.aEXkTBP', 'get_ServiceLocator_AEXkTBPService', true],
            'App\\Controller\\UservueController::indexcontact' => ['privates', '.service_locator.SE3MauL', 'get_ServiceLocator_SE3MauLService', true],
            'App\\Controller\\UservueController::modifierProfilUser' => ['privates', '.service_locator.EU0TCmr', 'get_ServiceLocator_EU0TCmrService', true],
            'App\\Controller\\UservueController::pageCategoriesUser' => ['privates', '.service_locator.2qiSyMX', 'get_ServiceLocator_2qiSyMXService', true],
            'App\\Controller\\UservueController::promo' => ['privates', '.service_locator.aEXkTBP', 'get_ServiceLocator_AEXkTBPService', true],
            'App\\Controller\\UservueController::removeFromCartProduit' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UservueController::search' => ['privates', '.service_locator.dQqFLKh', 'get_ServiceLocator_DQqFLKhService', true],
            'App\\Controller\\UservueController::showUserLoyaltyCardPage' => ['privates', '.service_locator.84xubWY', 'get_ServiceLocator_84xubWYService', true],
            'App\\Controller\\UservueController::submitContact' => ['privates', '.service_locator.AUQz.CV', 'get_ServiceLocator_AUQz_CVService', true],
            'App\\Controller\\UservueController::suppressionCompte' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UservueController::updateQuantityProduit' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UservueController::userProfile' => ['privates', '.service_locator.SE3MauL', 'get_ServiceLocator_SE3MauLService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AccueilController:afficherLesPromos' => ['privates', '.service_locator.1j13wVw', 'get_ServiceLocator_1j13wVwService', true],
            'App\\Controller\\AccueilController:categorieAccueil' => ['privates', '.service_locator.DdYZow0', 'get_ServiceLocator_DdYZow0Service', true],
            'App\\Controller\\AccueilController:detailsDunProduit' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AccueilController:index' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AccueilController:rechercherUnProduitVisiteur' => ['privates', '.service_locator.497Dqc6', 'get_ServiceLocator_497Dqc6Service', true],
            'App\\Controller\\AdminproductsController:createProduit' => ['privates', '.service_locator.OTAdKRU', 'get_ServiceLocator_OTAdKRUService', true],
            'App\\Controller\\AdminproductsController:deleteProduct' => ['privates', '.service_locator.oG50dAC', 'get_ServiceLocator_OG50dACService', true],
            'App\\Controller\\AdminproductsController:deleteProducts' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AdminproductsController:editProductFormFront' => ['privates', '.service_locator.oG50dAC', 'get_ServiceLocator_OG50dACService', true],
            'App\\Controller\\AdminproductsController:index' => ['privates', '.service_locator.xfrE5I6', 'get_ServiceLocator_XfrE5I6Service', true],
            'App\\Controller\\AdminproductsController:modifierProfilAdminFlush' => ['privates', '.service_locator.EU0TCmr', 'get_ServiceLocator_EU0TCmrService', true],
            'App\\Controller\\AdminproductsController:rechercherUnProduitAdmin' => ['privates', '.service_locator.KYY0qKo', 'get_ServiceLocator_KYY0qKoService', true],
            'App\\Controller\\AdminproductsController:showCategoryProductsAdmin' => ['privates', '.service_locator.KYY0qKo', 'get_ServiceLocator_KYY0qKoService', true],
            'App\\Controller\\AdminproductsController:updateProducts' => ['privates', '.service_locator.KYY0qKo', 'get_ServiceLocator_KYY0qKoService', true],
            'App\\Controller\\CouponController:delete' => ['privates', '.service_locator.FH0U8W3', 'get_ServiceLocator_FH0U8W3Service', true],
            'App\\Controller\\CouponController:edit' => ['privates', '.service_locator.FH0U8W3', 'get_ServiceLocator_FH0U8W3Service', true],
            'App\\Controller\\CouponController:index' => ['privates', '.service_locator.KuADytJ', 'get_ServiceLocator_KuADytJService', true],
            'App\\Controller\\CouponController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CouponController:newCoupon' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CouponController:show' => ['privates', '.service_locator.m2Z5Caj', 'get_ServiceLocator_M2Z5CajService', true],
            'App\\Controller\\GestionUserController:delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\GestionUserController:edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\GestionUserController:index' => ['privates', '.service_locator.Gv8Stob', 'get_ServiceLocator_Gv8StobService', true],
            'App\\Controller\\GestionUserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Controller\\LoyaltyCardController:delete' => ['privates', '.service_locator.DxJ_gkE', 'get_ServiceLocator_DxJGkEService', true],
            'App\\Controller\\LoyaltyCardController:edit' => ['privates', '.service_locator.DxJ_gkE', 'get_ServiceLocator_DxJGkEService', true],
            'App\\Controller\\LoyaltyCardController:index' => ['privates', '.service_locator.7i3BCB3', 'get_ServiceLocator_7i3BCB3Service', true],
            'App\\Controller\\LoyaltyCardController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LoyaltyCardController:show' => ['privates', '.service_locator.oFpVnn4', 'get_ServiceLocator_OFpVnn4Service', true],
            'App\\Controller\\PromoAdminController:delete' => ['privates', '.service_locator.DtsKEqY', 'get_ServiceLocator_DtsKEqYService', true],
            'App\\Controller\\PromoAdminController:edit' => ['privates', '.service_locator.DtsKEqY', 'get_ServiceLocator_DtsKEqYService', true],
            'App\\Controller\\PromoAdminController:index' => ['privates', '.service_locator.1j13wVw', 'get_ServiceLocator_1j13wVwService', true],
            'App\\Controller\\PromoAdminController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PromoAdminController:show' => ['privates', '.service_locator.mcb6ZOo', 'get_ServiceLocator_Mcb6ZOoService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.ywU5Sl_', 'get_ServiceLocator_YwU5SlService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UservueController:CreerCarteLoyalty' => ['privates', '.service_locator.dAO6ypm', 'get_ServiceLocator_DAO6ypmService', true],
            'App\\Controller\\UservueController:addDansPanier' => ['privates', '.service_locator.pXnaH3B', 'get_ServiceLocator_PXnaH3BService', true],
            'App\\Controller\\UservueController:detailsProduit' => ['privates', '.service_locator.ncyOCPw', 'get_ServiceLocator_NcyOCPwService', true],
            'App\\Controller\\UservueController:getUserPanier' => ['privates', '.service_locator.SE3MauL', 'get_ServiceLocator_SE3MauLService', true],
            'App\\Controller\\UservueController:index' => ['privates', '.service_locator.aEXkTBP', 'get_ServiceLocator_AEXkTBPService', true],
            'App\\Controller\\UservueController:indexcontact' => ['privates', '.service_locator.SE3MauL', 'get_ServiceLocator_SE3MauLService', true],
            'App\\Controller\\UservueController:modifierProfilUser' => ['privates', '.service_locator.EU0TCmr', 'get_ServiceLocator_EU0TCmrService', true],
            'App\\Controller\\UservueController:pageCategoriesUser' => ['privates', '.service_locator.2qiSyMX', 'get_ServiceLocator_2qiSyMXService', true],
            'App\\Controller\\UservueController:promo' => ['privates', '.service_locator.aEXkTBP', 'get_ServiceLocator_AEXkTBPService', true],
            'App\\Controller\\UservueController:removeFromCartProduit' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UservueController:search' => ['privates', '.service_locator.dQqFLKh', 'get_ServiceLocator_DQqFLKhService', true],
            'App\\Controller\\UservueController:showUserLoyaltyCardPage' => ['privates', '.service_locator.84xubWY', 'get_ServiceLocator_84xubWYService', true],
            'App\\Controller\\UservueController:submitContact' => ['privates', '.service_locator.AUQz.CV', 'get_ServiceLocator_AUQz_CVService', true],
            'App\\Controller\\UservueController:suppressionCompte' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UservueController:updateQuantityProduit' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UservueController:userProfile' => ['privates', '.service_locator.SE3MauL', 'get_ServiceLocator_SE3MauLService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AccueilController::afficherLesPromos' => '?',
            'App\\Controller\\AccueilController::categorieAccueil' => '?',
            'App\\Controller\\AccueilController::detailsDunProduit' => '?',
            'App\\Controller\\AccueilController::index' => '?',
            'App\\Controller\\AccueilController::rechercherUnProduitVisiteur' => '?',
            'App\\Controller\\AdminproductsController::createProduit' => '?',
            'App\\Controller\\AdminproductsController::deleteProduct' => '?',
            'App\\Controller\\AdminproductsController::deleteProducts' => '?',
            'App\\Controller\\AdminproductsController::editProductFormFront' => '?',
            'App\\Controller\\AdminproductsController::index' => '?',
            'App\\Controller\\AdminproductsController::modifierProfilAdminFlush' => '?',
            'App\\Controller\\AdminproductsController::rechercherUnProduitAdmin' => '?',
            'App\\Controller\\AdminproductsController::showCategoryProductsAdmin' => '?',
            'App\\Controller\\AdminproductsController::updateProducts' => '?',
            'App\\Controller\\CouponController::delete' => '?',
            'App\\Controller\\CouponController::edit' => '?',
            'App\\Controller\\CouponController::index' => '?',
            'App\\Controller\\CouponController::new' => '?',
            'App\\Controller\\CouponController::newCoupon' => '?',
            'App\\Controller\\CouponController::show' => '?',
            'App\\Controller\\GestionUserController::delete' => '?',
            'App\\Controller\\GestionUserController::edit' => '?',
            'App\\Controller\\GestionUserController::index' => '?',
            'App\\Controller\\GestionUserController::show' => '?',
            'App\\Controller\\LoyaltyCardController::delete' => '?',
            'App\\Controller\\LoyaltyCardController::edit' => '?',
            'App\\Controller\\LoyaltyCardController::index' => '?',
            'App\\Controller\\LoyaltyCardController::new' => '?',
            'App\\Controller\\LoyaltyCardController::show' => '?',
            'App\\Controller\\PromoAdminController::delete' => '?',
            'App\\Controller\\PromoAdminController::edit' => '?',
            'App\\Controller\\PromoAdminController::index' => '?',
            'App\\Controller\\PromoAdminController::new' => '?',
            'App\\Controller\\PromoAdminController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UservueController::CreerCarteLoyalty' => '?',
            'App\\Controller\\UservueController::addDansPanier' => '?',
            'App\\Controller\\UservueController::detailsProduit' => '?',
            'App\\Controller\\UservueController::getUserPanier' => '?',
            'App\\Controller\\UservueController::index' => '?',
            'App\\Controller\\UservueController::indexcontact' => '?',
            'App\\Controller\\UservueController::modifierProfilUser' => '?',
            'App\\Controller\\UservueController::pageCategoriesUser' => '?',
            'App\\Controller\\UservueController::promo' => '?',
            'App\\Controller\\UservueController::removeFromCartProduit' => '?',
            'App\\Controller\\UservueController::search' => '?',
            'App\\Controller\\UservueController::showUserLoyaltyCardPage' => '?',
            'App\\Controller\\UservueController::submitContact' => '?',
            'App\\Controller\\UservueController::suppressionCompte' => '?',
            'App\\Controller\\UservueController::updateQuantityProduit' => '?',
            'App\\Controller\\UservueController::userProfile' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccueilController:afficherLesPromos' => '?',
            'App\\Controller\\AccueilController:categorieAccueil' => '?',
            'App\\Controller\\AccueilController:detailsDunProduit' => '?',
            'App\\Controller\\AccueilController:index' => '?',
            'App\\Controller\\AccueilController:rechercherUnProduitVisiteur' => '?',
            'App\\Controller\\AdminproductsController:createProduit' => '?',
            'App\\Controller\\AdminproductsController:deleteProduct' => '?',
            'App\\Controller\\AdminproductsController:deleteProducts' => '?',
            'App\\Controller\\AdminproductsController:editProductFormFront' => '?',
            'App\\Controller\\AdminproductsController:index' => '?',
            'App\\Controller\\AdminproductsController:modifierProfilAdminFlush' => '?',
            'App\\Controller\\AdminproductsController:rechercherUnProduitAdmin' => '?',
            'App\\Controller\\AdminproductsController:showCategoryProductsAdmin' => '?',
            'App\\Controller\\AdminproductsController:updateProducts' => '?',
            'App\\Controller\\CouponController:delete' => '?',
            'App\\Controller\\CouponController:edit' => '?',
            'App\\Controller\\CouponController:index' => '?',
            'App\\Controller\\CouponController:new' => '?',
            'App\\Controller\\CouponController:newCoupon' => '?',
            'App\\Controller\\CouponController:show' => '?',
            'App\\Controller\\GestionUserController:delete' => '?',
            'App\\Controller\\GestionUserController:edit' => '?',
            'App\\Controller\\GestionUserController:index' => '?',
            'App\\Controller\\GestionUserController:show' => '?',
            'App\\Controller\\LoyaltyCardController:delete' => '?',
            'App\\Controller\\LoyaltyCardController:edit' => '?',
            'App\\Controller\\LoyaltyCardController:index' => '?',
            'App\\Controller\\LoyaltyCardController:new' => '?',
            'App\\Controller\\LoyaltyCardController:show' => '?',
            'App\\Controller\\PromoAdminController:delete' => '?',
            'App\\Controller\\PromoAdminController:edit' => '?',
            'App\\Controller\\PromoAdminController:index' => '?',
            'App\\Controller\\PromoAdminController:new' => '?',
            'App\\Controller\\PromoAdminController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UservueController:CreerCarteLoyalty' => '?',
            'App\\Controller\\UservueController:addDansPanier' => '?',
            'App\\Controller\\UservueController:detailsProduit' => '?',
            'App\\Controller\\UservueController:getUserPanier' => '?',
            'App\\Controller\\UservueController:index' => '?',
            'App\\Controller\\UservueController:indexcontact' => '?',
            'App\\Controller\\UservueController:modifierProfilUser' => '?',
            'App\\Controller\\UservueController:pageCategoriesUser' => '?',
            'App\\Controller\\UservueController:promo' => '?',
            'App\\Controller\\UservueController:removeFromCartProduit' => '?',
            'App\\Controller\\UservueController:search' => '?',
            'App\\Controller\\UservueController:showUserLoyaltyCardPage' => '?',
            'App\\Controller\\UservueController:submitContact' => '?',
            'App\\Controller\\UservueController:suppressionCompte' => '?',
            'App\\Controller\\UservueController:updateQuantityProduit' => '?',
            'App\\Controller\\UservueController:userProfile' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
