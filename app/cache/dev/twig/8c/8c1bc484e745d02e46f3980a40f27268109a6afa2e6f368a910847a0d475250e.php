<?php

/* BiBundle::page.html.twig */
class __TwigTemplate_cbf4d18a5dcf3de27a62745420103e4c58b4174af80e199f931607a2728ae44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'menu' => array($this, 'block_menu'),
            'members' => array($this, 'block_members'),
            'ct' => array($this, 'block_ct'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdaee9a3e09654a24fb60664ad5e7fbfc5b3f46c798398d30dfff165791b805d = $this->env->getExtension("native_profiler");
        $__internal_fdaee9a3e09654a24fb60664ad5e7fbfc5b3f46c798398d30dfff165791b805d->enter($__internal_fdaee9a3e09654a24fb60664ad5e7fbfc5b3f46c798398d30dfff165791b805d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle::page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>WoodBook</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pure.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery/jquery-ui.min.css"), "html", null, true);
        echo "\" />

        ";
        // line 13
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 16
        echo "
    </head>
    <body 
\t\tdata-upload=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("bi_upload");
        echo "\"
\t\tdata-upload_path=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["upload_path"]) ? $context["upload_path"] : $this->getContext($context, "upload_path")), "html", null, true);
        echo "\">
        <div class=\"pg\">
            <header>
                <h1>WoodBook</h1>
                <nav>
                    <ul>
                        <li>
                            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("bi_user_login");
        echo "\">Strona główna</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("bi_help");
        echo "\">Pomoc</a>
                        </li>
                        ";
        // line 32
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 33
            echo "                            <li class=\"session-x\">
                                ";
            // line 34
            $this->loadTemplate("BiBundle:User:inc_session.html.twig", "BiBundle::page.html.twig", 34)->display($context);
            // line 35
            echo "                            </li>
                        ";
        }
        // line 37
        echo "                    </ul>
                </nav>

            </header>

\t\t\t";
        // line 42
        $this->displayBlock('menu', $context, $blocks);
        // line 47
        echo "
\t\t\t<div class=\"member\">
                ";
        // line 49
        $this->displayBlock('members', $context, $blocks);
        // line 52
        echo "            </div>
\t\t\t
            <div class=\"ct\">
