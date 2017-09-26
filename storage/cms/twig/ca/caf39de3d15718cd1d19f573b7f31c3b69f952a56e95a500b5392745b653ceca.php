<?php

/* /var/www/october/plugins/rainlab/forum/components/partials/timestamp.htm */
class __TwigTemplate_866fee1b42fbca5c4d5e8e1a45970ad3edd15ea6824de26d9e7a7ea4187a5e2b extends Twig_Template
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
        echo "<time title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["date"] ?? null), "toDayDateTimeString", array()), "html", null, true);
        echo "\"
    datetime=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "c"), "html", null, true);
        echo "\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["date"] ?? null), "diffForHumans", array()), "html", null, true);
        echo "
</time>
";
    }

    public function getTemplateName()
    {
        return "/var/www/october/plugins/rainlab/forum/components/partials/timestamp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<time title=\"{{ date.toDayDateTimeString }}\"
    datetime=\"{{ date|date('c') }}\">
    {{ date.diffForHumans }}
</time>
", "/var/www/october/plugins/rainlab/forum/components/partials/timestamp.htm", "");
    }
}
