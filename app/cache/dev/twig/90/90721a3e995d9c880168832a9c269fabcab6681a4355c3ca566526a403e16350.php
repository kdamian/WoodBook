<?php

/* BiBundle:History:index.html.twig */
class __TwigTemplate_e31165dd03b583a8399639a4423343b413a932e4efdfc1491473aefc5f05509b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:History:index.html.twig", 1);
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
        $__internal_35c8f9b48bd1a8c527f361c5e3cc8fcf65ca3060c3d348acdd3806af06401915 = $this->env->getExtension("native_profiler");
        $__internal_35c8f9b48bd1a8c527f361c5e3cc8fcf65ca3060c3d348acdd3806af06401915->enter($__internal_35c8f9b48bd1a8c527f361c5e3cc8fcf65ca3060c3d348acdd3806af06401915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:History:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35c8f9b48bd1a8c527f361c5e3cc8fcf65ca3060c3d348acdd3806af06401915->leave($__internal_35c8f9b48bd1a8c527f361c5e3cc8fcf65ca3060c3d348acdd3806af06401915_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_ba9e180ff8c0343deb2bf53ed708ff1a5dcb96ec06858816b1ac0da164d8823b = $this->env->getExtension("native_profiler");
        $__internal_ba9e180ff8c0343deb2bf53ed708ff1a5dcb96ec06858816b1ac0da164d8823b->enter($__internal_ba9e180ff8c0343deb2bf53ed708ff1a5dcb96ec06858816b1ac0da164d8823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("bi_history_add");
        echo "\" class=\"pure-button\">Dodaj nowy wpis</a>

    <table class=\"pure-table\">
        <tr>
            <th>Od</th>
            <th>Do</th>
            <th>Tytuł</th>
            <th></th>
        </tr>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getDateFrom", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getDateTo", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getName", array(), "method"), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_history_edit", array("itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"pure-button\">Edytuj</a>
\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_history_delete", array("item" => $this->getAttribute($context["item"], "getId", array(), "method"))), "html", null, true);
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
        
        $__internal_ba9e180ff8c0343deb2bf53ed708ff1a5dcb96ec06858816b1ac0da164d8823b->leave($__internal_ba9e180ff8c0343deb2bf53ed708ff1a5dcb96ec06858816b1ac0da164d8823b_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:History:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  77 => 20,  73 => 19,  68 => 17,  64 => 16,  60 => 15,  57 => 14,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/*     <a href="{{ path('bi_history_add') }}" class="pure-button">Dodaj nowy wpis</a>*/
/* */
/*     <table class="pure-table">*/
/*         <tr>*/
/*             <th>Od</th>*/
/*             <th>Do</th>*/
/*             <th>Tytuł</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% for item in items %}*/
/*             <tr>*/
/*                 <td>{{ item.getDateFrom() }}</td>*/
/*                 <td>{{ item.getDateTo() }}</td>*/
/*                 <td>{{ item.getName() }}</td>*/
/*                 <td>*/
/* 					<a href="{{ path('bi_history_edit', {itemId:item.id}) }}" class="pure-button">Edytuj</a>*/
/* 					<a href="{{ path('bi_history_delete', {item:item.getId()}) }}" class="pure-button" onclick="return confirm('Potwierdź usunięcie');">&times;</a>*/
/* 				</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
