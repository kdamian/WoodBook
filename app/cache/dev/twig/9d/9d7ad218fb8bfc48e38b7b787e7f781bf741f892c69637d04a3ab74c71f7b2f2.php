<?php

/* BiBundle:User:register.html.twig */
class __TwigTemplate_506e71f20792cf15de61c76519b90bf2d6b8c04aab4c843dfcdc083bc32cfe94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:User:register.html.twig", 1);
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
        $__internal_f569e771216ca0408e947ef7638f34c9679b850ebba10ca07e1e877e20e4a94d = $this->env->getExtension("native_profiler");
        $__internal_f569e771216ca0408e947ef7638f34c9679b850ebba10ca07e1e877e20e4a94d->enter($__internal_f569e771216ca0408e947ef7638f34c9679b850ebba10ca07e1e877e20e4a94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f569e771216ca0408e947ef7638f34c9679b850ebba10ca07e1e877e20e4a94d->leave($__internal_f569e771216ca0408e947ef7638f34c9679b850ebba10ca07e1e877e20e4a94d_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_4cabedf04d0522fad4172f730e03d556dc60dc673638db7935489f6e7d539b9f = $this->env->getExtension("native_profiler");
        $__internal_4cabedf04d0522fad4172f730e03d556dc60dc673638db7935489f6e7d539b9f->enter($__internal_4cabedf04d0522fad4172f730e03d556dc60dc673638db7935489f6e7d539b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "    
     ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "pure-form")));
        echo "
    
";
        
        $__internal_4cabedf04d0522fad4172f730e03d556dc60dc673638db7935489f6e7d539b9f->leave($__internal_4cabedf04d0522fad4172f730e03d556dc60dc673638db7935489f6e7d539b9f_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/*     */
/*      {{ form(form, { attr: {class:'pure-form'} }) }}*/
/*     */
/* {% endblock %}*/
/* */
/* */
/* */
