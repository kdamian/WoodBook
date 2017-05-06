<?php

/* BiBundle:Default:activateEmail.html.twig */
class __TwigTemplate_3fca5f7f375c76d47682ccb6038d48fe3fa9359d8d64f231ad5c462c5140f7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b93e3d998f297a2e6ceb83e971adbe6e2a7cd5154fbe52af3454a8666f59c22 = $this->env->getExtension("native_profiler");
        $__internal_9b93e3d998f297a2e6ceb83e971adbe6e2a7cd5154fbe52af3454a8666f59c22->enter($__internal_9b93e3d998f297a2e6ceb83e971adbe6e2a7cd5154fbe52af3454a8666f59c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Default:activateEmail.html.twig"));

        // line 1
        echo "Witaj,

Aby aktywować konto kliknij poniższy link
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\" title=\"Aktywacja\">Aktywuj konto</a>

Dziękujeny";
        
        $__internal_9b93e3d998f297a2e6ceb83e971adbe6e2a7cd5154fbe52af3454a8666f59c22->leave($__internal_9b93e3d998f297a2e6ceb83e971adbe6e2a7cd5154fbe52af3454a8666f59c22_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Default:activateEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Witaj,*/
/* */
/* Aby aktywować konto kliknij poniższy link*/
/* <a href="{{ link }}" title="Aktywacja">Aktywuj konto</a>*/
/* */
/* Dziękujeny*/
