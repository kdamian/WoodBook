<?php

/* ForumBundle:Default:index.html.twig */
class __TwigTemplate_57420ab57f89ec2341af148f3306788e586cfa080a938e7aa7626d40547c07b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "ForumBundle:Default:index.html.twig", 1);
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
        $__internal_7214eccb2e3a3d476327ffd8f460f18abf5c6a2d725d56f4053af218331efc66 = $this->env->getExtension("native_profiler");
        $__internal_7214eccb2e3a3d476327ffd8f460f18abf5c6a2d725d56f4053af218331efc66->enter($__internal_7214eccb2e3a3d476327ffd8f460f18abf5c6a2d725d56f4053af218331efc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7214eccb2e3a3d476327ffd8f460f18abf5c6a2d725d56f4053af218331efc66->leave($__internal_7214eccb2e3a3d476327ffd8f460f18abf5c6a2d725d56f4053af218331efc66_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_9a626ded2dd73dd48c286c192d12f3295cdc39d814bb752f08e0969b1447887e = $this->env->getExtension("native_profiler");
        $__internal_9a626ded2dd73dd48c286c192d12f3295cdc39d814bb752f08e0969b1447887e->enter($__internal_9a626ded2dd73dd48c286c192d12f3295cdc39d814bb752f08e0969b1447887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
<h1>Forum</h1>
    
";
        
        $__internal_9a626ded2dd73dd48c286c192d12f3295cdc39d814bb752f08e0969b1447887e->leave($__internal_9a626ded2dd73dd48c286c192d12f3295cdc39d814bb752f08e0969b1447887e_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/* <h1>Forum</h1>*/
/*     */
/* {% endblock %}*/
/* */
/* */
