<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_8b2821026e7a5defda13d9adef4365daa257cf863a114ebcff4bc069ba45ebb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2821026e7a5defda13d9adef4365daa257cf863a114ebcff4bc069ba45ebb0->enter($__internal_8b2821026e7a5defda13d9adef4365daa257cf863a114ebcff4bc069ba45ebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0a7f2ca8f47e01986370acae54fe22a7c06833b0eb925fef5227582d5457e091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7f2ca8f47e01986370acae54fe22a7c06833b0eb925fef5227582d5457e091->enter($__internal_0a7f2ca8f47e01986370acae54fe22a7c06833b0eb925fef5227582d5457e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8b2821026e7a5defda13d9adef4365daa257cf863a114ebcff4bc069ba45ebb0->leave($__internal_8b2821026e7a5defda13d9adef4365daa257cf863a114ebcff4bc069ba45ebb0_prof);

        
        $__internal_0a7f2ca8f47e01986370acae54fe22a7c06833b0eb925fef5227582d5457e091->leave($__internal_0a7f2ca8f47e01986370acae54fe22a7c06833b0eb925fef5227582d5457e091_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7ab6525b920949af1a03bb22b91507b921b6245308e1d378bd2c4dc6e9a2a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ab6525b920949af1a03bb22b91507b921b6245308e1d378bd2c4dc6e9a2a85->enter($__internal_c7ab6525b920949af1a03bb22b91507b921b6245308e1d378bd2c4dc6e9a2a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2d75a0f775dd8c8f164574b0417d0cf6174ada72d059f2099e68077d0f3ef37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d75a0f775dd8c8f164574b0417d0cf6174ada72d059f2099e68077d0f3ef37->enter($__internal_b2d75a0f775dd8c8f164574b0417d0cf6174ada72d059f2099e68077d0f3ef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b2d75a0f775dd8c8f164574b0417d0cf6174ada72d059f2099e68077d0f3ef37->leave($__internal_b2d75a0f775dd8c8f164574b0417d0cf6174ada72d059f2099e68077d0f3ef37_prof);

        
        $__internal_c7ab6525b920949af1a03bb22b91507b921b6245308e1d378bd2c4dc6e9a2a85->leave($__internal_c7ab6525b920949af1a03bb22b91507b921b6245308e1d378bd2c4dc6e9a2a85_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdc0601b03f4e22ce9d3c5bd215609cf77a91c6fe6d40f7399fcf3cae66af3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc0601b03f4e22ce9d3c5bd215609cf77a91c6fe6d40f7399fcf3cae66af3fe->enter($__internal_bdc0601b03f4e22ce9d3c5bd215609cf77a91c6fe6d40f7399fcf3cae66af3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea7bd0f4aef712d332eca80470956446dc6e8bab4d7679fc9a0c7837cfb4482e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7bd0f4aef712d332eca80470956446dc6e8bab4d7679fc9a0c7837cfb4482e->enter($__internal_ea7bd0f4aef712d332eca80470956446dc6e8bab4d7679fc9a0c7837cfb4482e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ea7bd0f4aef712d332eca80470956446dc6e8bab4d7679fc9a0c7837cfb4482e->leave($__internal_ea7bd0f4aef712d332eca80470956446dc6e8bab4d7679fc9a0c7837cfb4482e_prof);

        
        $__internal_bdc0601b03f4e22ce9d3c5bd215609cf77a91c6fe6d40f7399fcf3cae66af3fe->leave($__internal_bdc0601b03f4e22ce9d3c5bd215609cf77a91c6fe6d40f7399fcf3cae66af3fe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1509d2cddad23df569a6d8569c31697db806b370dd5edf0eb73418bb02a2e960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1509d2cddad23df569a6d8569c31697db806b370dd5edf0eb73418bb02a2e960->enter($__internal_1509d2cddad23df569a6d8569c31697db806b370dd5edf0eb73418bb02a2e960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9397874266d04c344d78c9d81f6f2318a9e914b517a61882e61013756961d16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9397874266d04c344d78c9d81f6f2318a9e914b517a61882e61013756961d16e->enter($__internal_9397874266d04c344d78c9d81f6f2318a9e914b517a61882e61013756961d16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9397874266d04c344d78c9d81f6f2318a9e914b517a61882e61013756961d16e->leave($__internal_9397874266d04c344d78c9d81f6f2318a9e914b517a61882e61013756961d16e_prof);

        
        $__internal_1509d2cddad23df569a6d8569c31697db806b370dd5edf0eb73418bb02a2e960->leave($__internal_1509d2cddad23df569a6d8569c31697db806b370dd5edf0eb73418bb02a2e960_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
