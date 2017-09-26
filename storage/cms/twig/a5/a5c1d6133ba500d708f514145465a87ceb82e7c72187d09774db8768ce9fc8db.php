<?php

/* /var/www/october/plugins/rainlab/forum/components/topic/post.htm */
class __TwigTemplate_73fc6f9c378adcbb6b4a03665099a938679ff4996fc5b7b9c941727eaa6ffc5d extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "member", array()), "url", array()), "html", null, true);
        echo "\" class=\"avatar\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["post"] ?? null), "member", array()), "user", array()), "avatarThumb", array(0 => 50), "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "member", array()), "username", array()), "html", null, true);
        echo "\" />
</a>
<div class=\"content\">
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "member", array()), "url", array()), "html", null, true);
        echo "\" class=\"author\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "member", array()), "username", array()), "html", null, true);
        echo "</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['date'] = $this->getAttribute(($context["post"] ?? null), "created_at", array())        ;
        echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            </a>
        </div>
        ";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "member", array()), "is_banned", array())) {
            // line 13
            echo "            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 16
($context["post"] ?? null), "member", array()), "is_moderator", array())) {
            // line 17
            echo "            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        ";
        }
        // line 21
        echo "    </div>

    ";
        // line 23
        if ((($context["mode"] ?? null) == "edit")) {
            // line 24
            echo "
        ";
            // line 25
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open"));
            echo "
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo "\" />

            ";
            // line 30
            if (($this->getAttribute($this->getAttribute(($context["topic"] ?? null), "first_post", array()), "id", array()) == $this->getAttribute(($context["post"] ?? null), "id", array()))) {
                // line 31
                echo "                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["topic"] ?? null), "subject", array()), "html", null, true);
                echo "\" />
            ";
            }
            // line 33
            echo "
            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "content", array()), "html", null, true);
            echo "</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo "\"
                    data-request-update=\"'";
            // line 46
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo "'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo ", mode: 'delete'\"
                    data-request-update=\"'";
            // line 55
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo "'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo ", mode: 'view'\"
                    data-request-update=\"'";
            // line 64
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo "'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        ";
            // line 69
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

    ";
        } elseif ((        // line 71
($context["mode"] ?? null) == "delete")) {
            // line 72
            echo "        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    ";
        } else {
            // line 76
            echo "        <div class=\"text\">
            ";
            // line 77
            echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
            echo "

            ";
            // line 79
            if (($this->getAttribute(($context["post"] ?? null), "created_at", array()) != $this->getAttribute(($context["post"] ?? null), "updated_at", array()))) {
                // line 80
                echo "                <p><small class=\"text text-muted\">
                    Last updated ";
                // line 81
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['date'] = $this->getAttribute(($context["post"] ?? null), "updated_at", array())                ;
                echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 82
                echo "                </small></p>
            ";
            }
            // line 84
            echo "        </div>
        <div class=\"actions\">
            ";
            // line 86
            if ($this->getAttribute(($context["topic"] ?? null), "canPost", array())) {
                // line 87
                echo "                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
                echo "\"
                    data-quote-button>
                    Quote
                </a>
            ";
            }
            // line 94
            echo "            ";
            if (((($this->getAttribute(($context["topic"] ?? null), "canPost", array()) && $this->getAttribute(($context["post"] ?? null), "canEdit", array())) && (($context["mode"] ?? null) != "edit")) && (($context["mode"] ?? null) != "delete"))) {
                // line 95
                echo "                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
                echo "\"
                    data-request-update=\"'";
                // line 99
                echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::post"), "html", null, true);
                echo "': '#post-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
                echo "'\">
                    Edit
                </a>
            ";
            }
            // line 103
            echo "        </div>
    ";
        }
        // line 105
        echo "
</div>
<div class=\"post-divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/october/plugins/rainlab/forum/components/topic/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 105,  244 => 103,  235 => 99,  231 => 98,  226 => 95,  223 => 94,  215 => 89,  211 => 87,  209 => 86,  205 => 84,  201 => 82,  196 => 81,  193 => 80,  191 => 79,  186 => 77,  183 => 76,  177 => 72,  175 => 71,  170 => 69,  160 => 64,  156 => 63,  152 => 62,  140 => 55,  136 => 54,  132 => 53,  120 => 46,  116 => 45,  112 => 44,  104 => 39,  96 => 33,  90 => 31,  88 => 30,  83 => 28,  77 => 25,  74 => 24,  72 => 23,  68 => 21,  62 => 17,  60 => 16,  55 => 13,  53 => 12,  49 => 10,  44 => 9,  40 => 8,  32 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ post.member.url }}\" class=\"avatar\">
    <img src=\"{{ post.member.user.avatarThumb(50) }}\" alt=\"{{ post.member.username }}\" />
</a>
<div class=\"content\">
    <a href=\"{{ post.member.url }}\" class=\"author\">{{ post.member.username }}</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-{{ post.id }}\">
                {% partial __SELF__ ~ \"::timestamp\" date=post.created_at %}
            </a>
        </div>
        {% if post.member.is_banned %}
            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        {% elseif post.member.is_moderator %}
            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        {% endif %}
    </div>

    {% if mode == 'edit' %}

        {{ form_open() }}
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"{{ post.id }}\" />

            {% if topic.first_post.id == post.id %}
                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"{{ topic.subject }}\" />
            {% endif %}

            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >{{ post.content }}</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'delete'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'view'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        {{ form_close() }}

    {% elseif mode == 'delete' %}
        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    {% else %}
        <div class=\"text\">
            {{ post.content_html|raw }}

            {% if post.created_at != post.updated_at %}
                <p><small class=\"text text-muted\">
                    Last updated {% partial __SELF__ ~ \"::timestamp\" date=post.updated_at %}
                </small></p>
            {% endif %}
        </div>
        <div class=\"actions\">
            {% if topic.canPost %}
                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-quote-button>
                    Quote
                </a>
            {% endif %}
            {% if topic.canPost and post.canEdit and mode != 'edit' and mode != 'delete' %}
                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ ~ '::post' }}': '#post-{{ post.id }}'\">
                    Edit
                </a>
            {% endif %}
        </div>
    {% endif %}

</div>
<div class=\"post-divider\"></div>
", "/var/www/october/plugins/rainlab/forum/components/topic/post.htm", "");
    }
}
