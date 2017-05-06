<?php

/* BiBundle:Member:index.html.twig */
class __TwigTemplate_4fa6372322c478e3eb72d9935f1b955ae4a6d384ccfdeeff5ed9e36b5d04ecfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Member:index.html.twig", 1);
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
        $__internal_d42b5ee8d2a3d4e558f1c85de757f9537603ef8f299faee9e5f965ca65a974e5 = $this->env->getExtension("native_profiler");
        $__internal_d42b5ee8d2a3d4e558f1c85de757f9537603ef8f299faee9e5f965ca65a974e5->enter($__internal_d42b5ee8d2a3d4e558f1c85de757f9537603ef8f299faee9e5f965ca65a974e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42b5ee8d2a3d4e558f1c85de757f9537603ef8f299faee9e5f965ca65a974e5->leave($__internal_d42b5ee8d2a3d4e558f1c85de757f9537603ef8f299faee9e5f965ca65a974e5_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_23358f7b60021fca5e9973842917d8fc4e8bd0b0843e636cc94377443b0550bb = $this->env->getExtension("native_profiler");
        $__internal_23358f7b60021fca5e9973842917d8fc4e8bd0b0843e636cc94377443b0550bb->enter($__internal_23358f7b60021fca5e9973842917d8fc4e8bd0b0843e636cc94377443b0550bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uploadi5/uploadifive.css"), "html", null, true);
        echo "\" />
\t<style>
\t\t#user_img {
\t\t\tdisplay: none;
\t\t}
\t\t
\t\t.user-img {
\t\t\twidth: 120px;
\t\t\tdisplay: block;\t
\t\t}
\t</style>
";
        
        $__internal_23358f7b60021fca5e9973842917d8fc4e8bd0b0843e636cc94377443b0550bb->leave($__internal_23358f7b60021fca5e9973842917d8fc4e8bd0b0843e636cc94377443b0550bb_prof);

    }

    // line 18
    public function block_ct($context, array $blocks = array())
    {
        $__internal_412d8328d5f86dbd1e36911e96888e07fcc4843168ff878e3271794fea492370 = $this->env->getExtension("native_profiler");
        $__internal_412d8328d5f86dbd1e36911e96888e07fcc4843168ff878e3271794fea492370->enter($__internal_412d8328d5f86dbd1e36911e96888e07fcc4843168ff878e3271794fea492370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 19
        echo "\t
\t<h1><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("bi_member_friends");
        echo "\" class=\"pure-button\">Znajomi</a></h1>

\t<h1>Użytkownicy</h1>

\t<div class=\"pure-g\">
\t\t";
        // line 25
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
            // line 26
            echo "\t\t\t";
            if (($this->getAttribute($context["item"], "getIsActive", array(), "method") == true)) {
                // line 27
                echo "\t\t\t<div class=\"pure-u-1-5\">
\t\t\t\t";
                // line 28
                $this->loadTemplate("BiBundle:User:inc_thumb.html.twig", "BiBundle:Member:index.html.twig", 28)->display($context);
                // line 29
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 31
            echo "\t\t";
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
        // line 32
        echo "\t</div>   

";
        
        $__internal_412d8328d5f86dbd1e36911e96888e07fcc4843168ff878e3271794fea492370->leave($__internal_412d8328d5f86dbd1e36911e96888e07fcc4843168ff878e3271794fea492370_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  107 => 31,  103 => 29,  101 => 28,  98 => 27,  95 => 26,  78 => 25,  70 => 20,  67 => 19,  61 => 18,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block stylesheet %}*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('js/uploadi5/uploadifive.css') }}" />*/
/* 	<style>*/
/* 		#user_img {*/
/* 			display: none;*/
/* 		}*/
/* 		*/
/* 		.user-img {*/
/* 			width: 120px;*/
/* 			display: block;	*/
/* 		}*/
/* 	</style>*/
/* {% endblock %}*/
/* */
/* */
/* {% block ct %}*/
/* 	*/
/* 	<h1><a href="{{ path('bi_member_friends') }}" class="pure-button">Znajomi</a></h1>*/
/* */
/* 	<h1>Użytkownicy</h1>*/
/* */
/* 	<div class="pure-g">*/
/* 		{% for item in items %}*/
/* 			{% if item.getIsActive() == true %}*/
/* 			<div class="pure-u-1-5">*/
/* 				{% include 'BiBundle:User:inc_thumb.html.twig' %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</div>   */
/* */
/* {% endblock %}*/
/* */
