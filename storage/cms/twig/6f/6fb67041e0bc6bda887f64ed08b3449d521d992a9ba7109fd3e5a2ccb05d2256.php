<?php

/* /var/www/october/plugins/rainlab/forum/components/topic/pagination.htm */
class __TwigTemplate_1e8ec315cd6b0e3c3b057ffdac8fcb438783cb71e5daab8ddf411540536d73c0 extends Twig_Template
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
        $context["paginationEnabled"] = ((($this->getAttribute(        // line 2
($context["posts"] ?? null), "currentPage", array()) > 1) || ($this->getAttribute(        // line 3
($context["posts"] ?? null), "lastPage", array()) > 1)) || ($this->getAttribute(        // line 4
($context["posts"] ?? null), "lastPage", array()) > $this->getAttribute(($context["posts"] ?? null), "currentPage", array())));
        // line 6
        echo "
<div class=\"row forum-pagination ";
        // line 7
        echo ((($context["paginationEnabled"] ?? null)) ? ("enabled") : ("disabled"));
        echo "\">
    <div class=\"col-md-8\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['records'] = ($context["posts"] ?? null)        ;
        echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::pagination-list")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "firstItem", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "lastItem", array()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "total", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/october/plugins/rainlab/forum/components/topic/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 10,  32 => 9,  27 => 7,  24 => 6,  22 => 4,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set paginationEnabled =
\tposts.currentPage > 1 or
\tposts.lastPage > 1 or
\tposts.lastPage > posts.currentPage
%}

<div class=\"row forum-pagination {{ paginationEnabled ? \"enabled\" : \"disabled\" }}\">
    <div class=\"col-md-8\">
        {% partial __SELF__ ~ \"::pagination-list\" records=posts %}
    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>{{ posts.firstItem }}-{{ posts.lastItem }} of {{ posts.total }}</p>
    </div>
</div>
", "/var/www/october/plugins/rainlab/forum/components/topic/pagination.htm", "");
    }
}
