<?php

/* BiBundle:Home:friends.html.twig */
class __TwigTemplate_403dc88a799729a175ca804c527189580e85521058fe67962e55726ed1605dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Home:friends.html.twig", 1);
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
        $__internal_058902f4dab781f145b541f9128c41e70123902df717d7eee61c209dfb3b2c64 = $this->env->getExtension("native_profiler");
        $__internal_058902f4dab781f145b541f9128c41e70123902df717d7eee61c209dfb3b2c64->enter($__internal_058902f4dab781f145b541f9128c41e70123902df717d7eee61c209dfb3b2c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Home:friends.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_058902f4dab781f145b541f9128c41e70123902df717d7eee61c209dfb3b2c64->leave($__internal_058902f4dab781f145b541f9128c41e70123902df717d7eee61c209dfb3b2c64_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_8ebca763efd934f9936a226291caa6c1b88da693120c9a287180afa797d3e3cc = $this->env->getExtension("native_profiler");
        $__internal_8ebca763efd934f9936a226291caa6c1b88da693120c9a287180afa797d3e3cc->enter($__internal_8ebca763efd934f9936a226291caa6c1b88da693120c9a287180afa797d3e3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
<h1>Użytkownicy</h1>

<div class=\"pure-g\">
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "    <div class=\"pure-u-1-5\">
\t\t";
            // line 10
            $this->loadTemplate("BiBundle:User:inc_thumb.html.twig", "BiBundle:Home:friends.html.twig", 10)->display($context);
            // line 11
            echo "    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>   

";
        
        $__internal_8ebca763efd934f9936a226291caa6c1b88da693120c9a287180afa797d3e3cc->leave($__internal_8ebca763efd934f9936a226291caa6c1b88da693120c9a287180afa797d3e3cc_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Home:friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  68 => 11,  66 => 10,  63 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/* <h1>Użytkownicy</h1>*/
/* */
/* <div class="pure-g">*/
/* {% for item in items %}*/
/*     <div class="pure-u-1-5">*/
/* 		{% include 'BiBundle:User:inc_thumb.html.twig' %}*/
/*     </div>*/
/* {% endfor %}*/
/* </div>   */
/* */
/* {% endblock %}*/
/* */
