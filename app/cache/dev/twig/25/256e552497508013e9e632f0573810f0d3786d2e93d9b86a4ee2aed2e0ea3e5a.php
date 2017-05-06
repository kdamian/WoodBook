<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d933b7ce5d10a3d0a43215c6bfc3bbc537299cceca6f4a929b88f8f98f27802a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e5587fd5ba0dbea8a7607beb6f55ec00ccbaa5f530c90e201871d58a75f467f = $this->env->getExtension("native_profiler");
        $__internal_0e5587fd5ba0dbea8a7607beb6f55ec00ccbaa5f530c90e201871d58a75f467f->enter($__internal_0e5587fd5ba0dbea8a7607beb6f55ec00ccbaa5f530c90e201871d58a75f467f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5587fd5ba0dbea8a7607beb6f55ec00ccbaa5f530c90e201871d58a75f467f->leave($__internal_0e5587fd5ba0dbea8a7607beb6f55ec00ccbaa5f530c90e201871d58a75f467f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae8c465ca11881b32a68ffe592ba85e9e7673ae6cdebae62a7059498eddaa3e3 = $this->env->getExtension("native_profiler");
        $__internal_ae8c465ca11881b32a68ffe592ba85e9e7673ae6cdebae62a7059498eddaa3e3->enter($__internal_ae8c465ca11881b32a68ffe592ba85e9e7673ae6cdebae62a7059498eddaa3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ae8c465ca11881b32a68ffe592ba85e9e7673ae6cdebae62a7059498eddaa3e3->leave($__internal_ae8c465ca11881b32a68ffe592ba85e9e7673ae6cdebae62a7059498eddaa3e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e57e7e4e8d521c8b9c84504b15c6b9bc79765f85936a5a86cc73df23e9af23 = $this->env->getExtension("native_profiler");
        $__internal_33e57e7e4e8d521c8b9c84504b15c6b9bc79765f85936a5a86cc73df23e9af23->enter($__internal_33e57e7e4e8d521c8b9c84504b15c6b9bc79765f85936a5a86cc73df23e9af23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33e57e7e4e8d521c8b9c84504b15c6b9bc79765f85936a5a86cc73df23e9af23->leave($__internal_33e57e7e4e8d521c8b9c84504b15c6b9bc79765f85936a5a86cc73df23e9af23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4317e388d166832c3aec4e3478c648b8c725a441ac931ce1b23eeb5182381f0f = $this->env->getExtension("native_profiler");
        $__internal_4317e388d166832c3aec4e3478c648b8c725a441ac931ce1b23eeb5182381f0f->enter($__internal_4317e388d166832c3aec4e3478c648b8c725a441ac931ce1b23eeb5182381f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4317e388d166832c3aec4e3478c648b8c725a441ac931ce1b23eeb5182381f0f->leave($__internal_4317e388d166832c3aec4e3478c648b8c725a441ac931ce1b23eeb5182381f0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
