<?php

/* BiBundle:Tab:index.html.twig */
class __TwigTemplate_667cfc3b8d2a166590777086fa208966e4d9026ceb93d3db778043873f3cb320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Tab:index.html.twig", 1);
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
        $__internal_e5395df7a684134d3776800f1f9fb8421ef1a131a7555d68847d3cdffdb369e1 = $this->env->getExtension("native_profiler");
        $__internal_e5395df7a684134d3776800f1f9fb8421ef1a131a7555d68847d3cdffdb369e1->enter($__internal_e5395df7a684134d3776800f1f9fb8421ef1a131a7555d68847d3cdffdb369e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Tab:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5395df7a684134d3776800f1f9fb8421ef1a131a7555d68847d3cdffdb369e1->leave($__internal_e5395df7a684134d3776800f1f9fb8421ef1a131a7555d68847d3cdffdb369e1_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_51dde1409bf4c4acacdd851680b8c1d1ef66a8593d63a7d01ff68917c2fed3ad = $this->env->getExtension("native_profiler");
        $__internal_51dde1409bf4c4acacdd851680b8c1d1ef66a8593d63a7d01ff68917c2fed3ad->enter($__internal_51dde1409bf4c4acacdd851680b8c1d1ef66a8593d63a7d01ff68917c2fed3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("bi_tab_add");
        echo "\" class=\"pure-button\">Dodaj nową tabulaturę</a>

    <table class=\"pure-table\">
        <tr>
            <th>Dodano</th>
            <th>Tytuł</th>
            <th></th>
        </tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "getCreated", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_tab_item", array("tab" => $this->getAttribute($context["item"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getName", array(), "method"), "html", null, true);
            echo "</a>
\t\t\t\t</td>
                <td>
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_tab_edit", array("itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"pure-button\">Edytuj</a>
\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_tab_delete", array("item" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"pure-button\" onclick=\"return confirm('Potwierdź usunięcie');\">&times;</a>
\t\t\t\t</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>

";
        
        $__internal_51dde1409bf4c4acacdd851680b8c1d1ef66a8593d63a7d01ff68917c2fed3ad->leave($__internal_51dde1409bf4c4acacdd851680b8c1d1ef66a8593d63a7d01ff68917c2fed3ad_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Tab:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  76 => 20,  72 => 19,  64 => 16,  59 => 14,  56 => 13,  52 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/*     <a href="{{ path('bi_tab_add') }}" class="pure-button">Dodaj nową tabulaturę</a>*/
/* */
/*     <table class="pure-table">*/
/*         <tr>*/
/*             <th>Dodano</th>*/
/*             <th>Tytuł</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% for item in items %}*/
/*             <tr>*/
/*                 <td>{{ item.getCreated()|date('Y-m-d') }}</td>*/
/*                 <td>*/
/* 					<a href="{{ path('bi_tab_item', {tab:item.getId()}) }}">{{ item.getName() }}</a>*/
/* 				</td>*/
/*                 <td>*/
/* 					<a href="{{ path('bi_tab_edit', {itemId:item.id}) }}" class="pure-button">Edytuj</a>*/
/* 					<a href="{{ path('bi_tab_delete', {item:item.id}) }}" class="pure-button" onclick="return confirm('Potwierdź usunięcie');">&times;</a>*/
/* 				</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
