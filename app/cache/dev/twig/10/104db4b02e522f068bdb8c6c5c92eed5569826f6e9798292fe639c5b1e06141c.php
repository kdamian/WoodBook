<?php

/* BiBundle:Member:history.html.twig */
class __TwigTemplate_51e66cdaf8311df4af5646873257620a1e3d09a753f5ab0c173639f9b90fc813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle:Member:layout.html.twig", "BiBundle:Member:history.html.twig", 1);
        $this->blocks = array(
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle:Member:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2718658dfb760fb882465fedf6c44e4f542c113866bbe1c656041dfac5a50a74 = $this->env->getExtension("native_profiler");
        $__internal_2718658dfb760fb882465fedf6c44e4f542c113866bbe1c656041dfac5a50a74->enter($__internal_2718658dfb760fb882465fedf6c44e4f542c113866bbe1c656041dfac5a50a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2718658dfb760fb882465fedf6c44e4f542c113866bbe1c656041dfac5a50a74->leave($__internal_2718658dfb760fb882465fedf6c44e4f542c113866bbe1c656041dfac5a50a74_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_6e102f5f54b2141a3dc0e26243f855591aada03654009498bb8f120584c2d8d9 = $this->env->getExtension("native_profiler");
        $__internal_6e102f5f54b2141a3dc0e26243f855591aada03654009498bb8f120584c2d8d9->enter($__internal_6e102f5f54b2141a3dc0e26243f855591aada03654009498bb8f120584c2d8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
\t<h1>Poznaj historię użytkownika ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "username", array()), "html", null, true);
        echo "</h1>

    <table class=\"pure-table\">
        <tr>
            <th>Od</th>
            <th>Do</th>
            <th>Tytuł</th>
\t\t\t<th></th>
        </tr>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : $this->getContext($context, "histories")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getDateFrom", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getDateTo", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getName", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_history_body", array("user" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()), "id" => $this->getAttribute($context["item"], "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"pure-button\">Zobacz</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </table>

";
        
        $__internal_6e102f5f54b2141a3dc0e26243f855591aada03654009498bb8f120584c2d8d9->leave($__internal_6e102f5f54b2141a3dc0e26243f855591aada03654009498bb8f120584c2d8d9_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  59 => 15,  55 => 14,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle:Member:layout.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/* 	<h1>Poznaj historię użytkownika {{ member.username }}</h1>*/
/* */
/*     <table class="pure-table">*/
/*         <tr>*/
/*             <th>Od</th>*/
/*             <th>Do</th>*/
/*             <th>Tytuł</th>*/
/* 			<th></th>*/
/*         </tr>*/
/*         {% for item in histories %}*/
/*             <tr>*/
/*                 <td>{{ item.getDateFrom() }}</td>*/
/*                 <td>{{ item.getDateTo() }}</td>*/
/*                 <td>{{ item.getName() }}</td>*/
/* 				<td><a href="{{ path('bi_member_history_body', {user:member.id, id:item.getId()}) }}" class="pure-button">Zobacz</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
