<?php

/* BiBundle:Home:tab.html.twig */
class __TwigTemplate_4d766fbcd22a760af6929d180dd4e5c741eab36e287849466ff8be4b102e582d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Home:tab.html.twig", 1);
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
        $__internal_2198fa26dd44f9ab97273161fa921eae8318245cddb1c4c4b2b598706571c07a = $this->env->getExtension("native_profiler");
        $__internal_2198fa26dd44f9ab97273161fa921eae8318245cddb1c4c4b2b598706571c07a->enter($__internal_2198fa26dd44f9ab97273161fa921eae8318245cddb1c4c4b2b598706571c07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Home:tab.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2198fa26dd44f9ab97273161fa921eae8318245cddb1c4c4b2b598706571c07a->leave($__internal_2198fa26dd44f9ab97273161fa921eae8318245cddb1c4c4b2b598706571c07a_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_b31d5612bed295ddd1ca7dbcf1f6aea68c1ce51396138d0ee933ee9bf696286a = $this->env->getExtension("native_profiler");
        $__internal_b31d5612bed295ddd1ca7dbcf1f6aea68c1ce51396138d0ee933ee9bf696286a->enter($__internal_b31d5612bed295ddd1ca7dbcf1f6aea68c1ce51396138d0ee933ee9bf696286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
<h1>Tabulatury</h1>
    
";
        
        $__internal_b31d5612bed295ddd1ca7dbcf1f6aea68c1ce51396138d0ee933ee9bf696286a->leave($__internal_b31d5612bed295ddd1ca7dbcf1f6aea68c1ce51396138d0ee933ee9bf696286a_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Home:tab.html.twig";
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
/* <h1>Tabulatury</h1>*/
/*     */
/* {% endblock %}*/
/* */
