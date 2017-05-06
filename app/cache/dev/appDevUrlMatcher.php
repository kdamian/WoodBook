<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/user/forum')) {
            // forum_homepage
            if ($pathinfo === '/user/forum') {
                return array (  '_controller' => 'ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum_homepage',);
            }

            // forum_add
            if ($pathinfo === '/user/forum/add') {
                return array (  '_controller' => 'ForumBundle\\Controller\\AddController::indexAction',  '_route' => 'forum_add',);
            }

            if (0 === strpos($pathinfo, '/user/forum/subject')) {
                // forum_subject
                if (preg_match('#^/user/forum/subject/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_subject')), array (  '_controller' => 'ForumBundle\\Controller\\SubjectController::indexAction',));
                }

                // forum_add_answer
                if (preg_match('#^/user/forum/subject/(?P<subId>\\d+)/add_answer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_add_answer')), array (  '_controller' => 'ForumBundle\\Controller\\AddController::answerAction',));
                }

                // forum_edit_answer
                if (preg_match('#^/user/forum/subject/(?P<subId>\\d+)/edit_answer/(?P<ansId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_edit_answer')), array (  '_controller' => 'ForumBundle\\Controller\\AddController::answerAction',));
                }

            }

        }

        // bi_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>\\w+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_default_index')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\DefaultController::indexAction',));
        }

        // bi_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bi_home');
            }

            return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::loginAction',  '_route' => 'bi_home',);
        }

        // bi_upload
        if ($pathinfo === '/upload-file') {
            return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'bi_upload',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // bi_user_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::loginAction',  '_route' => 'bi_user_login',);
            }

            // bi_login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::loginCheckAction',  '_route' => 'bi_login_check',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // bi_user_logout
            if ($pathinfo === '/user/logout') {
                return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::logoutAction',  '_route' => 'bi_user_logout',);
            }

            // bi_user_home
            if ($pathinfo === '/user/home') {
                return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::homeAction',  '_route' => 'bi_user_home',);
            }

        }

        // bi_user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::registerAction',  '_route' => 'bi_user_register',);
        }

        // bi_user_activate
        if ($pathinfo === '/activate') {
            return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::activateAction',  '_route' => 'bi_user_activate',);
        }

        // bi_help
        if ($pathinfo === '/help') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_bi_help;
            }

            return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\HelpController::indexAction',  '_route' => 'bi_help',);
        }
        not_bi_help:

        // bi_user_delete
        if ($pathinfo === '/delete') {
            return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\UserController::deleteAction',  '_route' => 'bi_user_delete',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/history')) {
                // bi_history_index
                if (rtrim($pathinfo, '/') === '/user/history') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bi_history_index');
                    }

                    return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\HistoryController::indexAction',  '_route' => 'bi_history_index',);
                }

                // bi_history_add
                if ($pathinfo === '/user/history/add') {
                    return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\HistoryController::editAction',  '_route' => 'bi_history_add',);
                }

                // bi_history_edit
                if (0 === strpos($pathinfo, '/user/history/edit') && preg_match('#^/user/history/edit/(?P<itemId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_history_edit')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\HistoryController::editAction',));
                }

                // bi_history_delete
                if (0 === strpos($pathinfo, '/user/history/delete') && preg_match('#^/user/history/delete/(?P<item>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_history_delete')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\HistoryController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/tab')) {
                // bi_tab_index
                if (rtrim($pathinfo, '/') === '/user/tab') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bi_tab_index');
                    }

                    return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\TabController::indexAction',  '_route' => 'bi_tab_index',);
                }

                // bi_tab_add
                if ($pathinfo === '/user/tab/add') {
                    return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\TabController::editAction',  '_route' => 'bi_tab_add',);
                }

                // bi_tab_edit
                if (0 === strpos($pathinfo, '/user/tab/edit') && preg_match('#^/user/tab/edit/(?P<itemId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_tab_edit')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\TabController::editAction',));
                }

                // bi_tab_delete
                if (0 === strpos($pathinfo, '/user/tab/delete') && preg_match('#^/user/tab/delete/(?P<item>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_tab_delete')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\TabController::deleteAction',));
                }

                // bi_tab_item
                if (0 === strpos($pathinfo, '/user/tab/in') && preg_match('#^/user/tab/in/(?P<tab>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_tab_item')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\TabController::tabItemAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/blog')) {
                // bi_user_blog
                if ($pathinfo === '/user/blog') {
                    return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\BlogController::indexAction',  '_route' => 'bi_user_blog',);
                }

                // bi_user_blog_add
                if ($pathinfo === '/user/blog/add') {
                    return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\BlogController::editAction',  '_route' => 'bi_user_blog_add',);
                }

                // bi_user_blog_edit
                if (0 === strpos($pathinfo, '/user/blog/edit') && preg_match('#^/user/blog/edit/(?P<blog>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_user_blog_edit')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\BlogController::editAction',));
                }

                // bi_user_blog_delete
                if (0 === strpos($pathinfo, '/user/blog/delete') && preg_match('#^/user/blog/delete/(?P<item>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_user_blog_delete')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\BlogController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/member')) {
                // bi_member_index
                if (rtrim($pathinfo, '/') === '/user/member') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bi_member_index');
                    }

                    return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::indexAction',  '_route' => 'bi_member_index',);
                }

                // bi_member_item
                if (preg_match('#^/user/member/(?P<user>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_item')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::itemAction',));
                }

                // bi_member_blog
                if (0 === strpos($pathinfo, '/user/member/blog') && preg_match('#^/user/member/blog/(?P<user>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_blog')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::blogAction',));
                }

                if (0 === strpos($pathinfo, '/user/member/history')) {
                    // bi_member_history
                    if (preg_match('#^/user/member/history/(?P<user>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_history')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::historyAction',));
                    }

                    // bi_member_history_body
                    if (preg_match('#^/user/member/history/(?P<user>\\d+)/description/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_history_body')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::historyBodyAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/user/member/tab')) {
                    // bi_member_tab
                    if (preg_match('#^/user/member/tab/(?P<user>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_tab')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::tabAction',));
                    }

                    // bi_member_tab_item
                    if (0 === strpos($pathinfo, '/user/member/tab/in') && preg_match('#^/user/member/tab/in/(?P<tab>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_tab_item')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::tabItemAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/user/member/friend')) {
                    // bi_member_friends
                    if ($pathinfo === '/user/member/friends') {
                        return array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::friendsAction',  '_route' => 'bi_member_friends',);
                    }

                    // bi_member_add_friend
                    if (preg_match('#^/user/member/friend/(?P<friend>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_add_friend')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::addFriendAction',));
                    }

                    // bi_member_fried_remove
                    if (0 === strpos($pathinfo, '/user/member/friend/remove') && preg_match('#^/user/member/friend/remove/(?P<friend>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bi_member_fried_remove')), array (  '_controller' => 'Blinkin\\BiBundle\\Controller\\MemberController::removeFriendAction',));
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
