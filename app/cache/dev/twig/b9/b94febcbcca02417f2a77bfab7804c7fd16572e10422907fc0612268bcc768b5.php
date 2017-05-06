<?php

/* BiBundle:Member:blog.html.twig */
class __TwigTemplate_20f50aec8ec34493be59ade72ccc0c0eb751f947a90fac70235c8d04efacce59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle:Member:layout.html.twig", "BiBundle:Member:blog.html.twig", 1);
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
        $__internal_b202fb468cc19038f6e8f3c1e4f9a775237e7670f02f7e716abafd4bf59de95e = $this->env->getExtension("native_profiler");
        $__internal_b202fb468cc19038f6e8f3c1e4f9a775237e7670f02f7e716abafd4bf59de95e->enter($__internal_b202fb468cc19038f6e8f3c1e4f9a775237e7670f02f7e716abafd4bf59de95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Member:blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b202fb468cc19038f6e8f3c1e4f9a775237e7670f02f7e716abafd4bf59de95e->leave($__internal_b202fb468cc19038f6e8f3c1e4f9a775237e7670f02f7e716abafd4bf59de95e_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_971eebe408a17f3d4528d6c803ef40c5aaa206f1fb179bef5b1bef74936dd9f5 = $this->env->getExtension("native_profiler");
        $__internal_971eebe408a17f3d4528d6c803ef40c5aaa206f1fb179bef5b1bef74936dd9f5->enter($__internal_971eebe408a17f3d4528d6c803ef40c5aaa206f1fb179bef5b1bef74936dd9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "\t
\t<h1>Blog użytkownika ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "username", array()), "html", null, true);
        echo "</h1>

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
            $this->loadTemplate("BiBundle:Blog:inc_item.html.twig", "BiBundle:Member:blog.html.twig", 8)->display(array_merge($context, array("blog" => $context["item"])));
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
        
        $__internal_971eebe408a17f3d4528d6c803ef40c5aaa206f1fb179bef5b1bef74936dd9f5->leave($__internal_971eebe408a17f3d4528d6c803ef40c5aaa206f1fb179bef5b1bef74936dd9f5_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Member:blog.html.twig";
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
/* {% extends "BiBundle:Member:layout.html.twig" %}*/
/* */
/* {% block ct %}*/
/* 	*/
/* 	<h1>Blog użytkownika {{ member.username }}</h1>*/
/* */
/*     {% for item in blogs %}*/
/*         {% include 'BiBundle:Blog:inc_item.html.twig' with { blog:item } %}*/
/*     {% endfor %}*/
/*             */
/* {% endblock %}*/
/* */
