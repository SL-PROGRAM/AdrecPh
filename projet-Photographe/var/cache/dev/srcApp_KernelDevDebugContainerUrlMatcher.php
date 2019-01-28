<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
            '/profile/edit' => array(array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/register/check-email' => array(array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/register/confirmed' => array(array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/request' => array(array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/send-email' => array(array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null, false, false, null)),
            '/resetting/check-email' => array(array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/profile/change-password' => array(array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/_uploader/gallery/upload' => array(array(array('_route' => '_uploader_upload_gallery', '_controller' => 'oneup_uploader.controller.gallery::upload', '_format' => 'json'), null, array('POST' => 0, 'PUT' => 1, 'PATCH' => 2), null, false, false, null)),
            '/' => array(array(array('_route' => 'homepage', 'path' => '/fr', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/([^/]++)(?'
                        .'|(*:19)'
                        .'|/(?'
                            .'|back/office/(?'
                                .'|photo(*:50)'
                                .'|text(*:61)'
                            .')'
                            .'|co(?'
                                .'|mmande(*:80)'
                                .'|ntact(*:92)'
                            .')'
                            .'|footer(*:106)'
                            .'|g(?'
                                .'|alerie(*:124)'
                                .'|estion/(?'
                                    .'|admin(*:147)'
                                    .'|photographe(*:166)'
                                .')'
                            .')'
                            .'|header(*:182)'
                            .'|i(?'
                                .'|dentification(*:207)'
                                .'|nscription(*:225)'
                            .')'
                            .'|log(?'
                                .'|ged/in(*:246)'
                                .'|out(*:257)'
                            .')'
                            .'|p(?'
                                .'|a(?'
                                    .'|nier(*:278)'
                                    .'|rticuliers(*:296)'
                                .')'
                                .'|rofessionels(*:317)'
                            .')'
                            .'|admin(*:331)'
                        .')'
                    .')'
                    .'|/media/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:395)'
                        .'|([A-z0-9_-]*)/(.+)(*:421)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:461)'
                        .'|wdt/([^/]++)(*:481)'
                        .'|profiler(?'
                            .'|(*:500)'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|search/results(*:538)'
                                    .'|router(*:552)'
                                    .'|exception(?'
                                        .'|(*:572)'
                                        .'|\\.css(*:585)'
                                    .')'
                                .')'
                                .'|(*:595)'
                            .')'
                        .')'
                    .')'
                    .'|/log(?'
                        .'|in(?'
                            .'|(*:618)'
                            .'|_check(*:632)'
                        .')'
                        .'|out(*:644)'
                    .')'
                    .'|/profile(*:661)'
                    .'|/re(?'
                        .'|gister(?'
                            .'|(*:684)'
                            .'|/confirm/([^/]++)(*:709)'
                        .')'
                        .'|setting/reset/([^/]++)(*:740)'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            19 => array(array(array('_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'), array('_locale'), null, null, true, true, null)),
            50 => array(array(array('_route' => 'back_office_photo', '_controller' => 'App\\Controller\\BackOfficePhotoController::index'), array('_locale'), null, null, false, false, null)),
            61 => array(array(array('_route' => 'back_office_text', '_controller' => 'App\\Controller\\BackOfficeTextController::index'), array('_locale'), null, null, false, false, null)),
            80 => array(array(array('_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'), array('_locale'), null, null, false, false, null)),
            92 => array(array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'), array('_locale'), null, null, false, false, null)),
            106 => array(array(array('_route' => 'footer', '_controller' => 'App\\Controller\\FooterController::index'), array('_locale'), null, null, false, false, null)),
            124 => array(array(array('_route' => 'galerie', '_controller' => 'App\\Controller\\GalerieController::index'), array('_locale'), null, null, false, false, null)),
            147 => array(array(array('_route' => 'gestion_admin', '_controller' => 'App\\Controller\\GestionAdminController::index'), array('_locale'), null, null, false, false, null)),
            166 => array(array(array('_route' => 'gestion_photographe', '_controller' => 'App\\Controller\\GestionPhotographeController::index'), array('_locale'), null, null, false, false, null)),
            182 => array(array(array('_route' => 'header', '_controller' => 'App\\Controller\\HeaderController::index'), array('_locale'), null, null, false, false, null)),
            207 => array(array(array('_route' => 'identification', '_controller' => 'App\\Controller\\IdentificationController::index'), array('_locale'), null, null, false, false, null)),
            225 => array(array(array('_route' => 'inscription', '_controller' => 'App\\Controller\\InscriptionController::newPost'), array('_locale'), null, null, false, false, null)),
            246 => array(array(array('_route' => 'logged_in', '_controller' => 'App\\Controller\\LoggedInController::index'), array('_locale'), null, null, false, false, null)),
            257 => array(array(array('_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), array('_locale'), null, null, false, false, null)),
            278 => array(array(array('_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'), array('_locale'), null, null, false, false, null)),
            296 => array(array(array('_route' => 'particuliers', '_controller' => 'App\\Controller\\ParticuliersController::contactAction'), array('_locale'), null, null, false, false, null)),
            317 => array(array(array('_route' => 'professionels', '_controller' => 'App\\Controller\\ProfessionelsController::index'), array('_locale'), null, null, false, false, null)),
            331 => array(array(array('_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'), array('_locale'), null, null, true, false, null)),
            395 => array(array(array('_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'), array('filter', 'hash', 'path'), array('GET' => 0), null, false, true, null)),
            421 => array(array(array('_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'), array('filter', 'path'), array('GET' => 0), null, false, true, null)),
            461 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            481 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            500 => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), array(), null, null, true, false, null)),
            538 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            552 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            572 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            585 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            595 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
            618 => array(array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), array(), array('GET' => 0, 'POST' => 1), null, false, false, null)),
            632 => array(array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), array(), array('POST' => 0), null, false, false, null)),
            644 => array(array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), array(), array('GET' => 0, 'POST' => 1), null, false, false, null)),
            661 => array(array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), array(), array('GET' => 0), null, true, false, null)),
            684 => array(array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), array(), array('GET' => 0, 'POST' => 1), null, true, false, null)),
            709 => array(array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null, false, true, null)),
            740 => array(array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null, false, true, null)),
        );
    }
}