\t\t\t\t";
        // line 55
        $this->loadTemplate("BiBundle:Default:inc_session_messages.html.twig", "BiBundle::page.html.twig", 55)->display($context);
        // line 56
        echo "                ";
        $this->displayBlock('ct', $context, $blocks);
        // line 59
        echo "            </div>
            <footer>
                &copy; Damian Kołtan 2015
            </footer>
        </div>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 66
        $this->displayBlock('scripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>
";
        
        $__internal_fdaee9a3e09654a24fb60664ad5e7fbfc5b3f46c798398d30dfff165791b805d->leave($__internal_fdaee9a3e09654a24fb60664ad5e7fbfc5b3f46c798398d30dfff165791b805d_prof);

    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fea4cd18b444f9c23f9b936d98c88dc4203ac99404e6449cc7a9909c977f0bfd = $this->env->getExtension("native_profiler");
        $__internal_fea4cd18b444f9c23f9b936d98c88dc4203ac99404e6449cc7a9909c977f0bfd->enter($__internal_fea4cd18b444f9c23f9b936d98c88dc4203ac99404e6449cc7a9909c977f0bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 14
        echo "
        ";
        
        $__internal_fea4cd18b444f9c23f9b936d98c88dc4203ac99404e6449cc7a9909c977f0bfd->leave($__internal_fea4cd18b444f9c23f9b936d98c88dc4203ac99404e6449cc7a9909c977f0bfd_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6179690be76131d7ddf593db24f468c9a5dbdd3296d35acaba8f910f11256c1 = $this->env->getExtension("native_profiler");
        $__internal_e6179690be76131d7ddf593db24f468c9a5dbdd3296d35acaba8f910f11256c1->enter($__internal_e6179690be76131d7ddf593db24f468c9a5dbdd3296d35acaba8f910f11256c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 44
            echo "\t\t\t\t\t";
            $this->loadTemplate("BiBundle:User:inc_menu.html.twig", "BiBundle::page.html.twig", 44)->display($context);
            // line 45
            echo "\t\t\t\t";
        }
        // line 46
        echo "\t\t\t";
        
        $__internal_e6179690be76131d7ddf593db24f468c9a5dbdd3296d35acaba8f910f11256c1->leave($__internal_e6179690be76131d7ddf593db24f468c9a5dbdd3296d35acaba8f910f11256c1_prof);

    }

    // line 49
    public function block_members($context, array $blocks = array())
    {
        $__internal_bbe4c7a48e7bffc05ccc95aaaab33459dc362d8818fddc2e040bb63cd6b906a2 = $this->env->getExtension("native_profiler");
        $__internal_bbe4c7a48e7bffc05ccc95aaaab33459dc362d8818fddc2e040bb63cd6b906a2->enter($__internal_bbe4c7a48e7bffc05ccc95aaaab33459dc362d8818fddc2e040bb63cd6b906a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "members"));

        // line 50
        echo "
                ";
        
        $__internal_bbe4c7a48e7bffc05ccc95aaaab33459dc362d8818fddc2e040bb63cd6b906a2->leave($__internal_bbe4c7a48e7bffc05ccc95aaaab33459dc362d8818fddc2e040bb63cd6b906a2_prof);

    }

    // line 56
    public function block_ct($context, array $blocks = array())
    {
        $__internal_a4be1f6d8647837b56a752556aa2997e43f1d3ac12bbb41593e7909289b348e3 = $this->env->getExtension("native_profiler");
        $__internal_a4be1f6d8647837b56a752556aa2997e43f1d3ac12bbb41593e7909289b348e3->enter($__internal_a4be1f6d8647837b56a752556aa2997e43f1d3ac12bbb41593e7909289b348e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 57
        echo "
                ";
        
        $__internal_a4be1f6d8647837b56a752556aa2997e43f1d3ac12bbb41593e7909289b348e3->leave($__internal_a4be1f6d8647837b56a752556aa2997e43f1d3ac12bbb41593e7909289b348e3_prof);

    }

    // line 66
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_7be9c199dfdf9bb423f0b42b651676101b53d666705e43e4c90ab91a35f76224 = $this->env->getExtension("native_profiler");
        $__internal_7be9c199dfdf9bb423f0b42b651676101b53d666705e43e4c90ab91a35f76224->enter($__internal_7be9c199dfdf9bb423f0b42b651676101b53d666705e43e4c90ab91a35f76224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 67
        echo "
        ";
        
        $__internal_7be9c199dfdf9bb423f0b42b651676101b53d666705e43e4c90ab91a35f76224->leave($__internal_7be9c199dfdf9bb423f0b42b651676101b53d666705e43e4c90ab91a35f76224_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle::page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 67,  211 => 66,  203 => 57,  197 => 56,  189 => 50,  183 => 49,  176 => 46,  173 => 45,  170 => 44,  167 => 43,  161 => 42,  153 => 14,  147 => 13,  138 => 69,  136 => 66,  132 => 65,  128 => 64,  121 => 59,  118 => 56,  116 => 55,  111 => 52,  109 => 49,  105 => 47,  103 => 42,  96 => 37,  92 => 35,  90 => 34,  87 => 33,  85 => 32,  80 => 30,  74 => 27,  64 => 20,  60 => 19,  55 => 16,  53 => 13,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>WoodBook</title>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*         <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/pure.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('js/jquery/jquery-ui.min.css') }}" />*/
/* */
/*         {% block stylesheet %}*/
/* */
/*         {% endblock %}*/
/* */
/*     </head>*/
/*     <body */
/* 		data-upload="{{ path('bi_upload') }}"*/
/* 		data-upload_path="{{ upload_path }}">*/
/*         <div class="pg">*/
/*             <header>*/
/*                 <h1>WoodBook</h1>*/
/*                 <nav>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('bi_user_login') }}">Strona główna</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('bi_help') }}">Pomoc</a>*/
/*                         </li>*/
/*                         {% if app.user %}*/
/*                             <li class="session-x">*/
/*                                 {% include 'BiBundle:User:inc_session.html.twig' %}*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </nav>*/
/* */
/*             </header>*/
/* */
/* 			{% block menu %}*/
/* 				{% if app.user %}*/
/* 					{% include 'BiBundle:User:inc_menu.html.twig' %}*/
/* 				{% endif %}*/
/* 			{% endblock %}*/
/* */
/* 			<div class="member">*/
/*                 {% block members %}*/
/* */
/*                 {% endblock %}*/
/*             </div>*/
/* 			*/
/*             <div class="ct">*/
/* 				{% include 'BiBundle:Default:inc_session_messages.html.twig' %}*/
/*                 {% block ct %}*/
/* */
/*                 {% endblock %}*/
/*             </div>*/
/*             <footer>*/
/*                 &copy; Damian Kołtan 2015*/
/*             </footer>*/
/*         </div>*/
/*         <script src="{{ asset('js/jquery/jquery.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery/jquery-ui.min.js') }}"></script>*/
/*         {% block scripts %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
