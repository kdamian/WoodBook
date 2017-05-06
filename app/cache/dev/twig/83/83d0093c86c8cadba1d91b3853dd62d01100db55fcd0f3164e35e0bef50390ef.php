<?php

/* BiBundle:Member:tab_item_member.html.twig */
class __TwigTemplate_e2036268c03e23e2c951aa43ee8955b97d0a863d3ec182a5dc43a080df5732fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BiBundle:Member:layout.html.twig", "BiBundle:Member:tab_item_member.html.twig", 2);
        $this->blocks = array(
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle:Member:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c01f05f82bf59a4ce75fe8556db79044762d4ae0afa9ecca17b90f8f3df5095 = $this->env->getExtension("native_profiler");
        $__internal_1c01f05f82bf59a4ce75fe8556db79044762d4ae0afa9ecca17b90f8f3df5095->enter($__internal_1c01f05f82bf59a4ce75fe8556db79044762d4ae0afa9ecca17b90f8f3df5095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:tab_item_member.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c01f05f82bf59a4ce75fe8556db79044762d4ae0afa9ecca17b90f8f3df5095->leave($__internal_1c01f05f82bf59a4ce75fe8556db79044762d4ae0afa9ecca17b90f8f3df5095_prof);

    }

    // line 4
    public function block_ct($context, array $blocks = array())
    {
        $__internal_703386104c1927f8c8578100999eb00fa38eaa005e9de26e30ef221acf15f994 = $this->env->getExtension("native_profiler");
        $__internal_703386104c1927f8c8578100999eb00fa38eaa005e9de26e30ef221acf15f994->enter($__internal_703386104c1927f8c8578100999eb00fa38eaa005e9de26e30ef221acf15f994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 5
        echo "\t
\t<h1>Tabulatura:\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "getName", array(), "method"), "html", null, true);
        echo "</h1>

\t<pre>
\t\t";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "html", null, true);
        echo "
\t</pre>

";
        
        $__internal_703386104c1927f8c8578100999eb00fa38eaa005e9de26e30ef221acf15f994->leave($__internal_703386104c1927f8c8578100999eb00fa38eaa005e9de26e30ef221acf15f994_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:tab_item_member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {#% extends "BiBundle::page.html.twig" %#}*/
/* {% extends "BiBundle:Member:layout.html.twig" %}*/
/* */
/* {% block ct %}*/
/* 	*/
/* 	<h1>Tabulatura:	{{ tab.getName() }}</h1>*/
/* */
/* 	<pre>*/
/* 		{{ contents }}*/
/* 	</pre>*/
/* */
/* {% endblock %}*/
/* */
