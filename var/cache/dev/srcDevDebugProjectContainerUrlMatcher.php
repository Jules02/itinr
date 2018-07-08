<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/profil')) {
            // modifier_profil
            if ('/profil/modifier' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\EditProfilController::modifier',  '_route' => 'modifier_profil',);
            }

            // profil
            if (preg_match('#^/profil/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil')), array (  '_controller' => 'App\\Controller\\PagesController::profil',));
            }

        }

        // app_pages_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\PagesController::index',  '_route' => 'app_pages_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_pages_index'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/con')) {
            // concepteur
            if ('/concepteur' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_concepteur;
                }

                return array (  '_controller' => 'App\\Controller\\PagesController::concepteur',  '_route' => 'concepteur',);
            }
            not_concepteur:

            // contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::contact',  '_route' => 'contact',);
            }

            // conditions
            if ('/conditions-generales' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::conditions',  '_route' => 'conditions',);
            }

            // security_login
            if ('/connexion' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'security_login',);
            }

        }

        elseif (0 === strpos($pathinfo, '/chercher')) {
            // chercher
            if ('/chercher' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::chercher',  '_route' => 'chercher',);
            }

            // chercher-utilisateur
            if ('/chercher-utilisateur' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::chercherUtilisateur',  '_route' => 'chercher-utilisateur',);
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            // apropos
            if ('/apropos' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::apropos',  '_route' => 'apropos',);
            }

            // aide
            if ('/aide' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::aide',  '_route' => 'aide',);
            }

            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::admin',  '_route' => 'admin',);
            }

        }

        // itineraire
        if (0 === strpos($pathinfo, '/itineraire') && preg_match('#^/itineraire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'itineraire')), array (  '_controller' => 'App\\Controller\\PagesController::itinieraire',));
        }

        // inscription
        if ('/inscription' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RegistrationController::registerAction',  '_route' => 'inscription',);
        }

        // newAvatar
        if ('/newAvatar' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PagesController::newAvatar',  '_route' => 'newAvatar',);
        }

        // savePath
        if ('/savePath' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SavePathController::index',  '_route' => 'savePath',);
        }

        // security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::logout',  '_route' => 'security_logout',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
