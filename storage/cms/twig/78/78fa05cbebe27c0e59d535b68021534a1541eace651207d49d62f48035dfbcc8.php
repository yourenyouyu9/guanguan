<?php

/* /var/www/october/plugins/rainlab/forum/components/channel/pagination.htm */
class __TwigTemplate_ed59979bde89e67cc3d22a80cb3398c0c9653ad68788e637eee251b15a732ba6 extends Twig_Template
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
($context["topics"] ?? null), "currentPage", array()) > 1) || ($this->getAttribute(        // line 3
($context["topics"] ?? null), "lastPage", array()) > 1)) || ($this->getAttribute(        // line 4
($context["topics"] ?? null), "lastPage", array()) > $this->getAttribute(($context["topics"] ?? null), "currentPage", array())));
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
        $context['__cms_partial_params']['records'] = ($context["topics"] ?? null)        ;
        echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::pagination-list")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["topics"] ?? null), "firstItem", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["topics"] ?? null), "lastItem", array()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["topics"] ?? null), "total", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/october/plugins/rainlab/forum/components/channel/pagination.htm";
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
\ttopics.currentPage > 1 or
\ttopics.lastPage > 1 or
\ttopics.lastPage > topics.currentPage
%}

<div class=\"row forum-pagination {{ paginationEnabled ? \"enabled\" : \"disabled\" }}\">
    <div class=\"col-md-8\">
        {% partial __SELF__ ~ \"::pagination-list\" records=topics %}
    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>{{ topics.firstItem }}-{{ topics.lastItem }} of {{ topics.total }}</p>
    </div>
</div>
", "/var/www/october/plugins/rainlab/forum/components/channel/pagination.htm", "");
    }
}
