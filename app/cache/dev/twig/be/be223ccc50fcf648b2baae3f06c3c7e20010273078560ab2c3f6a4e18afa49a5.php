<?php

/* ForumBundle:Forum:subject.html.twig */
class __TwigTemplate_fbbcb4622cbc494b636a5ba3bbcd42e0ac3c05b1f973020b85795606a0285485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiBundle::page.html.twig", "ForumBundle:Forum:subject.html.twig", 1);
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
        $__internal_b1f27f8bf7e4c46fc80dd618854b34eb155f6d2ad0b3b2e949567213c777e515 = $this->env->getExtension("native_profiler");
        $__internal_b1f27f8bf7e4c46fc80dd618854b34eb155f6d2ad0b3b2e949567213c777e515->enter($__internal_b1f27f8bf7e4c46fc80dd618854b34eb155f6d2ad0b3b2e949567213c777e515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:subject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f27f8bf7e4c46fc80dd618854b34eb155f6d2ad0b3b2e949567213c777e515->leave($__internal_b1f27f8bf7e4c46fc80dd618854b34eb155f6d2ad0b3b2e949567213c777e515_prof);

    }

    // line 3
    public function block_ct($context, array $blocks = array())
    {
        $__internal_7889b8be8fbacc111d58d797415d680ba8cd1b9467ce3be21b076332f9de8161 = $this->env->getExtension("native_profiler");
        $__internal_7889b8be8fbacc111d58d797415d680ba8cd1b9467ce3be21b076332f9de8161->enter($__internal_7889b8be8fbacc111d58d797415d680ba8cd1b9467ce3be21b076332f9de8161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ct"));

        // line 4
        echo "
\tTemat<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), "subject", array()), "html", null, true);
        echo "</h2>
\t";
        // line 9
        echo "\t</br>

    <table class=\"pure-table pure-table-horizontal\">
        <thead>
            <tr>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), "user", array()), "username", array()), "html", null, true);
        echo "
\t\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, ((isset($context["upload_path"]) ? $context["upload_path"] : $this->getContext($context, "upload_path")) . $this->getAttribute($this->getAttribute((isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), "user", array()), "img", array())), "html", null, true);
        echo "\" class=\"forum-thumb\" />
\t\t\t\t</th>
                <th>";
        // line 17
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), "body", array()), "html", null, true));
        echo "</th>
\t\t\t\t<th></th>
            </tr>
        </thead>

        <tbody>
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 25
            if (($this->getAttribute((isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "subject", array()), "getId", array(), "method"))) {
                // line 26
                echo "
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "user", array()), "username", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
                // line 29
                if ($this->getAttribute($this->getAttribute($context["item"], "user", array()), "img", array())) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, ((isset($context["upload_path"]) ? $context["upload_path"] : $this->getContext($context, "upload_path")) . $this->getAttribute($this->getAttribute($context["item"], "user", array()), "img", array())), "html", null, true);
                    echo "\" class=\"forum-thumb\" />
\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>";
                // line 34
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "body", array()), "html", null, true));
                echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 36
                if (($this->getAttribute($this->getAttribute($context["item"], "getUser", array(), "method"), "id", array()) == (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_edit_answer", array("ansId" => $this->getAttribute($context["item"], "id", array()), "subId" => $this->getAttribute((isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), "id", array()))), "html", null, true);
                    echo "\" class=\"pure-button\">Edytuj</a>
\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_add_answer", array("subId" => $this->getAttribute((isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), "id", array()))), "html", null, true);
        echo "\" class=\"pure-button\">Dodaj post</a>

";
        
        $__internal_7889b8be8fbacc111d58d797415d680ba8cd1b9467ce3be21b076332f9de8161->leave($__internal_7889b8be8fbacc111d58d797415d680ba8cd1b9467ce3be21b076332f9de8161_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Forum:subject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  125 => 43,  118 => 41,  114 => 39,  108 => 37,  106 => 36,  101 => 34,  97 => 32,  91 => 30,  89 => 29,  85 => 28,  81 => 26,  79 => 25,  76 => 24,  72 => 23,  63 => 17,  58 => 15,  54 => 14,  47 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BiBundle::page.html.twig" %}*/
/* */
/* {% block ct %}*/
/* */
/* 	Temat<h2>{{ sub.subject }}</h2>*/
/* 	{#% for item in items %}*/
/* 	Temat<h2>{{ item.subject.getSubject() }}</h2>*/
/* 	{% endfor %#}*/
/* 	</br>*/
/* */
/*     <table class="pure-table pure-table-horizontal">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ sub.user.username }}*/
/* 					<img src="{{ upload_path ~ sub.user.img }}" class="forum-thumb" />*/
/* 				</th>*/
/*                 <th>{{ sub.body|nl2br }}</th>*/
/* 				<th></th>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/* 			{% for item in items %}*/
/* 				<tr>*/
/* 					{% if sub.id == item.subject.getId() %}*/
/* */
/* 						<td>*/
/* 							{{ item.user.username }}*/
/* 							{% if item.user.img %}*/
/* 								<img src="{{ upload_path ~ item.user.img }}" class="forum-thumb" />*/
/* 							{% endif %}*/
/* 						</td>*/
/* */
/* 						<td>{{ item.body|nl2br }}</td>*/
/* 						<td>*/
/* 							{% if item.getUser().id == user %}*/
/* 								<a href="{{ path('forum_edit_answer', {ansId:item.id, subId:sub.id}) }}" class="pure-button">Edytuj</a>*/
/* 							{% endif %}*/
/* 						</td>*/
/* 					{% endif %}*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* */
/* 	<a href="{{ path('forum_add_answer', {subId:sub.id})}}" class="pure-button">Dodaj post</a>*/
/* */
/* {% endblock %}*/
