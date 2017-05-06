<?php

/* ForumBundle:History:index.html.twig */
class __TwigTemplate_63f1263cf5f9883d7a17af375fcc326a6641138f7d81eb549b4a95e7168c22ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "ForumBundle:History:index.html.twig", 1);
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
        $__internal_94a0951bfe470176ff7da4674d8de2cf4ec3df8af5e958d414c1fe0cc533c628 = $this->env->getExtension("native_profiler");
        $__internal_94a0951bfe470176ff7da4674d8de2cf4ec3df8af5e958d414c1fe0cc533c628->enter($__internal_94a0951bfe470176ff7da4674d8de2cf4ec3df8af5e958d414c1fe0cc533c628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:History:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a0951bfe470176ff7da4674d8de2cf4ec3df8af5e958d414c1fe0cc533c628->leave($__internal_94a0951bfe470176ff7da4674d8de2cf4ec3df8af5e958d414c1fe0cc533c628_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_fa7588813bcd41bbb02b395c07f940c278c6c82c249c2f9efcc3589082898092 = $this->env->getExtension("native_profiler");
        $__internal_fa7588813bcd41bbb02b395c07f940c278c6c82c249c2f9efcc3589082898092->enter($__internal_fa7588813bcd41bbb02b395c07f940c278c6c82c249c2f9efcc3589082898092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
    <h1>Porozmawiaj z ludźmi na forum</h1>

    <table class=\"pure-table\">
        <tr>
            <th>Temat</th>
            <th>Napisz na forum</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
    
";
        
        $__internal_fa7588813bcd41bbb02b395c07f940c278c6c82c249c2f9efcc3589082898092->leave($__internal_fa7588813bcd41bbb02b395c07f940c278c6c82c249c2f9efcc3589082898092_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:History:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
/*         <tr>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>*/
/*     </table>*/
/*     */
/* {% endblock %}*/
/* */
/* */
