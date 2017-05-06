<?php

/* BiBundle:Tab:edit.html.twig */
class __TwigTemplate_e18c8d1b4f92a6ad6db8ed76defd63671a15d28b4e9a61d1bb58263be0ec88b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:Tab:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'scripts' => array($this, 'block_scripts'),
            'ct' => array($this, 'block_ct'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d715e1d7bfefcfd02ce261c03dbd371d7efd4bb28b10c37abf55a51ae7e44f52 = $this->env->getExtension("native_profiler");
        $__internal_d715e1d7bfefcfd02ce261c03dbd371d7efd4bb28b10c37abf55a51ae7e44f52->enter($__internal_d715e1d7bfefcfd02ce261c03dbd371d7efd4bb28b10c37abf55a51ae7e44f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Tab:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d715e1d7bfefcfd02ce261c03dbd371d7efd4bb28b10c37abf55a51ae7e44f52->leave($__internal_d715e1d7bfefcfd02ce261c03dbd371d7efd4bb28b10c37abf55a51ae7e44f52_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9288d4f509e2129f238d29b57dff2fee4435f161e62770f83b227f28030f8cdb = $this->env->getExtension("native_profiler");
        $__internal_9288d4f509e2129f238d29b57dff2fee4435f161e62770f83b227f28030f8cdb->enter($__internal_9288d4f509e2129f238d29b57dff2fee4435f161e62770f83b227f28030f8cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uploadi5/uploadifive.css"), "html", null, true);
        echo "\" />
\t<style>
\t\t#user_img {
\t\t\tdisplay: none;
\t\t}
\t\t
\t\t.user-img {
\t\t\twidth: 120px;
\t\t\tdisplay: block;\t
\t\t}
\t</style>
";
        
        $__internal_9288d4f509e2129f238d29b57dff2fee4435f161e62770f83b227f28030f8cdb->leave($__internal_9288d4f509e2129f238d29b57dff2fee4435f161e62770f83b227f28030f8cdb_prof);

    }

    // line 18
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_d4be3ee4dae5d87fcf8b7c0c417442550983b021869acf7dd37da14b072a4c8a = $this->env->getExtension("native_profiler");
        $__internal_d4be3ee4dae5d87fcf8b7c0c417442550983b021869acf7dd37da14b072a4c8a->enter($__internal_d4be3ee4dae5d87fcf8b7c0c417442550983b021869acf7dd37da14b072a4c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 19
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uploadi5/uploadifive.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/TabEdit.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d4be3ee4dae5d87fcf8b7c0c417442550983b021869acf7dd37da14b072a4c8a->leave($__internal_d4be3ee4dae5d87fcf8b7c0c417442550983b021869acf7dd37da14b072a4c8a_prof);

    }

    // line 23
    public function block_ct($context, array $blocks = array())
    {
        $__internal_6d92df2932aacb0504da23fd064764e30e3762d2c0d57bc956881e095f154de3 = $this->env->getExtension("native_profiler");
        $__internal_6d92df2932aacb0504da23fd064764e30e3762d2c0d57bc956881e095f154de3->enter($__internal_6d92df2932aacb0504da23fd064764e30e3762d2c0d57bc956881e095f154de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 24
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "pure-form")));
        echo "
";
        
        $__internal_6d92df2932aacb0504da23fd064764e30e3762d2c0d57bc956881e095f154de3->leave($__internal_6d92df2932aacb0504da23fd064764e30e3762d2c0d57bc956881e095f154de3_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Tab:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  82 => 23,  73 => 20,  68 => 19,  62 => 18,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block stylesheet %}*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('js/uploadi5/uploadifive.css') }}" />*/
/* 	<style>*/
/* 		#user_img {*/
/* 			display: none;*/
/* 		}*/
/* 		*/
/* 		.user-img {*/
/* 			width: 120px;*/
/* 			display: block;	*/
/* 		}*/
/* 	</style>*/
/* {% endblock %}*/
/* */
/* */
/* {% block scripts %}*/
/* 	<script src="{{ asset('js/uploadi5/uploadifive.js') }}"></script>*/
/* 	<script src="{{ asset('js/TabEdit.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block ct %}*/
/*     {{ form(form, { attr: {class:'pure-form'} }) }}*/
/* {% endblock %}*/
