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
            '/admin' => array(array(array('_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'), null, null, null, true, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
            '/login' => array(array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/login_check' => array(array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null, false, false, null)),
            '/logout' => array(array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/profile' => array(array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), null, array('GET' => 0), null, true, false, null)),
            '/profile/edit' => array(array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/register' => array(array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null, true, false, null)),
            '/register/check-email' => array(array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/register/confirmed' => array(array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/request' => array(array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/send-email' => array(array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null, false, false, null)),
            '/resetting/check-email' => array(array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/profile/change-password' => array(array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/_uploader/gallery/upload' => array(array(array('_route' => '_uploader_upload_gallery', '_controller' => 'oneup_uploader.controller.gallery::upload', '_format' => 'json'), null, array('POST' => 0, 'PUT' => 1, 'PATCH' => 2), null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/media/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                        .'|([A-z0-9_-]*)/(.+)(*:86)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:125)'
                        .'|wdt/([^/]++)(*:145)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:191)'
                                .'|router(*:205)'
                                .'|exception(?'
                                    .'|(*:225)'
                                    .'|\\.css(*:238)'
                                .')'
                            .')'
                            .'|(*:248)'
                        .')'
                    .')'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:287)'
                        .'|setting/reset/([^/]++)(*:317)'
                    .')'
                    .'|/(en|fr|)(*:335)'
                    .'|/(en|fr|)/back/office/photo(*:370)'
                    .'|/(en|fr|)/back/office/text(*:404)'
                    .'|/(en|fr|)/commande(*:430)'
                    .'|/(en|fr|)/contact(*:455)'
                    .'|/(en|fr|)/footer(*:479)'
                    .'|/(en|fr|)/galerie(*:504)'
                    .'|/(en|fr|)/gestion/admin(*:535)'
                    .'|/(en|fr|)/gestion/photographe(*:572)'
                    .'|/(en|fr|)/header(*:596)'
                    .'|/(en|fr|)/identification(*:628)'
                    .'|/(en|fr|)/inscription(*:657)'
                    .'|/(en|fr|)/logged/in(*:684)'
                    .'|/(en|fr|)/panier(*:708)'
                    .'|/(en|fr|)/particuliers(*:738)'
                    .'|/(en|fr|)/professionels(*:769)'
                    .'|/(en|fr|)/logout(*:793)'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            61 => array(array(array('_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'), array('filter', 'hash', 'path'), array('GET' => 0), null, false, true, null)),
            86 => array(array(array('_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'), array('filter', 'path'), array('GET' => 0), null, false, true, null)),
            125 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            145 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            191 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            205 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            225 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            238 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            248 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
            287 => array(array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null, false, true, null)),
            317 => array(array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null, false, true, null)),
            335 => array(array(array('_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index', '_locale' => 'fr'), array('_locale'), null, null, true, true, null)),
            370 => array(array(array('_route' => 'back_office_photo', '_controller' => 'App\\Controller\\BackOfficePhotoController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            404 => array(array(array('_route' => 'back_office_text', '_controller' => 'App\\Controller\\BackOfficeTextController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            430 => array(array(array('_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            455 => array(array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            479 => array(array(array('_route' => 'footer', '_controller' => 'App\\Controller\\FooterController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            504 => array(array(array('_route' => 'galerie', '_controller' => 'App\\Controller\\GalerieController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            535 => array(array(array('_route' => 'gestion_admin', '_controller' => 'App\\Controller\\GestionAdminController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            572 => array(array(array('_route' => 'gestion_photographe', '_controller' => 'App\\Controller\\GestionPhotographeController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            596 => array(array(array('_route' => 'header', '_controller' => 'App\\Controller\\HeaderController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            628 => array(array(array('_route' => 'identification', '_controller' => 'App\\Controller\\IdentificationController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            657 => array(array(array('_route' => 'inscription', '_controller' => 'App\\Controller\\InscriptionController::newPost', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            684 => array(array(array('_route' => 'logged_in', '_controller' => 'App\\Controller\\LoggedInController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            708 => array(array(array('_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            738 => array(array(array('_route' => 'particuliers', '_controller' => 'App\\Controller\\ParticuliersController::contactAction', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            769 => array(array(array('_route' => 'professionels', '_controller' => 'App\\Controller\\ProfessionelsController::index', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
            793 => array(array(array('_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'fr'), array('_locale'), null, null, false, false, null)),
        );
    }
}
