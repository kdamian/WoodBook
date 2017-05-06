<?php

/* BiBundle:Member:tab.html.twig */
class __TwigTemplate_8688624042154c440435777d0785c7679ed4647eab3725c0ae60bd88932c770a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle:Member:layout.html.twig", "BiBundle:Member:tab.html.twig", 1);
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
        $__internal_1e83b11e59cc9772da2e9ab5830fd43d3494a6ba03b1d420cdcc33502defa143 = $this->env->getExtension("native_profiler");
        $__internal_1e83b11e59cc9772da2e9ab5830fd43d3494a6ba03b1d420cdcc33502defa143->enter($__internal_1e83b11e59cc9772da2e9ab5830fd43d3494a6ba03b1d420cdcc33502defa143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:tab.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e83b11e59cc9772da2e9ab5830fd43d3494a6ba03b1d420cdcc33502defa143->leave($__internal_1e83b11e59cc9772da2e9ab5830fd43d3494a6ba03b1d420cdcc33502defa143_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_16e02593614fd9ac73ae7f10da3e3d66514056827c17a350d760711946303e8b = $this->env->getExtension("native_profiler");
        $__internal_16e02593614fd9ac73ae7f10da3e3d66514056827c17a350d760711946303e8b->enter($__internal_16e02593614fd9ac73ae7f10da3e3d66514056827c17a350d760711946303e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo " 
    <table class=\"pure-table\">
        <tr>
            <th>Dodano</th>
            <th>Tytuł</th>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "            <tr>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "getCreated", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_member_tab_item", array("tab" => $this->getAttribute($context["item"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getName", array(), "method"), "html", null, true);
            echo "</a>
\t\t\t\t</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </table>

";
        
        $__internal_16e02593614fd9ac73ae7f10da3e3d66514056827c17a350d760711946303e8b->leave($__internal_16e02593614fd9ac73ae7f10da3e3d66514056827c17a350d760711946303e8b_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  60 => 14,  55 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle:Member:layout.html.twig" %}*/
/* */
/* {% block ct %}*/
/*  */
/*     <table class="pure-table">*/
/*         <tr>*/
/*             <th>Dodano</th>*/
/*             <th>Tytuł</th>*/
/*         </tr>*/
/*         {% for item in tabs %}*/
/*             <tr>*/
/*                 <td>{{ item.getCreated()|date('Y-m-d') }}</td>*/
/*                 <td>*/
/* 					<a href="{{ path('bi_member_tab_item', {tab:item.getId()}) }}">{{ item.getName() }}</a>*/
/* 				</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
