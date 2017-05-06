<?php

/* BiBundle:Member:tab_item.html.twig */
class __TwigTemplate_71f2fd379bff45c99350f8c5068d792e633fabb9793dfb3031491bb0530cef57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Member:tab_item.html.twig", 1);
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
        $__internal_16f9264521d7ca261b7fe99be2f60534ddc0bb34c0fc3eed8786c193c7204bcf = $this->env->getExtension("native_profiler");
        $__internal_16f9264521d7ca261b7fe99be2f60534ddc0bb34c0fc3eed8786c193c7204bcf->enter($__internal_16f9264521d7ca261b7fe99be2f60534ddc0bb34c0fc3eed8786c193c7204bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:tab_item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f9264521d7ca261b7fe99be2f60534ddc0bb34c0fc3eed8786c193c7204bcf->leave($__internal_16f9264521d7ca261b7fe99be2f60534ddc0bb34c0fc3eed8786c193c7204bcf_prof);

    }

    // line 9
    public function block_ct($context, array $blocks = array())
    {
        $__internal_196e1a89ec28c519243b44ec377d339da6f4d707c83b106266238895af3a91d1 = $this->env->getExtension("native_profiler");
        $__internal_196e1a89ec28c519243b44ec377d339da6f4d707c83b106266238895af3a91d1->enter($__internal_196e1a89ec28c519243b44ec377d339da6f4d707c83b106266238895af3a91d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 10
        echo "
<h1>Tabulatura:\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "getName", array(), "method"), "html", null, true);
        echo "</h1>

<pre>
";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "html", null, true);
        echo "
</pre>
    
";
        
        $__internal_196e1a89ec28c519243b44ec377d339da6f4d707c83b106266238895af3a91d1->leave($__internal_196e1a89ec28c519243b44ec377d339da6f4d707c83b106266238895af3a91d1_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:tab_item.html.twig";
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
/* <h1>Tabulatura:	{{ tab.getName() }}</h1>*/
/* */
/* <pre>*/
/* {{ contents }}*/
/* </pre>*/
/*     */
/* {% endblock %}*/
/* */
