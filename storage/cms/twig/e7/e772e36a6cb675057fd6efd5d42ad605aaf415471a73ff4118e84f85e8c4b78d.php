<?php

/* /var/www/october/plugins/rainlab/forum/components/topic/default.htm */
class __TwigTemplate_1304d21f1bbee846728dc4a4036396864e8af179d7d38703cd90cd7b3b5fe274 extends Twig_Template
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
        echo "<div class=\"rainlab-forum\">

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 4
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                echo "\">
            ";
                // line 5
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 9
        echo "
    ";
        // line 10
        if (($context["returnUrl"] ?? null)) {
            // line 11
            echo "        <p>&larr; <a href=\"";
            echo twig_escape_filter($this->env, ($context["returnUrl"] ?? null), "html", null, true);
            echo "\">Back to ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "title", array()), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["topic"] ?? null)) {
            // line 15
            echo "
        <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["topic"] ?? null), "subject", array()), "html", null, true);
            echo "</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@controlpanel"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@posts"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
                ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@pagination"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
                <h4>Reply to this discussion</h4>
                ";
            // line 33
            if ( !$this->getAttribute(($context["topic"] ?? null), "canPost", array())) {
                // line 34
                echo "                    <p>
                        You cannot edit posts or make replies:
                        ";
                // line 36
                if ( !($context["member"] ?? null)) {
                    echo "You should be logged in before you can post.";
                }
                // line 37
                echo "                        ";
                if ($this->getAttribute(($context["member"] ?? null), "is_banned", array())) {
                    echo "Your account is banned.";
                }
                // line 38
                echo "                        ";
                if ($this->getAttribute(($context["topic"] ?? null), "is_locked", array())) {
                    echo "This topic is locked.";
                }
                // line 39
                echo "                    </p>
                ";
            } else {
                // line 41
                echo "                    ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction("@postform"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 42
                echo "                ";
            }
            // line 43
            echo "
            </div>
        </div>

    ";
        } elseif (        // line 47
($context["channel"] ?? null)) {
            // line 48
            echo "
        <h4>Create a new discussion topic</h4>
        ";
            // line 50
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@createform"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 51
            echo "
    ";
        } else {
            // line 53
            echo "
        <p>Topic not found</p>

    ";
        }
        // line 57
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/october/plugins/rainlab/forum/components/topic/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  147 => 53,  143 => 51,  139 => 50,  135 => 48,  133 => 47,  127 => 43,  124 => 42,  119 => 41,  115 => 39,  110 => 38,  105 => 37,  101 => 36,  97 => 34,  95 => 33,  91 => 31,  87 => 30,  84 => 29,  80 => 28,  73 => 23,  69 => 22,  60 => 16,  57 => 15,  55 => 14,  52 => 13,  44 => 11,  42 => 10,  39 => 9,  31 => 5,  26 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rainlab-forum\">

    {% flash %}
        <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
            {{ message }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    {% endflash %}

    {% if returnUrl %}
        <p>&larr; <a href=\"{{ returnUrl }}\">Back to {{ channel.title }}</a></p>
    {% endif %}

    {% if topic %}

        <h4>{{ topic.subject }}</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    {% partial \"@controlpanel\" %}
                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                {% partial \"@posts\" %}

                {% partial \"@pagination\" %}

                <h4>Reply to this discussion</h4>
                {% if not topic.canPost %}
                    <p>
                        You cannot edit posts or make replies:
                        {% if not member %}You should be logged in before you can post.{% endif %}
                        {% if member.is_banned %}Your account is banned.{% endif %}
                        {% if topic.is_locked %}This topic is locked.{% endif %}
                    </p>
                {% else %}
                    {% partial \"@postform\" %}
                {% endif %}

            </div>
        </div>

    {% elseif channel %}

        <h4>Create a new discussion topic</h4>
        {% partial \"@createform\" %}

    {% else %}

        <p>Topic not found</p>

    {% endif %}
</div>", "/var/www/october/plugins/rainlab/forum/components/topic/default.htm", "");
    }
}
