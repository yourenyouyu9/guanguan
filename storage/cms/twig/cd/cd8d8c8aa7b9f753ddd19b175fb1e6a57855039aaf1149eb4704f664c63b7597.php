<?php

/* /var/www/october/plugins/rainlab/forum/components/topic/createform.htm */
class __TwigTemplate_112d80b1114ed2d2f4b3f336c7604f9f47cd4a921c9edd99368ed0c1010b3565 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onCreate")));
        echo "

    <div class=\"form-group\">
        <label for=\"topicSubject\" class=\"control-label\">Subject</label>
        <input
            id=\"topicSubject\"
            name=\"subject\"
            type=\"text\"
            class=\"form-control\"
            value=\"";
        // line 10
        echo post("subject");
        echo "\" />
    </div>

    <div class=\"form-group\">
        <label for=\"topicContent\" class=\"control-label\">Content</label>
        <textarea
            id=\"topicContent\"
            name=\"content\"
            rows=\"8\"
            type=\"text\"
            class=\"form-control\">";
        // line 20
        echo post("content");
        echo "</textarea>
        <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
    </div>

    <div class=\"form-group post-buttons\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post this topic</button>
        ";
        // line 26
        if (($context["returnUrl"] ?? null)) {
            // line 27
            echo "            <a class=\"btn btn-link btn-lg\" href=\"";
            echo twig_escape_filter($this->env, ($context["returnUrl"] ?? null), "html", null, true);
            echo "\">Cancel</a>
        ";
        }
        // line 29
        echo "    </div>

    <input type=\"hidden\" name=\"channel\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "id", array()), "html", null, true);
        echo "\" />

";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/var/www/october/plugins/rainlab/forum/components/topic/createform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  65 => 31,  61 => 29,  55 => 27,  53 => 26,  44 => 20,  31 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_open({ request: 'onCreate' }) }}

    <div class=\"form-group\">
        <label for=\"topicSubject\" class=\"control-label\">Subject</label>
        <input
            id=\"topicSubject\"
            name=\"subject\"
            type=\"text\"
            class=\"form-control\"
            value=\"{{ post('subject') }}\" />
    </div>

    <div class=\"form-group\">
        <label for=\"topicContent\" class=\"control-label\">Content</label>
        <textarea
            id=\"topicContent\"
            name=\"content\"
            rows=\"8\"
            type=\"text\"
            class=\"form-control\">{{ post('content') }}</textarea>
        <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
    </div>

    <div class=\"form-group post-buttons\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post this topic</button>
        {% if returnUrl %}
            <a class=\"btn btn-link btn-lg\" href=\"{{ returnUrl }}\">Cancel</a>
        {% endif %}
    </div>

    <input type=\"hidden\" name=\"channel\" value=\"{{ channel.id }}\" />

{{ form_close() }}", "/var/www/october/plugins/rainlab/forum/components/topic/createform.htm", "");
    }
}
