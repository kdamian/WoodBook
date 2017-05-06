<?php

/* BiBundle:Member:friends.html.twig */
class __TwigTemplate_d8eb98da7efb254b4ff1700fc76348e9cebc15c05493cad00c69ff1923b43a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Member:friends.html.twig", 1);
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
        $__internal_6ae4b780bcfe5b0197a727c2eb816f949f92b1dd130a1569a578f21a5a1855f2 = $this->env->getExtension("native_profiler");
        $__internal_6ae4b780bcfe5b0197a727c2eb816f949f92b1dd130a1569a578f21a5a1855f2->enter($__internal_6ae4b780bcfe5b0197a727c2eb816f949f92b1dd130a1569a578f21a5a1855f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:friends.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae4b780bcfe5b0197a727c2eb816f949f92b1dd130a1569a578f21a5a1855f2->leave($__internal_6ae4b780bcfe5b0197a727c2eb816f949f92b1dd130a1569a578f21a5a1855f2_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_d852d7a375d086ae555ecb2091ed5dab33090754168228d08a8c688372a81e37 = $this->env->getExtension("native_profiler");
        $__internal_d852d7a375d086ae555ecb2091ed5dab33090754168228d08a8c688372a81e37->enter($__internal_d852d7a375d086ae555ecb2091ed5dab33090754168228d08a8c688372a81e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
\t<table class=\"pure-table\">
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 7
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 9
            $this->loadTemplate("BiBundle:User:inc_thumb.html.twig", "BiBundle:Member:friends.html.twig", 9)->display(array_merge($context, array("item" => $context["friend"])));
            echo "\t
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_fried_remove", array("friend" => $this->getAttribute($context["friend"], "getId", array(), "method"))), "html", null, true);
            echo "\">&times;</a>
\t\t\t</td>
\t\t</tr>
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</table>
\t

";
        
        $__internal_d852d7a375d086ae555ecb2091ed5dab33090754168228d08a8c688372a81e37->leave($__internal_d852d7a375d086ae555ecb2091ed5dab33090754168228d08a8c688372a81e37_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  71 => 12,  65 => 9,  61 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/* 	<table class="pure-table">*/
/* 	{% for friend in friends %}*/
/* 		<tr>*/
/* 			<td>*/
/* 				{% include 'BiBundle:User:inc_thumb.html.twig' with {item:friend}%}	*/
/* 			</td>*/
/* 			<td>*/
/* 				<a href="{{ path('bi_member_fried_remove', {friend:friend.getId()}) }}">&times;</a>*/
/* 			</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* 	</table>*/
/* 	*/
/* */
/* {% endblock %}*/
/* */
/* */
