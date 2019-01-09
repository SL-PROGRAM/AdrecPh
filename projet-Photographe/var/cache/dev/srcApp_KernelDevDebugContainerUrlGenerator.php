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
        'accueil' => array(array(), array('_controller' => 'App\\Controller\\AccueilController::index'), array(), array(array('text', '/')), array(), array()),
        'back_office_photo' => array(array(), array('_controller' => 'App\\Controller\\BackOfficePhotoController::index'), array(), array(array('text', '/back/office/photo')), array(), array()),
        'back_office_text' => array(array(), array('_controller' => 'App\\Controller\\BackOfficeTextController::index'), array(), array(array('text', '/back/office/text')), array(), array()),
        'commande' => array(array(), array('_controller' => 'App\\Controller\\CommandeController::index'), array(), array(array('text', '/commande')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\ContactController::index'), array(), array(array('text', '/contact')), array(), array()),
        'footer' => array(array(), array('_controller' => 'App\\Controller\\FooterController::index'), array(), array(array('text', '/footer')), array(), array()),
        'galerie' => array(array(), array('_controller' => 'App\\Controller\\GalerieController::index'), array(), array(array('text', '/galerie')), array(), array()),
        'gestion_admin' => array(array(), array('_controller' => 'App\\Controller\\GestionAdminController::index'), array(), array(array('text', '/gestion/admin')), array(), array()),
        'gestion_photographe' => array(array(), array('_controller' => 'App\\Controller\\GestionPhotographeController::index'), array(), array(array('text', '/gestion/photographe')), array(), array()),
        'header' => array(array(), array('_controller' => 'App\\Controller\\HeaderController::index'), array(), array(array('text', '/header')), array(), array()),
        'identification' => array(array(), array('_controller' => 'App\\Controller\\IdentificationController::index'), array(), array(array('text', '/identification')), array(), array()),
        'inscription' => array(array(), array('_controller' => 'App\\Controller\\InscriptionController::newPost'), array(), array(array('text', '/inscription')), array(), array()),
        'logged_in' => array(array(), array('_controller' => 'App\\Controller\\LoggedInController::index'), array(), array(array('text', '/logged/in')), array(), array()),
        'panier' => array(array(), array('_controller' => 'App\\Controller\\PanierController::index'), array(), array(array('text', '/panier')), array(), array()),
        'particuliers' => array(array(), array('_controller' => 'App\\Controller\\ParticuliersController::index'), array(), array(array('text', '/particuliers')), array(), array()),
        'professionels' => array(array(), array('_controller' => 'App\\Controller\\ProfessionelsController::index'), array(), array(array('text', '/professionels')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'app_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
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
