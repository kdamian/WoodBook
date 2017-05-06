<?php

/* BiBundle:Default:inc_session_messages.html.twig */
class __TwigTemplate_b1a8c78a78090c8a835e2026bcb6740254b0f42857c17cb2ca27d21fd210bd07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a85101fe23c7edb05a2b104456f9d697b4cd8fd37e49b7bda7850fc47ba1204 = $this->env->getExtension("native_profiler");
        $__internal_8a85101fe23c7edb05a2b104456f9d697b4cd8fd37e49b7bda7850fc47ba1204->enter($__internal_8a85101fe23c7edb05a2b104456f9d697b4cd8fd37e49b7bda7850fc47ba1204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Default:inc_session_messages.html.twig"));

        // line 1
        $context["flashErrors"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method");
        // line 2
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msgs"), "method");
        // line 3
        echo "
";
        // line 4
        if (((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")) || (isset($context["flashErrors"]) ? $context["flashErrors"] : $this->getContext($context, "flashErrors")))) {
            // line 5
            echo "\t<div class=\"flash-messages\">
\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashErrors"]) ? $context["flashErrors"] : $this->getContext($context, "flashErrors")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
                // line 7
                echo "\t\t\t<div class=\"message pure-alert pure-alert-error\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
                // line 8
                echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
                echo "
\t\t\t\t
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 14
                echo "\t\t\t<div class=\"message pure-alert\">
\t\t\t\t<i class=\"fa fa-check-circle\"></i> ";
                // line 15
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
\t\t\t\t
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t</div>
";
        }
        // line 21
        echo "
";
        // line 22
        if (((array_key_exists("error", $context)) ? (_twig_default_filter((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), false)) : (false))) {
            // line 23
            echo "\t<div class=\"flash-messages raw-panel-messages\">
\t\t<div class=\"message pure-alert pure-alert-error\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i> 
\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
\t\t\t
\t\t</div>
\t</div>
";
        }
        
        $__internal_8a85101fe23c7edb05a2b104456f9d697b4cd8fd37e49b7bda7850fc47ba1204->leave($__internal_8a85101fe23c7edb05a2b104456f9d697b4cd8fd37e49b7bda7850fc47ba1204_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Default:inc_session_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  80 => 23,  78 => 22,  75 => 21,  71 => 19,  61 => 15,  58 => 14,  54 => 13,  51 => 12,  41 => 8,  38 => 7,  34 => 6,  31 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set flashErrors = app.session.flashbag.get('errors') %}*/
/* {% set flashMessages = app.session.flashbag.get('msgs') %}*/
/* */
/* {% if flashMessages or flashErrors %}*/
/* 	<div class="flash-messages">*/
/* 		{% for flashError in flashErrors %}*/
/* 			<div class="message pure-alert pure-alert-error">*/
/* 				<i class="fa fa-exclamation-circle"></i> {{ flashError }}*/
/* 				*/
/* 			</div>*/
/* 		{% endfor %}*/
/* */
/* 		{% for flashMessage in flashMessages %}*/
/* 			<div class="message pure-alert">*/
/* 				<i class="fa fa-check-circle"></i> {{ flashMessage }}*/
/* 				*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* {% if error|default(false) %}*/
/* 	<div class="flash-messages raw-panel-messages">*/
/* 		<div class="message pure-alert pure-alert-error">*/
/* 			<i class="fa fa-exclamation-circle"></i> */
/* 			{{ error.messageKey|trans(error.messageData, 'security') }}*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
