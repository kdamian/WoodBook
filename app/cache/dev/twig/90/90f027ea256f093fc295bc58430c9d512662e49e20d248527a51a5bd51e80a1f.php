<?php

/* BiBundle:Blog:edit.html.twig */
class __TwigTemplate_aa9aa08050dacdfcf733acc576a34e8ebaeb186062cf57a6bd720e720d67b177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Blog:edit.html.twig", 1);
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
        $__internal_9cb8bd7ad7238b2c828d591d46985e2a4f63e33f045860a1968a4f7e616881fe = $this->env->getExtension("native_profiler");
        $__internal_9cb8bd7ad7238b2c828d591d46985e2a4f63e33f045860a1968a4f7e616881fe->enter($__internal_9cb8bd7ad7238b2c828d591d46985e2a4f63e33f045860a1968a4f7e616881fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Blog:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb8bd7ad7238b2c828d591d46985e2a4f63e33f045860a1968a4f7e616881fe->leave($__internal_9cb8bd7ad7238b2c828d591d46985e2a4f63e33f045860a1968a4f7e616881fe_prof);

    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4a0da2b4e42110d68c760f8e060072f554bb7e27823c513496b1d65a11cc91c8 = $this->env->getExtension("native_profiler");
        $__internal_4a0da2b4e42110d68c760f8e060072f554bb7e27823c513496b1d65a11cc91c8->enter($__internal_4a0da2b4e42110d68c760f8e060072f554bb7e27823c513496b1d65a11cc91c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 4
        echo "    <script>
\t\t";
        // line 6
        echo "        \$(function() {
            \$('#history_date_from, #history_date_to').datepicker();
        });
    </script>
";
        
        $__internal_4a0da2b4e42110d68c760f8e060072f554bb7e27823c513496b1d65a11cc91c8->leave($__internal_4a0da2b4e42110d68c760f8e060072f554bb7e27823c513496b1d65a11cc91c8_prof);

    }

    // line 12
    public function block_ct($context, array $blocks = array())
    {
        $__internal_dad585bdb508da31bf8be63f7c8ec834b6cf08f872804c3be9337f5431a48c52 = $this->env->getExtension("native_profiler");
        $__internal_dad585bdb508da31bf8be63f7c8ec834b6cf08f872804c3be9337f5431a48c52->enter($__internal_dad585bdb508da31bf8be63f7c8ec834b6cf08f872804c3be9337f5431a48c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 13
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "pure-form")));
        echo "
";
        
        $__internal_dad585bdb508da31bf8be63f7c8ec834b6cf08f872804c3be9337f5431a48c52->leave($__internal_dad585bdb508da31bf8be63f7c8ec834b6cf08f872804c3be9337f5431a48c52_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Blog:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  55 => 12,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block scripts %}*/
/*     <script>*/
/* 		{# tworzenie skryptu do wyświetlania planszy kalendarza w domyśle, całość do wyboru wyświetla się w 'historii' #}*/
/*         $(function() {*/
/*             $('#history_date_from, #history_date_to').datepicker();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block ct %}*/
/*     {{ form(form, { attr: {class:'pure-form'} }) }}*/
/* {% endblock %}*/
