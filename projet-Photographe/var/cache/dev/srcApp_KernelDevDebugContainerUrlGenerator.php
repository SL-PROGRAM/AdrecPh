<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'easyadmin' => array(array(), array('_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'), array(), array(array('text', '/admin/')), array(), array()),
        'liip_imagine_filter_runtime' => array(array('filter', 'hash', 'path'), array('_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'), array('filter' => '[A-z0-9_-]*', 'path' => '.+'), array(array('variable', '/', '.+', 'path', true), array('variable', '/', '[^/]++', 'hash', true), array('text', '/rc'), array('variable', '/', '[A-z0-9_-]*', 'filter', true), array('text', '/media/cache/resolve')), array(), array()),
        'liip_imagine_filter' => array(array('filter', 'path'), array('_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'), array('filter' => '[A-z0-9_-]*', 'path' => '.+'), array(array('variable', '/', '.+', 'path', true), array('variable', '/', '[A-z0-9_-]*', 'filter', true), array('text', '/media/cache/resolve')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        'fos_user_security_login' => array(array(), array('_controller' => 'fos_user.security.controller:loginAction'), array(), array(array('text', '/login')), array(), array()),
        'fos_user_security_check' => array(array(), array('_controller' => 'fos_user.security.controller:checkAction'), array(), array(array('text', '/login_check')), array(), array()),
        'fos_user_security_logout' => array(array(), array('_controller' => 'fos_user.security.controller:logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'fos_user_profile_show' => array(array(), array('_controller' => 'fos_user.profile.controller:showAction'), array(), array(array('text', '/profile/')), array(), array()),
        'fos_user_profile_edit' => array(array(), array('_controller' => 'fos_user.profile.controller:editAction'), array(), array(array('text', '/profile/edit')), array(), array()),
        'fos_user_registration_register' => array(array(), array('_controller' => 'fos_user.registration.controller:registerAction'), array(), array(array('text', '/register/')), array(), array()),
        'fos_user_registration_check_email' => array(array(), array('_controller' => 'fos_user.registration.controller:checkEmailAction'), array(), array(array('text', '/register/check-email')), array(), array()),
        'fos_user_registration_confirm' => array(array('token'), array('_controller' => 'fos_user.registration.controller:confirmAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/register/confirm')), array(), array()),
        'fos_user_registration_confirmed' => array(array(), array('_controller' => 'fos_user.registration.controller:confirmedAction'), array(), array(array('text', '/register/confirmed')), array(), array()),
        'fos_user_resetting_request' => array(array(), array('_controller' => 'fos_user.resetting.controller:requestAction'), array(), array(array('text', '/resetting/request')), array(), array()),
        'fos_user_resetting_send_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:sendEmailAction'), array(), array(array('text', '/resetting/send-email')), array(), array()),
        'fos_user_resetting_check_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:checkEmailAction'), array(), array(array('text', '/resetting/check-email')), array(), array()),
        'fos_user_resetting_reset' => array(array('token'), array('_controller' => 'fos_user.resetting.controller:resetAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/resetting/reset')), array(), array()),
        'fos_user_change_password' => array(array(), array('_controller' => 'fos_user.change_password.controller:changePasswordAction'), array(), array(array('text', '/profile/change-password')), array(), array()),
        '_uploader_upload_gallery' => array(array(), array('_controller' => 'oneup_uploader.controller.gallery::upload', '_format' => 'json'), array(), array(array('text', '/_uploader/gallery/upload')), array(), array()),
        'accueil' => array(array('_locale'), array('_controller' => 'App\\Controller\\AccueilController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'back_office_photo' => array(array('_locale'), array('_controller' => 'App\\Controller\\BackOfficePhotoController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/back/office/photo'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'back_office_text' => array(array('_locale'), array('_controller' => 'App\\Controller\\BackOfficeTextController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/back/office/text'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'commande' => array(array('_locale'), array('_controller' => 'App\\Controller\\CommandeController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/commande'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'contact' => array(array('_locale'), array('_controller' => 'App\\Controller\\ContactController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/contact'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'footer' => array(array('_locale'), array('_controller' => 'App\\Controller\\FooterController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/footer'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'galerie' => array(array('_locale'), array('_controller' => 'App\\Controller\\GalerieController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/galerie'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'gestion_admin' => array(array('_locale'), array('_controller' => 'App\\Controller\\GestionAdminController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/gestion/admin'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'gestion_photographe' => array(array('_locale'), array('_controller' => 'App\\Controller\\GestionPhotographeController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/gestion/photographe'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'header' => array(array('_locale'), array('_controller' => 'App\\Controller\\HeaderController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/header'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'identification' => array(array('_locale'), array('_controller' => 'App\\Controller\\IdentificationController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/identification'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'inscription' => array(array('_locale'), array('_controller' => 'App\\Controller\\InscriptionController::newPost', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/inscription'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'logged_in' => array(array('_locale'), array('_controller' => 'App\\Controller\\LoggedInController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/logged/in'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'panier' => array(array('_locale'), array('_controller' => 'App\\Controller\\PanierController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/panier'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'particuliers' => array(array('_locale'), array('_controller' => 'App\\Controller\\ParticuliersController::contactAction', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/particuliers'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'professionels' => array(array('_locale'), array('_controller' => 'App\\Controller\\ProfessionelsController::index', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/professionels'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
        'app_logout' => array(array('_locale'), array('_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'fr'), array('_locale' => 'en|fr|'), array(array('text', '/logout'), array('variable', '/', 'en|fr|', '_locale', true)), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
