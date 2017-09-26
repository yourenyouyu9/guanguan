<?php

/* /var/www/october/plugins/rainlab/forum/components/channels/default.htm */
class __TwigTemplate_3638f1b65640755e654878f6046581d4ea698f6e8a8bb0186474c4320bd7dc50 extends Twig_Template
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

    <table class=\"forum-table\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 5
            echo "
            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "title", array()), "html", null, true);
            echo "
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            ";
            // line 15
            if ($this->getAttribute($this->getAttribute($context["channel"], "relations", array()), "children", array())) {
                // line 16
                echo "
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["channel"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 18
                    echo "
                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator ";
                    // line 21
                    echo (($this->getAttribute($context["channel"], "hasNew", array())) ? ("has-new") : (""));
                    echo "\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "url", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "title", array()), "html", null, true);
                    echo "
                                </a>
                            </h5>
                            <p>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "description", array()), "html", null, true);
                    echo "</p>

                            ";
                    // line 31
                    if (twig_length_filter($this->env, $this->getAttribute($context["channel"], "children", array()))) {
                        // line 32
                        echo "                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["channel"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                            // line 36
                            echo "                                            <li>
                                                <a href=\"";
                            // line 37
                            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "url", array()), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "description", array()), "html", null, true);
                            echo "\">
                                                    ";
                            // line 38
                            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "title", array()), "html", null, true);
                            echo "
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                                    </ul>
                                </div>
                            ";
                    }
                    // line 45
                    echo "                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "count_topics", array()), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "count_posts", array()), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"activity-column\">
                            ";
                    // line 53
                    if ($this->getAttribute($context["channel"], "first_topic", array())) {
                        // line 54
                        echo "                                <p>
                                    <a href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["channel"], "first_topic", array()), "url", array()), "html", null, true);
                        echo "?page=last#post-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["channel"], "first_topic", array()), "last_post_id", array()), "html", null, true);
                        echo "\">
                                        ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["channel"], "first_topic", array()), "subject", array()), "html", null, true);
                        echo "
                                    </a>
                                    <small>
                                        ";
                        // line 59
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['date'] = $this->getAttribute($this->getAttribute($context["channel"], "first_topic", array()), "last_post_at", array())                        ;
                        echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 60
                        echo "                                    </small>
                                </p>
                            ";
                    }
                    // line 63
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
            ";
            } else {
                // line 68
                echo "                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            ";
            }
            // line 72
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/october/plugins/rainlab/forum/components/channels/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 74,  175 => 72,  169 => 68,  165 => 66,  157 => 63,  152 => 60,  147 => 59,  141 => 56,  135 => 55,  132 => 54,  130 => 53,  124 => 50,  118 => 47,  114 => 45,  109 => 42,  99 => 38,  93 => 37,  90 => 36,  86 => 35,  81 => 32,  79 => 31,  74 => 29,  68 => 26,  64 => 25,  57 => 21,  52 => 18,  48 => 17,  45 => 16,  43 => 15,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
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

    <table class=\"forum-table\">
        {% for channel in channels %}

            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    {{ channel.title }}
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            {% if channel.relations.children %}

                {% for channel in channel.children %}

                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator {{ channel.hasNew ? 'has-new' }}\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"{{ channel.url }}\">
                                    {{ channel.title }}
                                </a>
                            </h5>
                            <p>{{ channel.description }}</p>

                            {% if channel.children|length %}
                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        {% for channel in channel.children %}
                                            <li>
                                                <a href=\"{{ channel.url }}\" title=\"{{ channel.description }}\">
                                                    {{ channel.title }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% endif %}
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_topics }}</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_posts }}</p>
                        </td>
                        <td class=\"activity-column\">
                            {% if channel.first_topic %}
                                <p>
                                    <a href=\"{{ channel.first_topic.url }}?page=last#post-{{ channel.first_topic.last_post_id }}\">
                                        {{ channel.first_topic.subject }}
                                    </a>
                                    <small>
                                        {% partial __SELF__ ~ \"::timestamp\" date=channel.first_topic.last_post_at %}
                                    </small>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}

            {% else %}
                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            {% endif %}

        {% endfor %}
    </table>
</div>
", "/var/www/october/plugins/rainlab/forum/components/channels/default.htm", "");
    }
}
