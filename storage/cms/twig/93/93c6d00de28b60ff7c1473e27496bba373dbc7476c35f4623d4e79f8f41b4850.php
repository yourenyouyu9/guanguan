<?php

/* /var/www/october/themes/rainlab-vanilla/partials/blog/categories.htm */
class __TwigTemplate_104f0138e651a98aadde4da71ebb3386b705295c3ee5badc6f3089e212ed9caa extends Twig_Template
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
        $context["categories"] = $this->getAttribute(($context["blogCategories"] ?? null), "categories", array());
        // line 2
        $context["currentCategorySlug"] = $this->getAttribute(($context["blogCategories"] ?? null), "currentCategorySlug", array());
        // line 3
        echo "
<div class=\"list-group\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 7
            echo "        <a
            href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\"
            class=\"list-group-item ";
            // line 9
            echo ((($this->getAttribute($context["category"], "slug", array()) == ($context["currentCategorySlug"] ?? null))) ? ("active") : (""));
            echo "\"
            >";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
            ";
            // line 11
            if (($context["postCount"] ?? null)) {
                // line 12
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                echo "</span>
            ";
            }
            // line 14
            echo "        </a> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/october/themes/rainlab-vanilla/partials/blog/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  57 => 14,  51 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  34 => 7,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categories = blogCategories.categories %}
{% set currentCategorySlug = blogCategories.currentCategorySlug %}

<div class=\"list-group\">
    {% for category in categories %}
        {% set postCount = category.post_count %}
        <a
            href=\"{{ category.url }}\"
            class=\"list-group-item {{ category.slug == currentCategorySlug ? 'active' }}\"
            >{{ category.name }}
            {% if postCount %}
                <span class=\"badge\">{{ postCount }}</span>
            {% endif %}
        </a> 
    {% endfor %}
</div>", "/var/www/october/themes/rainlab-vanilla/partials/blog/categories.htm", "");
    }
}
