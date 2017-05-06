<?php

/* BiBundle:Member:item.html.twig */
class __TwigTemplate_c4495b0d08e43fa8764bf771d9c9b90ab4c5105343446770fd0575b4df9cf0d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle:Member:layout.html.twig", "BiBundle:Member:item.html.twig", 1);
        $this->blocks = array(
            'members' => array($this, 'block_members'),
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle:Member:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e2a66b42078c855f712c6e52298fda41733137b69aa218655dbeb707179cd7d = $this->env->getExtension("native_profiler");
        $__internal_4e2a66b42078c855f712c6e52298fda41733137b69aa218655dbeb707179cd7d->enter($__internal_4e2a66b42078c855f712c6e52298fda41733137b69aa218655dbeb707179cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2a66b42078c855f712c6e52298fda41733137b69aa218655dbeb707179cd7d->leave($__internal_4e2a66b42078c855f712c6e52298fda41733137b69aa218655dbeb707179cd7d_prof);

    }

    // line 3
    public function block_members($context, array $blocks = array())
    {
        $__internal_ac77f64e7133086df76048fdeeb4dbae681be4f6d6833cc8702f90c0629ee200 = $this->env->getExtension("native_profiler");
        $__internal_ac77f64e7133086df76048fdeeb4dbae681be4f6d6833cc8702f90c0629ee200->enter($__internal_ac77f64e7133086df76048fdeeb4dbae681be4f6d6833cc8702f90c0629ee200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "members"));

        // line 4
        echo "
\t<h1>Profil użytkownika ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "username", array()), "html", null, true);
        echo "</h1>

";
        
        $__internal_ac77f64e7133086df76048fdeeb4dbae681be4f6d6833cc8702f90c0629ee200->leave($__internal_ac77f64e7133086df76048fdeeb4dbae681be4f6d6833cc8702f90c0629ee200_prof);

    }

    // line 9
    public function block_ct($context, array $blocks = array())
    {
        $__internal_a9f13dc944d6728ae6f9e5ca84f570eb57b87c18791f96b3f3cff4dc64130ab9 = $this->env->getExtension("native_profiler");
        $__internal_a9f13dc944d6728ae6f9e5ca84f570eb57b87c18791f96b3f3cff4dc64130ab9->enter($__internal_a9f13dc944d6728ae6f9e5ca84f570eb57b87c18791f96b3f3cff4dc64130ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 10
        echo "
\t<div class=\"profile-container\">

\t\t<div class=\"profile-right\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 17
        if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "email", array())) {
            // line 18
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"mailto:";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "email", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 25
        if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "name", array())) {
            // line 26
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 32
        if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lname", array())) {
            // line 33
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lname", array()), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 39
        if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "tel", array())) {
            // line 40
            echo "\t\t\t\t\t\t\tTelefon: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "tel", array()), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 46
        if ( !(isset($context["isMyFriend"]) ? $context["isMyFriend"] : $this->getContext($context, "isMyFriend"))) {
            // line 47
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_add_friend", array("friend" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()))), "html", null, true);
            echo "\">Dodaj znajomego</a>
\t\t\t\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t\t\t\tto Twój znajomy
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"profile-left\">
\t\t\t";
        // line 56
        if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "img", array())) {
            // line 57
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, ((isset($context["upload_path"]) ? $context["upload_path"] : $this->getContext($context, "upload_path")) . $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "img", array())), "html", null, true);
            echo "\" class='profile-thumb'/>
\t\t\t";
        }
        // line 59
        echo "\t\t</div>
\t</div>

";
        
        $__internal_a9f13dc944d6728ae6f9e5ca84f570eb57b87c18791f96b3f3cff4dc64130ab9->leave($__internal_a9f13dc944d6728ae6f9e5ca84f570eb57b87c18791f96b3f3cff4dc64130ab9_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  150 => 57,  148 => 56,  141 => 51,  137 => 49,  131 => 47,  129 => 46,  123 => 42,  117 => 40,  115 => 39,  109 => 35,  103 => 33,  101 => 32,  95 => 28,  89 => 26,  87 => 25,  81 => 21,  74 => 19,  71 => 18,  69 => 17,  60 => 10,  54 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle:Member:layout.html.twig" %}*/
/* */
/* {% block members %}*/
/* */
/* 	<h1>Profil użytkownika {{ member.username }}</h1>*/
/* */
/* {% endblock %}*/
/* */
/* {% block ct %}*/
/* */
/* 	<div class="profile-container">*/
/* */
/* 		<div class="profile-right">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						{% if member.email %}*/
/* 							*/
/* 							<a href="mailto:{{ member.email }}">{{ member.email }}</a>*/
/* 						{% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						{% if member.name %}*/
/* 							{{ member.name }}*/
/* 						{% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						{% if member.lname %}*/
/* 							{{ member.lname }}*/
/* 						{% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						{% if member.tel %}*/
/* 							Telefon: {{ member.tel }}*/
/* 						{% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						{% if not isMyFriend %}*/
/* 							<a href="{{ path('bi_member_add_friend', {friend:member.id}) }}">Dodaj znajomego</a>*/
/* 						{% else %}*/
/* 							to Twój znajomy*/
/* 						{% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>*/
/* 		</div>*/
/* 		<div class="profile-left">*/
/* 			{% if member.img %}*/
/* 				<img src="{{ upload_path ~ member.img }}" class='profile-thumb'/>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
