<?php

/* BiBundle:History:edit.html.twig */
class __TwigTemplate_4d02769de23a3f773352a7c2fa498e82871a31f8c40be4a805cd29a351b2046c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:History:edit.html.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e86cd0c2f931025673a0d4429b668f9acbd0efd03062db8a143fd784e693fc77 = $this->env->getExtension("native_profiler");
        $__internal_e86cd0c2f931025673a0d4429b668f9acbd0efd03062db8a143fd784e693fc77->enter($__internal_e86cd0c2f931025673a0d4429b668f9acbd0efd03062db8a143fd784e693fc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:History:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e86cd0c2f931025673a0d4429b668f9acbd0efd03062db8a143fd784e693fc77->leave($__internal_e86cd0c2f931025673a0d4429b668f9acbd0efd03062db8a143fd784e693fc77_prof);

    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c71e3c9f1d7ac0c6c43fe02528467857ee63739d8806eacfe8e8203ee0a0e8fa = $this->env->getExtension("native_profiler");
        $__internal_c71e3c9f1d7ac0c6c43fe02528467857ee63739d8806eacfe8e8203ee0a0e8fa->enter($__internal_c71e3c9f1d7ac0c6c43fe02528467857ee63739d8806eacfe8e8203ee0a0e8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 4
        echo "\t<script>
        \$(function() {
            \$('#history_date_from, #history_date_to').datepicker();
        });
    </script>
";
        
        $__internal_c71e3c9f1d7ac0c6c43fe02528467857ee63739d8806eacfe8e8203ee0a0e8fa->leave($__internal_c71e3c9f1d7ac0c6c43fe02528467857ee63739d8806eacfe8e8203ee0a0e8fa_prof);

    }

    // line 11
    public function block_ct($context, array $blocks = array())
    {
        $__internal_0076533d41578af86eebc7ed4c623a32a7cb0797e12667fbfa047d73886de5bf = $this->env->getExtension("native_profiler");
        $__internal_0076533d41578af86eebc7ed4c623a32a7cb0797e12667fbfa047d73886de5bf->enter($__internal_0076533d41578af86eebc7ed4c623a32a7cb0797e12667fbfa047d73886de5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 12
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "pure-form")));
        echo "
";
        
        $__internal_0076533d41578af86eebc7ed4c623a32a7cb0797e12667fbfa047d73886de5bf->leave($__internal_0076533d41578af86eebc7ed4c623a32a7cb0797e12667fbfa047d73886de5bf_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:History:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block scripts %}*/
/* 	<script>*/
/*         $(function() {*/
/*             $('#history_date_from, #history_date_to').datepicker();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block ct %}*/
/*     {{ form(form, { attr: {class:'pure-form'} }) }}*/
/* {% endblock %}*/
