<?php

/* BiBundle:Member:layout.html.twig */
class __TwigTemplate_a7448b91ad612fe6c2ff3894059bbf0eddede535e54122a38f3ab252f946dbe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Member:layout.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'members' => array($this, 'block_members'),
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c20379a453fbebad3771bbb0293befbd18f5f26ff7457bff7d27049bc0761b6e = $this->env->getExtension("native_profiler");
        $__internal_c20379a453fbebad3771bbb0293befbd18f5f26ff7457bff7d27049bc0761b6e->enter($__internal_c20379a453fbebad3771bbb0293befbd18f5f26ff7457bff7d27049bc0761b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c20379a453fbebad3771bbb0293befbd18f5f26ff7457bff7d27049bc0761b6e->leave($__internal_c20379a453fbebad3771bbb0293befbd18f5f26ff7457bff7d27049bc0761b6e_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_477f4bb49c0b53c888cc1bbdb5074fa28b585f5dd33b7f1b9eee75b61dd222e5 = $this->env->getExtension("native_profiler");
        $__internal_477f4bb49c0b53c888cc1bbdb5074fa28b585f5dd33b7f1b9eee75b61dd222e5->enter($__internal_477f4bb49c0b53c888cc1bbdb5074fa28b585f5dd33b7f1b9eee75b61dd222e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "\t
<div class=\"pure-menu pure-menu-horizontal\">
    <ul class=\"pure-menu-list\">
        <li class=\"pure-menu-item\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("forum_homepage");
        echo "\" class=\"pure-menu-link\">Forum</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_blog", array("user" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()))), "html", null, true);
        echo "\" class=\"pure-menu-link\">Blog</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_history", array("user" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()))), "html", null, true);
        echo "\" class=\"pure-menu-link\">Historia</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_tab", array("user" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()))), "html", null, true);
        echo "\" class=\"pure-menu-link\">Tabulatury</a></li>
        <li class=\"pure-menu-item\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("bi_member_index");
        echo "\" class=\"pure-menu-link\">Użytkownicy</a></li>
    </ul>
</div>

";
        
        $__internal_477f4bb49c0b53c888cc1bbdb5074fa28b585f5dd33b7f1b9eee75b61dd222e5->leave($__internal_477f4bb49c0b53c888cc1bbdb5074fa28b585f5dd33b7f1b9eee75b61dd222e5_prof);

    }

    // line 17
    public function block_members($context, array $blocks = array())
    {
        $__internal_ae13ae86c2f7afe3296d9ca48799d9f90cfbc5d6dad3d653ef685d0e4ce5c6be = $this->env->getExtension("native_profiler");
        $__internal_ae13ae86c2f7afe3296d9ca48799d9f90cfbc5d6dad3d653ef685d0e4ce5c6be->enter($__internal_ae13ae86c2f7afe3296d9ca48799d9f90cfbc5d6dad3d653ef685d0e4ce5c6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "members"));

        // line 18
        echo "
\tProfil użytkownika ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "username", array()), "html", null, true);
        echo "

";
        
        $__internal_ae13ae86c2f7afe3296d9ca48799d9f90cfbc5d6dad3d653ef685d0e4ce5c6be->leave($__internal_ae13ae86c2f7afe3296d9ca48799d9f90cfbc5d6dad3d653ef685d0e4ce5c6be_prof);

    }

    // line 23
    public function block_ct($context, array $blocks = array())
    {
        $__internal_3b67abd152cac4149a8e60d711c5479e9d49d4694805cba71f84de7cfc966a03 = $this->env->getExtension("native_profiler");
        $__internal_3b67abd152cac4149a8e60d711c5479e9d49d4694805cba71f84de7cfc966a03->enter($__internal_3b67abd152cac4149a8e60d711c5479e9d49d4694805cba71f84de7cfc966a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 24
        echo "\t
\t
";
        
        $__internal_3b67abd152cac4149a8e60d711c5479e9d49d4694805cba71f84de7cfc966a03->leave($__internal_3b67abd152cac4149a8e60d711c5479e9d49d4694805cba71f84de7cfc966a03_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  94 => 23,  84 => 19,  81 => 18,  75 => 17,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block menu %}*/
/* 	*/
/* <div class="pure-menu pure-menu-horizontal">*/
/*     <ul class="pure-menu-list">*/
/*         <li class="pure-menu-item"><a href="{{ path('forum_homepage') }}" class="pure-menu-link">Forum</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_member_blog', {user:member.id}) }}" class="pure-menu-link">Blog</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_member_history', {user:member.id}) }}" class="pure-menu-link">Historia</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_member_tab', {user:member.id}) }}" class="pure-menu-link">Tabulatury</a></li>*/
/*         <li class="pure-menu-item"><a href="{{ path('bi_member_index') }}" class="pure-menu-link">Użytkownicy</a></li>*/
/*     </ul>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block members %}*/
/* */
/* 	Profil użytkownika {{ member.username }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block ct %}*/
/* 	*/
/* 	*/
/* {% endblock %}*/
/* */
