<?php

/* /var/www/october/themes/rainlab-vanilla/pages/404.htm */
class __TwigTemplate_87f3c561262e3ed6a6e2b76b5a15aa0382771f450fc33063f07990c525b5b83c extends Twig_Template
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
        echo "<p>We're sorry, but the page you requested cannot be found.</p>";
    }

    public function getTemplateName()
    {
        return "/var/www/october/themes/rainlab-vanilla/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>We're sorry, but the page you requested cannot be found.</p>", "/var/www/october/themes/rainlab-vanilla/pages/404.htm", "");
    }
}
