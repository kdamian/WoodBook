<?php

/* ForumBundle:Forum:add.html.twig */
class __TwigTemplate_c94ee7f840a7f928d6ea46e6e6cff963e86b0cf057508bb131e13291f93158c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "ForumBundle:Forum:add.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_165a18c150caf213d4c56ceffb1b5ec48e1deef8c744a2767e9cac12b9410bea = $this->env->getExtension("native_profiler");
        $__internal_165a18c150caf213d4c56ceffb1b5ec48e1deef8c744a2767e9cac12b9410bea->enter($__internal_165a18c150caf213d4c56ceffb1b5ec48e1deef8c744a2767e9cac12b9410bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165a18c150caf213d4c56ceffb1b5ec48e1deef8c744a2767e9cac12b9410bea->leave($__internal_165a18c150caf213d4c56ceffb1b5ec48e1deef8c744a2767e9cac12b9410bea_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2122869d7403301bb3cee11db055bbc1f8589be94e01e27f9b10ccd87af5a159 = $this->env->getExtension("native_profiler");
        $__internal_2122869d7403301bb3cee11db055bbc1f8589be94e01e27f9b10ccd87af5a159->enter($__internal_2122869d7403301bb3cee11db055bbc1f8589be94e01e27f9b10ccd87af5a159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styleForum.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_2122869d7403301bb3cee11db055bbc1f8589be94e01e27f9b10ccd87af5a159->leave($__internal_2122869d7403301bb3cee11db055bbc1f8589be94e01e27f9b10ccd87af5a159_prof);

    }

    // line 9
    public function block_ct($context, array $blocks = array())
    {
        $__internal_53d2584dd213dd7f289112cf865ca1126eb8326a68775bfe16f8fd9eff82ecc1 = $this->env->getExtension("native_profiler");
        $__internal_53d2584dd213dd7f289112cf865ca1126eb8326a68775bfe16f8fd9eff82ecc1->enter($__internal_53d2584dd213dd7f289112cf865ca1126eb8326a68775bfe16f8fd9eff82ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 10
        echo "    
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "pure-form")));
        echo "
    
";
        
        $__internal_53d2584dd213dd7f289112cf865ca1126eb8326a68775bfe16f8fd9eff82ecc1->leave($__internal_53d2584dd213dd7f289112cf865ca1126eb8326a68775bfe16f8fd9eff82ecc1_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Forum:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  60 => 10,  54 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block stylesheet %}*/
/*     */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/styleForum.css') }}" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block ct %}*/
/*     */
/*     {{ form(form, {attr:{class:'pure-form'}}) }}*/
/*     */
/* {% endblock %}*/
/*     */
/*     */
