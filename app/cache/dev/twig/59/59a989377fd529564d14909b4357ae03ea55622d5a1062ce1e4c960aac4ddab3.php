<?php

/* BiBundle:User:inc_thumb.html.twig */
class __TwigTemplate_712cb148df6330faa64f270c7d6ab0af04ebc2ab08c026e435975f0d36e7c098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e788294f2bb17c00189257852839dbafd2790615fc4222388dcbf0ddf93c252b = $this->env->getExtension("native_profiler");
        $__internal_e788294f2bb17c00189257852839dbafd2790615fc4222388dcbf0ddf93c252b->enter($__internal_e788294f2bb17c00189257852839dbafd2790615fc4222388dcbf0ddf93c252b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:User:inc_thumb.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_item", array("user" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()))), "html", null, true);
        echo "\" class=\"user-thumb\">
\t";
        // line 2
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "img", array())) {
            // line 3
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, ((isset($context["upload_path"]) ? $context["upload_path"] : $this->getContext($context, "upload_path")) . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "img", array())), "html", null, true);
            echo "\" />
\t";
        }
        // line 5
        echo "\t
\t";
        // line 6
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array())) {
            // line 7
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "username", array()), "html", null, true);
            echo "
\t";
        }
        // line 11
        echo "</a>";
        
        $__internal_e788294f2bb17c00189257852839dbafd2790615fc4222388dcbf0ddf93c252b->leave($__internal_e788294f2bb17c00189257852839dbafd2790615fc4222388dcbf0ddf93c252b_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:User:inc_thumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 9,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }
}
/* <a href="{{ path('bi_member_item', {user:item.id}) }}" class="user-thumb">*/
/* 	{% if item.img %}*/
/* 		<img src="{{ upload_path ~ item.img }}" />*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if item.name %}*/
/* 		{{ item.name }}*/
/* 	{% else %}*/
/* 		{{ item.username }}*/
/* 	{% endif %}*/
/* </a>*/
