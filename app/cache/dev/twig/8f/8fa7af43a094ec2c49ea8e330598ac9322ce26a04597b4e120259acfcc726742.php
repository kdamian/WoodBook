<?php

/* BiBundle:Blog:index.html.twig */
class __TwigTemplate_8ab46ee959e89b9b6ddb15d3984434a34693fc939626fb3d973c3fd16db68377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Blog:index.html.twig", 1);
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
        $__internal_ae3f89d40e6960b2aed6f3ff496da92f5c42cb4340ff4be798f1d8496a020f0d = $this->env->getExtension("native_profiler");
        $__internal_ae3f89d40e6960b2aed6f3ff496da92f5c42cb4340ff4be798f1d8496a020f0d->enter($__internal_ae3f89d40e6960b2aed6f3ff496da92f5c42cb4340ff4be798f1d8496a020f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3f89d40e6960b2aed6f3ff496da92f5c42cb4340ff4be798f1d8496a020f0d->leave($__internal_ae3f89d40e6960b2aed6f3ff496da92f5c42cb4340ff4be798f1d8496a020f0d_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_c548efc7e3bbcc93cebe90b26efb15c2f7668e5757c1af20e3a01b7d94bd8aae = $this->env->getExtension("native_profiler");
        $__internal_c548efc7e3bbcc93cebe90b26efb15c2f7668e5757c1af20e3a01b7d94bd8aae->enter($__internal_c548efc7e3bbcc93cebe90b26efb15c2f7668e5757c1af20e3a01b7d94bd8aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "    
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("bi_user_blog_add");
        echo "\" class=\"pure-button\">Dodaj wpis</a>
    
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "        ";
            $this->loadTemplate("BiBundle:Blog:inc_item.html.twig", "BiBundle:Blog:index.html.twig", 8)->display(array_merge($context, array("blog" => $context["item"])));
            // line 9
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            
";
        
        $__internal_c548efc7e3bbcc93cebe90b26efb15c2f7668e5757c1af20e3a01b7d94bd8aae->leave($__internal_c548efc7e3bbcc93cebe90b26efb15c2f7668e5757c1af20e3a01b7d94bd8aae_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  68 => 9,  65 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/*     */
/*     <a href="{{ path('bi_user_blog_add') }}" class="pure-button">Dodaj wpis</a>*/
/*     */
/*     {% for item in blogs %}*/
/*         {% include 'BiBundle:Blog:inc_item.html.twig' with {blog:item} %}*/
/*     {% endfor %}*/
/*             */
/* {% endblock %}*/
/* */
