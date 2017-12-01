<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ebae816fd1156f5046be1c76889a36b567d9959762a8dd75a3ba623a17fd264f extends Twig_Template
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
        $__internal_9df64f660a831143667d28f8bde192a1c44901418f58536510fdfdd2a997cbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df64f660a831143667d28f8bde192a1c44901418f58536510fdfdd2a997cbe0->enter($__internal_9df64f660a831143667d28f8bde192a1c44901418f58536510fdfdd2a997cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_5be08fe255b27d41732edaba1fde7e8dfbc43641ed56fe28dde3e7ad261217a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be08fe255b27d41732edaba1fde7e8dfbc43641ed56fe28dde3e7ad261217a2->enter($__internal_5be08fe255b27d41732edaba1fde7e8dfbc43641ed56fe28dde3e7ad261217a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_9df64f660a831143667d28f8bde192a1c44901418f58536510fdfdd2a997cbe0->leave($__internal_9df64f660a831143667d28f8bde192a1c44901418f58536510fdfdd2a997cbe0_prof);

        
        $__internal_5be08fe255b27d41732edaba1fde7e8dfbc43641ed56fe28dde3e7ad261217a2->leave($__internal_5be08fe255b27d41732edaba1fde7e8dfbc43641ed56fe28dde3e7ad261217a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4a3f01169b46fb374e508536b2bcd34e7f81eda8796ebdfb3cbabe2f52f94ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a3f01169b46fb374e508536b2bcd34e7f81eda8796ebdfb3cbabe2f52f94ee->enter($__internal_e4a3f01169b46fb374e508536b2bcd34e7f81eda8796ebdfb3cbabe2f52f94ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc32f35555dd3c104edb1cc2886909c4803c86cab8d1b3a9895bbf76aa27519e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc32f35555dd3c104edb1cc2886909c4803c86cab8d1b3a9895bbf76aa27519e->enter($__internal_fc32f35555dd3c104edb1cc2886909c4803c86cab8d1b3a9895bbf76aa27519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc32f35555dd3c104edb1cc2886909c4803c86cab8d1b3a9895bbf76aa27519e->leave($__internal_fc32f35555dd3c104edb1cc2886909c4803c86cab8d1b3a9895bbf76aa27519e_prof);

        
        $__internal_e4a3f01169b46fb374e508536b2bcd34e7f81eda8796ebdfb3cbabe2f52f94ee->leave($__internal_e4a3f01169b46fb374e508536b2bcd34e7f81eda8796ebdfb3cbabe2f52f94ee_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f3874049919b9d14fb7f02c0f3e5361cb98129d271632338ba97beba84b2ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3874049919b9d14fb7f02c0f3e5361cb98129d271632338ba97beba84b2ff2->enter($__internal_1f3874049919b9d14fb7f02c0f3e5361cb98129d271632338ba97beba84b2ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72f4175446c8baa5aae17082807e88c670af5e05e7e57b27879de04ce2e2256e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f4175446c8baa5aae17082807e88c670af5e05e7e57b27879de04ce2e2256e->enter($__internal_72f4175446c8baa5aae17082807e88c670af5e05e7e57b27879de04ce2e2256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_72f4175446c8baa5aae17082807e88c670af5e05e7e57b27879de04ce2e2256e->leave($__internal_72f4175446c8baa5aae17082807e88c670af5e05e7e57b27879de04ce2e2256e_prof);

        
        $__internal_1f3874049919b9d14fb7f02c0f3e5361cb98129d271632338ba97beba84b2ff2->leave($__internal_1f3874049919b9d14fb7f02c0f3e5361cb98129d271632338ba97beba84b2ff2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4408060dbc1a1c726b16800ecec36716b0f3be69f22074a54e3de6a2f02c287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4408060dbc1a1c726b16800ecec36716b0f3be69f22074a54e3de6a2f02c287->enter($__internal_b4408060dbc1a1c726b16800ecec36716b0f3be69f22074a54e3de6a2f02c287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7228ef3013d49064012d50e10e0c31b9e89862e189bdf7fd49dc4a42afd4ffae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7228ef3013d49064012d50e10e0c31b9e89862e189bdf7fd49dc4a42afd4ffae->enter($__internal_7228ef3013d49064012d50e10e0c31b9e89862e189bdf7fd49dc4a42afd4ffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7228ef3013d49064012d50e10e0c31b9e89862e189bdf7fd49dc4a42afd4ffae->leave($__internal_7228ef3013d49064012d50e10e0c31b9e89862e189bdf7fd49dc4a42afd4ffae_prof);

        
        $__internal_b4408060dbc1a1c726b16800ecec36716b0f3be69f22074a54e3de6a2f02c287->leave($__internal_b4408060dbc1a1c726b16800ecec36716b0f3be69f22074a54e3de6a2f02c287_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
