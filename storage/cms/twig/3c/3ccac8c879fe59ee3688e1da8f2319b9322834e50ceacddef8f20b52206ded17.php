<?php

/* /var/www/october/themes/rainlab-vanilla/pages/blog/post.htm */
class __TwigTemplate_031a3ececf2983f0024165bd05fc3ccee5b5269fac9a9fa403d096beec4e29cb extends Twig_Template
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
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />
<h4>Comments</h4>
";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("forumEmbedTopic"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 8
            echo "    <p>Please <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
            echo "\">sign in</a> to comment!</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/october/themes/rainlab-vanilla/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  28 => 5,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}

<hr />
<h4>Comments</h4>
{% if user %}
    {% component 'forumEmbedTopic' %}
{% else %}
    <p>Please <a href=\"{{ 'account'|page }}\">sign in</a> to comment!</p>
{% endif %}", "/var/www/october/themes/rainlab-vanilla/pages/blog/post.htm", "");
    }
}
