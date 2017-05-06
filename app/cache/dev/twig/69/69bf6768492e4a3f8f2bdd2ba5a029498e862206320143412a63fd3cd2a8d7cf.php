<?php

/* BiBundle:Blog:inc_item.html.twig */
class __TwigTemplate_d48b8b021df2bbbab8891bb9a7b94fda8fbbeb2d67c7fd2cec673689a61d833f extends Twig_Template
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
        $__internal_018780351ff4ca05cbe9c5e61a2d8aaaf61b79d1ad415d5737fc04abba77ce8d = $this->env->getExtension("native_profiler");
        $__internal_018780351ff4ca05cbe9c5e61a2d8aaaf61b79d1ad415d5737fc04abba77ce8d->enter($__internal_018780351ff4ca05cbe9c5e61a2d8aaaf61b79d1ad415d5737fc04abba77ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiBundle:Blog:inc_item.html.twig"));

        // line 1
        echo "<article class=\"blog\">
\t<header>
\t\t";
        // line 3
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getId", array(), "method") == $this->getAttribute($this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "getUser", array(), "method"), "getId", array(), "method"))) {
            // line 4
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_user_blog_edit", array("blog" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"pure-button\">Edytuj</a>
\t\t\t<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bi_user_blog_delete", array("item" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))), "html", null, true);
            echo "\" class=\"pure-button\" onclick=\"return confirm('Potwierdź usunięcie');\">&times;</a>
\t\t";
        }
        // line 7
        echo "\t\t<div class=\"date\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "d.m.Y"), "html", null, true);
        echo "</div>
\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
\t\t<br>
\t\t<div>
\t\t\t<p>";
        // line 11
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "body", array()), "html", null, true));
        echo "</p>
\t\t</div>
\t</header>
\t<br>
\t";
        // line 15
        if ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())) {
            // line 16
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
            echo " image not found\" class=\"large\" />
\t";
        }
        // line 18
        echo "
</article>";
        
        $__internal_018780351ff4ca05cbe9c5e61a2d8aaaf61b79d1ad415d5737fc04abba77ce8d->leave($__internal_018780351ff4ca05cbe9c5e61a2d8aaaf61b79d1ad415d5737fc04abba77ce8d_prof);

    }

    public function getTemplateName()
    {
        return "BiBundle:Blog:inc_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  58 => 16,  56 => 15,  49 => 11,  43 => 8,  38 => 7,  33 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <article class="blog">*/
/* 	<header>*/
/* 		{% if app.user.getId() == blog.getUser().getId() %}*/
/* 			<a href="{{ path('bi_user_blog_edit', {blog:blog.getId()}) }}" class="pure-button">Edytuj</a>*/
/* 			<a href="{{ path('bi_user_blog_delete', {item:blog.id}) }}" class="pure-button" onclick="return confirm('Potwierdź usunięcie');">&times;</a>*/
/* 		{% endif %}*/
/* 		<div class="date">{{ blog.created|date('d.m.Y') }}</div>*/
/* 		<h2>{{ blog.title }}</h2>*/
/* 		<br>*/
/* 		<div>*/
/* 			<p>{{ blog.body|nl2br }}</p>*/
/* 		</div>*/
/* 	</header>*/
/* 	<br>*/
/* 	{% if blog.image %}*/
/* 		<img src="{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large" />*/
/* 	{% endif %}*/
/* */
/* </article>*/
