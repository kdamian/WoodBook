<?php

/* BiBundle:Default:contactEmail.txt.twig */
class __TwigTemplate_cd7423e264e48cde1df77e0af14dcd74f3ffaad69e7c49197c0b0ec79c4103cc extends Twig_Template
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
        $__internal_a6cea6036b89fe17d090de1e7c7924b21d85a307b1fa37c8209443f3e57a14a4 = $this->env->getExtension("native_profiler");
        $__internal_a6cea6036b89fe17d090de1e7c7924b21d85a307b1fa37c8209443f3e57a14a4->enter($__internal_a6cea6036b89fe17d090de1e7c7924b21d85a307b1fa37c8209443f3e57a14a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Default:contactEmail.txt.twig"));

        // line 1
        echo "Zapytanie zostalo stworzone przez ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array());
        echo ", data: ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Email kontaktowy: ";
        // line 3
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array());
        echo "
Temat: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject", array());
        echo "
Tresc:
";
        // line 6
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body", array());
        
        $__internal_a6cea6036b89fe17d090de1e7c7924b21d85a307b1fa37c8209443f3e57a14a4->leave($__internal_a6cea6036b89fe17d090de1e7c7924b21d85a307b1fa37c8209443f3e57a14a4_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Default:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 4,  30 => 3,  22 => 1,);
    }
}
/* Zapytanie zostalo stworzone przez {{ enquiry.name }}, data: {{ "now" | date("Y-m-d H:i") }}.*/
/* */
/* Email kontaktowy: {{ enquiry.email }}*/
/* Temat: {{ enquiry.subject }}*/
/* Tresc:*/
/* {{ enquiry.body }}*/
