<?php

/* BiBundle:Default:activateEmail.txt.twig */
class __TwigTemplate_85a05dca0691dc8e2aa20fb1d1b760538cbce07f2cee0a9306a91d799e2d00a1 extends Twig_Template
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
        $__internal_443fb93b44f587128dedb04a655e664f96113541d6e3ad2de2b6a6f8b32a98f8 = $this->env->getExtension("native_profiler");
        $__internal_443fb93b44f587128dedb04a655e664f96113541d6e3ad2de2b6a6f8b32a98f8->enter($__internal_443fb93b44f587128dedb04a655e664f96113541d6e3ad2de2b6a6f8b32a98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Default:activateEmail.txt.twig"));

        // line 1
        echo "Witaj,

Aby aktywować konto kliknij poniższy link
<a href=\"";
        // line 4
        echo (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"));
        echo "\" title=\"Aktywacja\">Aktywuj konto</a>

Dziękujeny";
        
        $__internal_443fb93b44f587128dedb04a655e664f96113541d6e3ad2de2b6a6f8b32a98f8->leave($__internal_443fb93b44f587128dedb04a655e664f96113541d6e3ad2de2b6a6f8b32a98f8_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Default:activateEmail.txt.twig";
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
