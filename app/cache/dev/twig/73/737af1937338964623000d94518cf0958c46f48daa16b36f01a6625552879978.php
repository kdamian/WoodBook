<?php

/* ForumBundle:Forum:index.html.twig */
class __TwigTemplate_f47e307e70f14496d0aed0cf50335c57f9854edc431959788d4893febc29ef95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "ForumBundle:Forum:index.html.twig", 1);
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
        $__internal_d8a4be3de409b6981245aa9f0851db23b1d0fc815ce8bfdb1b7c95e3d540a560 = $this->env->getExtension("native_profiler");
        $__internal_d8a4be3de409b6981245aa9f0851db23b1d0fc815ce8bfdb1b7c95e3d540a560->enter($__internal_d8a4be3de409b6981245aa9f0851db23b1d0fc815ce8bfdb1b7c95e3d540a560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a4be3de409b6981245aa9f0851db23b1d0fc815ce8bfdb1b7c95e3d540a560->leave($__internal_d8a4be3de409b6981245aa9f0851db23b1d0fc815ce8bfdb1b7c95e3d540a560_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_aed6119bf183d2d7da4fc924526b1cdf48b57420ae49811da230b4ad3e53ea71 = $this->env->getExtension("native_profiler");
        $__internal_aed6119bf183d2d7da4fc924526b1cdf48b57420ae49811da230b4ad3e53ea71->enter($__internal_aed6119bf183d2d7da4fc924526b1cdf48b57420ae49811da230b4ad3e53ea71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
    <h1>Porozmawiaj z ludźmi na forum</h1>

    <table class=\"pure-table\">
        <tr>
            <th>Temat</th>
            <th>Napisz na forum</th>
        </tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getSubject", array(), "method"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_subject", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"pure-button\">Otwórz</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </table>
    
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("forum_add");
        echo "\" class=\"pure-button\">Dodaj temat</a>
    
";
        
        $__internal_aed6119bf183d2d7da4fc924526b1cdf48b57420ae49811da230b4ad3e53ea71->leave($__internal_aed6119bf183d2d7da4fc924526b1cdf48b57420ae49811da230b4ad3e53ea71_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Forum:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  70 => 18,  61 => 15,  57 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/*     <h1>Porozmawiaj z ludźmi na forum</h1>*/
/* */
/*     <table class="pure-table">*/
/*         <tr>*/
/*             <th>Temat</th>*/
/*             <th>Napisz na forum</th>*/
/*         </tr>*/
/*         {% for item in items %}*/
/*         <tr>*/
/*             <td>{{ item.getSubject() }}</td>*/
/*             <td><a href="{{ path('forum_subject', {id:item.id})}}" class="pure-button">Otwórz</a></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     */
/*     <a href="{{ path('forum_add')}}" class="pure-button">Dodaj temat</a>*/
/*     */
/* {% endblock %}*/
/* */
/* */
