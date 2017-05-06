<?php

/* BiBundle:User:home.html.twig */
class __TwigTemplate_0c4ba783f45a98b049cc71de268c46dd9ef06073711eaa913d9298cb4104c29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:User:home.html.twig", 1);
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
        $__internal_5eefd1a42f439405e037f5b7ce67c202b280ddee86ae66a35639088515718788 = $this->env->getExtension("native_profiler");
        $__internal_5eefd1a42f439405e037f5b7ce67c202b280ddee86ae66a35639088515718788->enter($__internal_5eefd1a42f439405e037f5b7ce67c202b280ddee86ae66a35639088515718788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:User:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eefd1a42f439405e037f5b7ce67c202b280ddee86ae66a35639088515718788->leave($__internal_5eefd1a42f439405e037f5b7ce67c202b280ddee86ae66a35639088515718788_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_70e0d63c558e45bfd08c4c2a563cfc7a05525d072771eccdbfa72f565d2f4bd8 = $this->env->getExtension("native_profiler");
        $__internal_70e0d63c558e45bfd08c4c2a563cfc7a05525d072771eccdbfa72f565d2f4bd8->enter($__internal_70e0d63c558e45bfd08c4c2a563cfc7a05525d072771eccdbfa72f565d2f4bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_70e0d63c558e45bfd08c4c2a563cfc7a05525d072771eccdbfa72f565d2f4bd8->leave($__internal_70e0d63c558e45bfd08c4c2a563cfc7a05525d072771eccdbfa72f565d2f4bd8_prof);

    }

    // line 18
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_1961f28ef42c3cf4ab75d44f08dcc2c1673d993553d8fb909688d19fcf34828e = $this->env->getExtension("native_profiler");
        $__internal_1961f28ef42c3cf4ab75d44f08dcc2c1673d993553d8fb909688d19fcf34828e->enter($__internal_1961f28ef42c3cf4ab75d44f08dcc2c1673d993553d8fb909688d19fcf34828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 19
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uploadi5/uploadifive.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/UserHome.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1961f28ef42c3cf4ab75d44f08dcc2c1673d993553d8fb909688d19fcf34828e->leave($__internal_1961f28ef42c3cf4ab75d44f08dcc2c1673d993553d8fb909688d19fcf34828e_prof);

    }

    // line 23
    public function block_ct($context, array $blocks = array())
    {
        $__internal_58e39b3e73224b50a4c54c5464186a8c46cfbd1ffcb0b1506c0ccee984c0c939 = $this->env->getExtension("native_profiler");
        $__internal_58e39b3e73224b50a4c54c5464186a8c46cfbd1ffcb0b1506c0ccee984c0c939->enter($__internal_58e39b3e73224b50a4c54c5464186a8c46cfbd1ffcb0b1506c0ccee984c0c939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 24
        echo "
    <h2>To Twoja strona domowa ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h2><br>
\t
\t
\t
    <table class=\"pure-table\">
        <tr>
            <td>
                login:
            </td>
            <td>
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
            </td>
        </tr>
        <tr>
            <td>
                email:
            </td>
            <td>
                <a href=\"mailto:";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</a>
            </td>
        </tr>

\t\t<tr>
            <td>
                
            </td>
            <td>
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("bi_user_delete");
        echo "\" onclick=\"return confirm('Potwierdź usunięcie konta');\">Usuń konto</a>
            </td>
        </tr>
    </table>
";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), 'form', array("attr" => array("class" => "pure-form")));
        echo "\t
";
        
        $__internal_58e39b3e73224b50a4c54c5464186a8c46cfbd1ffcb0b1506c0ccee984c0c939->leave($__internal_58e39b3e73224b50a4c54c5464186a8c46cfbd1ffcb0b1506c0ccee984c0c939_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:User:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  129 => 52,  115 => 43,  104 => 35,  91 => 25,  88 => 24,  82 => 23,  73 => 20,  68 => 19,  62 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
/* 	<script src="{{ asset('js/UserHome.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block ct %}*/
/* */
/*     <h2>To Twoja strona domowa {{ app.user.username }}</h2><br>*/
/* 	*/
/* 	*/
/* 	*/
/*     <table class="pure-table">*/
/*         <tr>*/
/*             <td>*/
/*                 login:*/
/*             </td>*/
/*             <td>*/
/*                 {{ app.user.username }}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 email:*/
/*             </td>*/
/*             <td>*/
/*                 <a href="mailto:{{ app.user.email }}">{{ app.user.email }}</a>*/
/*             </td>*/
/*         </tr>*/
/* */
/* 		<tr>*/
/*             <td>*/
/*                 */
/*             </td>*/
/*             <td>*/
/*                 <a href="{{ path('bi_user_delete')}}" onclick="return confirm('Potwierdź usunięcie konta');">Usuń konto</a>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* {{ form(user_form, {attr: {class:'pure-form'} }) }}	*/
/* {% endblock %}*/
/* */
