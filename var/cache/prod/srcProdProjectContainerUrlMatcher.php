<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        // app_pages_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\PagesController::index',  '_route' => 'app_pages_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_pages_index'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/c')) {
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

            // chercher
            if (0 === strpos($pathinfo, '/chercher') && preg_match('#^/chercher/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chercher')), array (  '_controller' => 'App\\Controller\\PagesController::chercher',));
            }

        }

        // apropos
        if ('/apropos' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PagesController::apropos',  '_route' => 'apropos',);
        }

        // aide
        if ('/aide' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PagesController::aide',  '_route' => 'aide',);
        }

        // savePath
        if ('/savePath' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SavePathController::index',  '_route' => 'savePath',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
