<?php

/* BiBundle:Default:help.html.twig */
class __TwigTemplate_e5b15501fdb4c4e1613a01b640f6cd354b1048a40b259abdc4f8b5d92ab4e252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Default:help.html.twig", 1);
        $this->blocks = array(
            'ct' => array($this, 'block_ct'),
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fce37a95c935ba7bd9442de6474bd1f0d54bddd8a67c76e9243acf7b3685f55 = $this->env->getExtension("native_profiler");
        $__internal_5fce37a95c935ba7bd9442de6474bd1f0d54bddd8a67c76e9243acf7b3685f55->enter($__internal_5fce37a95c935ba7bd9442de6474bd1f0d54bddd8a67c76e9243acf7b3685f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Default:help.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fce37a95c935ba7bd9442de6474bd1f0d54bddd8a67c76e9243acf7b3685f55->leave($__internal_5fce37a95c935ba7bd9442de6474bd1f0d54bddd8a67c76e9243acf7b3685f55_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_e998b3795c503cf1c42a90b42a8ad5ab576e2dbbd8c91e489d6baab79de4fe82 = $this->env->getExtension("native_profiler");
        $__internal_e998b3795c503cf1c42a90b42a8ad5ab576e2dbbd8c91e489d6baab79de4fe82->enter($__internal_e998b3795c503cf1c42a90b42a8ad5ab576e2dbbd8c91e489d6baab79de4fe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
    ";
        // line 9
        echo "
    ";
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 22
        echo "

    <form class=\"contact\">
        <h1>W razie problemu możesz napisać do twórcy</h1>
    </form>

    <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("bi_help");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"pure-form\"> 
        ";
        // line 30
        echo "
        <fieldset class=\"pure-group\">

            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "

        </fieldset>

        <fieldset class=\"pure-group\">

            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <input type=\"submit\" value=\"Wyslij\" class=\"pure-button pure-input-1-2 pure-button-primary\">


        </fieldset>    
    </form>

";
        
        $__internal_e998b3795c503cf1c42a90b42a8ad5ab576e2dbbd8c91e489d6baab79de4fe82->leave($__internal_e998b3795c503cf1c42a90b42a8ad5ab576e2dbbd8c91e489d6baab79de4fe82_prof);

    }

    // line 16
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_93d00679d53ec093a94d65a8976a899a49efdd93badcb60ff10583a96d169290 = $this->env->getExtension("native_profiler");
        $__internal_93d00679d53ec093a94d65a8976a899a49efdd93badcb60ff10583a96d169290->enter($__internal_93d00679d53ec093a94d65a8976a899a49efdd93badcb60ff10583a96d169290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 17
        echo "
        ";
        // line 18
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bi/css/help.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    ";
        
        $__internal_93d00679d53ec093a94d65a8976a899a49efdd93badcb60ff10583a96d169290->leave($__internal_93d00679d53ec093a94d65a8976a899a49efdd93badcb60ff10583a96d169290_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 19,  123 => 18,  120 => 17,  114 => 16,  98 => 45,  93 => 43,  89 => 42,  80 => 36,  76 => 35,  71 => 33,  66 => 30,  60 => 28,  52 => 22,  50 => 16,  47 => 15,  44 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/*     {#<h1>*/
/*         Jesli szukasz pomocy, napisz do mnie ze swoim zapytaniem:*/
/*         <a href="meilto:damian.koltan@gamil.com">damian.koltan@gmail.com</a>*/
/*     </h1>#}*/
/* */
/*     {#% if app.session.hasFlash('help-notice') %}*/
/*         <div class="help-notice">*/
/*             {{ app.session.flash('help-notice') }}*/
/*         </div>*/
/*     {% endif %#}*/
/* */
/*     {% block stylesheet %}*/
/* */
/*         {{ parent() }}*/
/*         <link href="{{ asset('bundles/bi/css/help.css') }}" type="text/css" rel="stylesheet" />*/
/* */
/*     {% endblock %}*/
/* */
/* */
/*     <form class="contact">*/
/*         <h1>W razie problemu możesz napisać do twórcy</h1>*/
/*     </form>*/
/* */
/*     <form action="{{ path('bi_help') }}" method="post" {{ form_enctype(form) }} class="pure-form"> */
/*         {# {{ form_enctype(form) }} <- uzywane gdy chcemy ladowac pliki #}*/
/* */
/*         <fieldset class="pure-group">*/
/* */
/*             {{ form_errors(form) }}*/
/* */
/*             {{ form_row(form.name) }}*/
/*             {{ form_row(form.email) }}*/
/* */
/*         </fieldset>*/
/* */
/*         <fieldset class="pure-group">*/
/* */
/*             {{ form_row(form.subject) }}*/
/*             {{ form_row(form.body) }}*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*             <input type="submit" value="Wyslij" class="pure-button pure-input-1-2 pure-button-primary">*/
/* */
/* */
/*         </fieldset>    */
/*     </form>*/
/* */
/* {% endblock %}*/
