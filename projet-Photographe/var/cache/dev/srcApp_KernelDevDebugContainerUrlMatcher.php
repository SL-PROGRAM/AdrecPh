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
            '/' => array(array(array('_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'), null, null, null, false, null)),
            '/back/office/photo' => array(array(array('_route' => 'back_office_photo', '_controller' => 'App\\Controller\\BackOfficePhotoController::index'), null, null, null, false, null)),
            '/back/office/text' => array(array(array('_route' => 'back_office_text', '_controller' => 'App\\Controller\\BackOfficeTextController::index'), null, null, null, false, null)),
            '/commande' => array(array(array('_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'), null, null, null, false, null)),
            '/contact' => array(array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'), null, null, null, false, null)),
            '/footer' => array(array(array('_route' => 'footer', '_controller' => 'App\\Controller\\FooterController::index'), null, null, null, false, null)),
            '/galerie' => array(array(array('_route' => 'galerie', '_controller' => 'App\\Controller\\GalerieController::index'), null, null, null, false, null)),
            '/gestion/admin' => array(array(array('_route' => 'gestion_admin', '_controller' => 'App\\Controller\\GestionAdminController::index'), null, null, null, false, null)),
            '/gestion/photographe' => array(array(array('_route' => 'gestion_photographe', '_controller' => 'App\\Controller\\GestionPhotographeController::index'), null, null, null, false, null)),
            '/header' => array(array(array('_route' => 'header', '_controller' => 'App\\Controller\\HeaderController::index'), null, null, null, false, null)),
            '/identification' => array(array(array('_route' => 'identification', '_controller' => 'App\\Controller\\IdentificationController::index'), null, null, null, false, null)),
            '/inscription' => array(array(array('_route' => 'inscription', '_controller' => 'App\\Controller\\InscriptionController::newPost'), null, null, null, false, null)),
            '/logged/in' => array(array(array('_route' => 'logged_in', '_controller' => 'App\\Controller\\LoggedInController::index'), null, null, null, false, null)),
            '/panier' => array(array(array('_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'), null, null, null, false, null)),
            '/particuliers' => array(array(array('_route' => 'particuliers', '_controller' => 'App\\Controller\\ParticuliersController::index'), null, null, null, false, null)),
            '/professionels' => array(array(array('_route' => 'professionels', '_controller' => 'App\\Controller\\ProfessionelsController::index'), null, null, null, false, null)),
            '/login' => array(array(array('_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
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
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            61 => array(array(array('_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'), array('filter', 'hash', 'path'), array('GET' => 0), null, false, null)),
            86 => array(array(array('_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'), array('filter', 'path'), array('GET' => 0), null, false, null)),
            125 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            145 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            191 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            205 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            225 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            238 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            248 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
