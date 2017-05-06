<?php

/* ForumBundle:Forum:add_answer.html.twig */
class __TwigTemplate_09f8453340d4d05f0b75418066512dd430d08a5db88509d5830c6de15f1fe5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "ForumBundle:Forum:add_answer.html.twig", 1);
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
        $__internal_54d724f253df5f5db3080415c9ff1286d134e6672e5efd47822f2ced4e5a9ed7 = $this->env->getExtension("native_profiler");
        $__internal_54d724f253df5f5db3080415c9ff1286d134e6672e5efd47822f2ced4e5a9ed7->enter($__internal_54d724f253df5f5db3080415c9ff1286d134e6672e5efd47822f2ced4e5a9ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:add_answer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d724f253df5f5db3080415c9ff1286d134e6672e5efd47822f2ced4e5a9ed7->leave($__internal_54d724f253df5f5db3080415c9ff1286d134e6672e5efd47822f2ced4e5a9ed7_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_3ee8c3e770bfb8d73d595a16769cb9e331feb4dcc58bd26a2d7cd1bc0b226143 = $this->env->getExtension("native_profiler");
        $__internal_3ee8c3e770bfb8d73d595a16769cb9e331feb4dcc58bd26a2d7cd1bc0b226143->enter($__internal_3ee8c3e770bfb8d73d595a16769cb9e331feb4dcc58bd26a2d7cd1bc0b226143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styleForum.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_3ee8c3e770bfb8d73d595a16769cb9e331feb4dcc58bd26a2d7cd1bc0b226143->leave($__internal_3ee8c3e770bfb8d73d595a16769cb9e331feb4dcc58bd26a2d7cd1bc0b226143_prof);

    }

    // line 9
    public function block_ct($context, array $blocks = array())
    {
        $__internal_df30f9c1e4332d016d45839408f7893a36bef5a88ed18e8b83549cc500a1faaf = $this->env->getExtension("native_profiler");
        $__internal_df30f9c1e4332d016d45839408f7893a36bef5a88ed18e8b83549cc500a1faaf->enter($__internal_df30f9c1e4332d016d45839408f7893a36bef5a88ed18e8b83549cc500a1faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 10
        echo "    
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "pure-form")));
        echo "
    
";
        
        $__internal_df30f9c1e4332d016d45839408f7893a36bef5a88ed18e8b83549cc500a1faaf->leave($__internal_df30f9c1e4332d016d45839408f7893a36bef5a88ed18e8b83549cc500a1faaf_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Forum:add_answer.html.twig";
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
