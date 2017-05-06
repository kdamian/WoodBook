<?php

/* BiBundle:User:login.html.twig */
class __TwigTemplate_1c14f57735ced8eb52f3512695bde70c38357dcc303de5268c8c4b0f4448ea11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "BiBundle:User:login.html.twig", 1);
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
        $__internal_0fb2d200de102cb4288eb66c2fc6c8c7b3ffcabc3635ca57ad9dbd6bdee18b5b = $this->env->getExtension("native_profiler");
        $__internal_0fb2d200de102cb4288eb66c2fc6c8c7b3ffcabc3635ca57ad9dbd6bdee18b5b->enter($__internal_0fb2d200de102cb4288eb66c2fc6c8c7b3ffcabc3635ca57ad9dbd6bdee18b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb2d200de102cb4288eb66c2fc6c8c7b3ffcabc3635ca57ad9dbd6bdee18b5b->leave($__internal_0fb2d200de102cb4288eb66c2fc6c8c7b3ffcabc3635ca57ad9dbd6bdee18b5b_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_c38bb92cc68990c8034f3532a4b78eb0205b8156a378cbc7283a824b792b7add = $this->env->getExtension("native_profiler");
        $__internal_c38bb92cc68990c8034f3532a4b78eb0205b8156a378cbc7283a824b792b7add->enter($__internal_c38bb92cc68990c8034f3532a4b78eb0205b8156a378cbc7283a824b792b7add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "

    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("bi_login_check");
        echo "\" method=\"post\" class=\"pure-form\">
        <table>
            <tr>
                ";
        // line 18
        echo "                <td>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" placeholder=\"Login\"/>
                </td>
            </tr>
            <tr>
                ";
        // line 26
        echo "                <td>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Hasło\"/>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <button type=\"submit\" class=\"pure-button pure-button-primary\">Zaloguj się</button>
                </td>
            </tr>
        </table>
        
        <br>
        <br>
        
        Jeśli nie masz jeszcze konta:
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("bi_user_register");
        echo "\" class=\"pure-button\">Zarejestruj się</a>
        
    </form>



";
        
        $__internal_c38bb92cc68990c8034f3532a4b78eb0205b8156a378cbc7283a824b792b7add->leave($__internal_c38bb92cc68990c8034f3532a4b78eb0205b8156a378cbc7283a824b792b7add_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 42,  71 => 26,  64 => 18,  58 => 12,  54 => 10,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     {#{ form(form, {attr : {class:'pure-form', action: path('login_check')}}) }#}*/
/* */
/* */
/*     <form action="{{ path('bi_login_check') }}" method="post" class="pure-form">*/
/*         <table>*/
/*             <tr>*/
/*                 {#<td>*/
/*                     <label for="username">Login:</label>*/
/*                 </td>#}*/
/*                 <td>*/
/*                     <input type="text" id="username" name="_username" value="" placeholder="Login"/>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 {#<td>*/
/*                     <label for="password">Hasło:</label>*/
/*                 </td>#}*/
/*                 <td>*/
/*                     <input type="password" id="password" name="_password" placeholder="Hasło"/>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <br>*/
/*                     <button type="submit" class="pure-button pure-button-primary">Zaloguj się</button>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*         */
/*         <br>*/
/*         <br>*/
/*         */
/*         Jeśli nie masz jeszcze konta:*/
/*         <a href="{{ path('bi_user_register') }}" class="pure-button">Zarejestruj się</a>*/
/*         */
/*     </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
