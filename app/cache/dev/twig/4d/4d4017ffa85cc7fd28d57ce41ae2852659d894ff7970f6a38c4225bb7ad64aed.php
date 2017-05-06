<?php

/* BiBundle:Tab:tab_item.html.twig */
class __TwigTemplate_d2f6bd7b2d4721d76e20ec3582aa91631e9c34690f8d7c59b42c722c8c98bc5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Tab:tab_item.html.twig", 1);
        $this->blocks = array(
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4929e0cb6c4b6d7b858eceab53949680cbdf2dbbfa9019edfc0459dcd5fa056b = $this->env->getExtension("native_profiler");
        $__internal_4929e0cb6c4b6d7b858eceab53949680cbdf2dbbfa9019edfc0459dcd5fa056b->enter($__internal_4929e0cb6c4b6d7b858eceab53949680cbdf2dbbfa9019edfc0459dcd5fa056b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Tab:tab_item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4929e0cb6c4b6d7b858eceab53949680cbdf2dbbfa9019edfc0459dcd5fa056b->leave($__internal_4929e0cb6c4b6d7b858eceab53949680cbdf2dbbfa9019edfc0459dcd5fa056b_prof);

    }

    // line 9
    public function block_ct($context, array $blocks = array())
    {
        $__internal_97c58c5ae38599d56b8cfe0417da2c92ec819a4f68df959d9d1f259bfa0228fe = $this->env->getExtension("native_profiler");
        $__internal_97c58c5ae38599d56b8cfe0417da2c92ec819a4f68df959d9d1f259bfa0228fe->enter($__internal_97c58c5ae38599d56b8cfe0417da2c92ec819a4f68df959d9d1f259bfa0228fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 10
        echo "
\t<h1>Tabulatura:\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "getName", array(), "method"), "html", null, true);
        echo "</h1>

\t<pre>
\t\t";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "html", null, true);
        echo "
\t</pre>

";
        
        $__internal_97c58c5ae38599d56b8cfe0417da2c92ec819a4f68df959d9d1f259bfa0228fe->leave($__internal_97c58c5ae38599d56b8cfe0417da2c92ec819a4f68df959d9d1f259bfa0228fe_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Tab:tab_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  43 => 11,  40 => 10,  34 => 9,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {#% block member %}*/
/* */
/* 	Profil użytkownik {{ member.username }}*/
/* 	*/
/* {% endblock %#}*/
/* */
/* {% block ct %}*/
/* */
/* 	<h1>Tabulatura:	{{ tab.getName() }}</h1>*/
/* */
/* 	<pre>*/
/* 		{{ contents }}*/
/* 	</pre>*/
/* */
/* {% endblock %}*/
/* */
