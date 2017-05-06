<?php

/* BiBundle:User:inc_menu.html.twig */
class __TwigTemplate_8e410965e95a915331f40dcad6ef1dd6954446a84df929f8ba2a01123b69d22f extends Twig_Template
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
        $__internal_964aa77e3b2e2ab7809e7059c74c70ce2634cce3e392a2d3b51de334925a98f5 = $this->env->getExtension("native_profiler");
        $__internal_964aa77e3b2e2ab7809e7059c74c70ce2634cce3e392a2d3b51de334925a98f5->enter($__internal_964aa77e3b2e2ab7809e7059c74c70ce2634cce3e392a2d3b51de334925a98f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:User:inc_menu.html.twig"));

        // line 1
        echo "<div class=\"pure-menu pure-menu-horizontal\">
    <ul class=\"pure-menu-list\">
        <li class=\"pure-menu-item\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("forum_homepage");
        echo "\" class=\"pure-menu-link\">Forum</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("bi_user_blog", array("id" => 1));
        echo "\" class=\"pure-menu-link\">Blog</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("bi_history_index");
        echo "\" class=\"pure-menu-link\">Historia</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("bi_tab_index");
        echo "\" class=\"pure-menu-link\">Tabulatury</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("bi_member_index");
        echo "\" class=\"pure-menu-link\">Użytkownicy</a></li>
    </ul>
</div>
";
        
        $__internal_964aa77e3b2e2ab7809e7059c74c70ce2634cce3e392a2d3b51de334925a98f5->leave($__internal_964aa77e3b2e2ab7809e7059c74c70ce2634cce3e392a2d3b51de334925a98f5_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:User:inc_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="pure-menu pure-menu-horizontal">*/
/*     <ul class="pure-menu-list">*/
/*         <li class="pure-menu-item"><a href="{{ path('forum_homepage') }}" class="pure-menu-link">Forum</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_user_blog', {id:1}) }}" class="pure-menu-link">Blog</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_history_index') }}" class="pure-menu-link">Historia</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_tab_index') }}" class="pure-menu-link">Tabulatury</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_member_index') }}" class="pure-menu-link">Użytkownicy</a></li>*/
/*     </ul>*/
/* </div>*/
/* */
