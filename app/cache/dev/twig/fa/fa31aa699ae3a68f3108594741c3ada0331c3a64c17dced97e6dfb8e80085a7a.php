<?php

/* BiBundle:User:inc_session.html.twig */
class __TwigTemplate_1522f1a3774ccae125f6987bcd68f3bb58799710060c641049a2e1943936eeb8 extends Twig_Template
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
        $__internal_f978cd33e13f15d8128c179e9ae904e77bd6bd4e0c7b9313804c6db2d610d38d = $this->env->getExtension("native_profiler");
        $__internal_f978cd33e13f15d8128c179e9ae904e77bd6bd4e0c7b9313804c6db2d610d38d->enter($__internal_f978cd33e13f15d8128c179e9ae904e77bd6bd4e0c7b9313804c6db2d610d38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:User:inc_session.html.twig"));

        // line 1
        echo "
<span class=\"thumb-x\">
\t<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("bi_user_home");
        echo "\">
\t\t";
        // line 4
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "img", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "img", array()), false)) : (false))) {
            // line 5
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, ((isset($context["upload_path"]) ? $context["upload_path"] : $this->getContext($context, "upload_path")) . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "img", array())), "html", null, true);
            echo "\" />
\t\t";
        }
        // line 7
        echo "\t\t<br />
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
\t</a>
</span>
<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("bi_user_logout");
        echo "\" class=\"logout-link\">Wyloguj mnie</a>


";
        
        $__internal_f978cd33e13f15d8128c179e9ae904e77bd6bd4e0c7b9313804c6db2d610d38d->leave($__internal_f978cd33e13f15d8128c179e9ae904e77bd6bd4e0c7b9313804c6db2d610d38d_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:User:inc_session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  41 => 8,  38 => 7,  32 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* */
/* <span class="thumb-x">*/
/* 	<a href="{{ path('bi_user_home') }}">*/
/* 		{% if app.user.img|default(false) %}*/
/* 			<img src="{{ upload_path ~ app.user.img }}" />*/
/* 		{% endif %}*/
/* 		<br />*/
/* 		{{ app.user.username }}*/
/* 	</a>*/
/* </span>*/
/* <a href="{{ path('bi_user_logout') }}" class="logout-link">Wyloguj mnie</a>*/
/* */
/* */
/* */
