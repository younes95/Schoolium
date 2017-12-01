<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_a9528d0ed4fdcbf4a5eeba618e6324d6d1b79d9c470b51d4285454a294d4c496 extends Twig_Template
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
        $__internal_82e000b8bc8231d27149b27b63b1c012e5434f67eb12c855b691b36a26ab2606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e000b8bc8231d27149b27b63b1c012e5434f67eb12c855b691b36a26ab2606->enter($__internal_82e000b8bc8231d27149b27b63b1c012e5434f67eb12c855b691b36a26ab2606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_9e0ee44fc9afb72f284e97a7de4d5bf7975634f35dc56e4accaba6494d89f6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0ee44fc9afb72f284e97a7de4d5bf7975634f35dc56e4accaba6494d89f6d3->enter($__internal_9e0ee44fc9afb72f284e97a7de4d5bf7975634f35dc56e4accaba6494d89f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_82e000b8bc8231d27149b27b63b1c012e5434f67eb12c855b691b36a26ab2606->leave($__internal_82e000b8bc8231d27149b27b63b1c012e5434f67eb12c855b691b36a26ab2606_prof);

        
        $__internal_9e0ee44fc9afb72f284e97a7de4d5bf7975634f35dc56e4accaba6494d89f6d3->leave($__internal_9e0ee44fc9afb72f284e97a7de4d5bf7975634f35dc56e4accaba6494d89f6d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
