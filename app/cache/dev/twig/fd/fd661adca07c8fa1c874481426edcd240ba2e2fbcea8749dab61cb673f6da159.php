<?php

/* BiBundle:Member:historyBody.html.twig */
class __TwigTemplate_6286b1e82a192a8ad9d37db9701028081c7ec32d89cc475325a888f996fce415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle:Member:layout.html.twig", "BiBundle:Member:historyBody.html.twig", 1);
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
        $__internal_b515ad213b35dc8f3b5b157f2c3e34fddde8fe90032fa41c749b8b1bf499da55 = $this->env->getExtension("native_profiler");
        $__internal_b515ad213b35dc8f3b5b157f2c3e34fddde8fe90032fa41c749b8b1bf499da55->enter($__internal_b515ad213b35dc8f3b5b157f2c3e34fddde8fe90032fa41c749b8b1bf499da55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:historyBody.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b515ad213b35dc8f3b5b157f2c3e34fddde8fe90032fa41c749b8b1bf499da55->leave($__internal_b515ad213b35dc8f3b5b157f2c3e34fddde8fe90032fa41c749b8b1bf499da55_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_845c7dbc6a65de184a388ba85b00e8afd2eede822c3b207a93656b450ff9a841 = $this->env->getExtension("native_profiler");
        $__internal_845c7dbc6a65de184a388ba85b00e8afd2eede822c3b207a93656b450ff9a841->enter($__internal_845c7dbc6a65de184a388ba85b00e8afd2eede822c3b207a93656b450ff9a841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
    <table class=\"pure-table\">
        <tr>
            <th>Tytuł</th>
            <th>Opis</th>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histories_body"]) ? $context["histories_body"] : $this->getContext($context, "histories_body")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "            <tr>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getName", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getBody", array(), "method"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </table>

";
        
        $__internal_845c7dbc6a65de184a388ba85b00e8afd2eede822c3b207a93656b450ff9a841->leave($__internal_845c7dbc6a65de184a388ba85b00e8afd2eede822c3b207a93656b450ff9a841_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:historyBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  59 => 13,  55 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle:Member:layout.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/*     <table class="pure-table">*/
/*         <tr>*/
/*             <th>Tytuł</th>*/
/*             <th>Opis</th>*/
/*         </tr>*/
/*         {% for item in histories_body %}*/
/*             <tr>*/
/*                 <td>{{ item.getName() }}</td>*/
/*                 <td>{{ item.getBody() }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
