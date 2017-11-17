<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8d4ae943fc4efa4e2fe343de40e038fca2f185ed8230bedf1673dde4ed86d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d4ae943fc4efa4e2fe343de40e038fca2f185ed8230bedf1673dde4ed86d40->enter($__internal_c8d4ae943fc4efa4e2fe343de40e038fca2f185ed8230bedf1673dde4ed86d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_76b8fc62c5aacf66adbb356d93cad20417ce4492f7fde7b1cada4388dbc73e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b8fc62c5aacf66adbb356d93cad20417ce4492f7fde7b1cada4388dbc73e20->enter($__internal_76b8fc62c5aacf66adbb356d93cad20417ce4492f7fde7b1cada4388dbc73e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c8d4ae943fc4efa4e2fe343de40e038fca2f185ed8230bedf1673dde4ed86d40->leave($__internal_c8d4ae943fc4efa4e2fe343de40e038fca2f185ed8230bedf1673dde4ed86d40_prof);

        
        $__internal_76b8fc62c5aacf66adbb356d93cad20417ce4492f7fde7b1cada4388dbc73e20->leave($__internal_76b8fc62c5aacf66adbb356d93cad20417ce4492f7fde7b1cada4388dbc73e20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c399ce787cc5f344afdeeb706b67009f0bfb6ed96d1542b05920a522634b85c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c399ce787cc5f344afdeeb706b67009f0bfb6ed96d1542b05920a522634b85c6->enter($__internal_c399ce787cc5f344afdeeb706b67009f0bfb6ed96d1542b05920a522634b85c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8b51096343f42eb06fa093408056731d8318dbb83c5608f6624534b2a58edf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b51096343f42eb06fa093408056731d8318dbb83c5608f6624534b2a58edf1->enter($__internal_b8b51096343f42eb06fa093408056731d8318dbb83c5608f6624534b2a58edf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8b51096343f42eb06fa093408056731d8318dbb83c5608f6624534b2a58edf1->leave($__internal_b8b51096343f42eb06fa093408056731d8318dbb83c5608f6624534b2a58edf1_prof);

        
        $__internal_c399ce787cc5f344afdeeb706b67009f0bfb6ed96d1542b05920a522634b85c6->leave($__internal_c399ce787cc5f344afdeeb706b67009f0bfb6ed96d1542b05920a522634b85c6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_15a3970241f9ec82286a18bc57d071e1b7dc53c107ebca7e97251c01c783056f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a3970241f9ec82286a18bc57d071e1b7dc53c107ebca7e97251c01c783056f->enter($__internal_15a3970241f9ec82286a18bc57d071e1b7dc53c107ebca7e97251c01c783056f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5340c090d33771bb68931a92e2d057e86e5e26f6233536b0915f9908762f4074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5340c090d33771bb68931a92e2d057e86e5e26f6233536b0915f9908762f4074->enter($__internal_5340c090d33771bb68931a92e2d057e86e5e26f6233536b0915f9908762f4074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5340c090d33771bb68931a92e2d057e86e5e26f6233536b0915f9908762f4074->leave($__internal_5340c090d33771bb68931a92e2d057e86e5e26f6233536b0915f9908762f4074_prof);

        
        $__internal_15a3970241f9ec82286a18bc57d071e1b7dc53c107ebca7e97251c01c783056f->leave($__internal_15a3970241f9ec82286a18bc57d071e1b7dc53c107ebca7e97251c01c783056f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff741f0a2482443090475adbf311d1cc5ca46b2393671389523543b0e083096e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff741f0a2482443090475adbf311d1cc5ca46b2393671389523543b0e083096e->enter($__internal_ff741f0a2482443090475adbf311d1cc5ca46b2393671389523543b0e083096e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65bb6261a4f1c62a6c64904f60f0303be5e4bd2d0ca7f5263167f393fa964b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bb6261a4f1c62a6c64904f60f0303be5e4bd2d0ca7f5263167f393fa964b0c->enter($__internal_65bb6261a4f1c62a6c64904f60f0303be5e4bd2d0ca7f5263167f393fa964b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65bb6261a4f1c62a6c64904f60f0303be5e4bd2d0ca7f5263167f393fa964b0c->leave($__internal_65bb6261a4f1c62a6c64904f60f0303be5e4bd2d0ca7f5263167f393fa964b0c_prof);

        
        $__internal_ff741f0a2482443090475adbf311d1cc5ca46b2393671389523543b0e083096e->leave($__internal_ff741f0a2482443090475adbf311d1cc5ca46b2393671389523543b0e083096e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
