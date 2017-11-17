<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_ac26fc5e2846610e6a289929afc419f1709e44c7d7aac5a659affb440310a43c extends Twig_Template
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
        $__internal_a8c562223fcedc28233a2333eedf66834497a9cc4b9cb4cdc644189260156870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c562223fcedc28233a2333eedf66834497a9cc4b9cb4cdc644189260156870->enter($__internal_a8c562223fcedc28233a2333eedf66834497a9cc4b9cb4cdc644189260156870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_5fdd5e20818c407491185dd73ce8c4fe6144c4ae2a034be749c27f58a264bc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdd5e20818c407491185dd73ce8c4fe6144c4ae2a034be749c27f58a264bc56->enter($__internal_5fdd5e20818c407491185dd73ce8c4fe6144c4ae2a034be749c27f58a264bc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
<div class=\"login-container\">
        
        <div class=\"login-box animated fadeInDown\">
            <!-- <div class=\"login-logo\"></div> -->
            <h1 style=\"text-align: center;color: white;\">SCHOOLIUM</h1>
            <div class=\"login-body\">
                ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 12
        echo "                <div class=\"login-title\"><strong>Bienvenue</strong>,</div>
                <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" class=\"form-horizontal\" method=\"post\">
                    ";
        // line 14
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 15
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 17
        echo "                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                        
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-md-6\">
                        <a href=\"#\" class=\"btn btn-link btn-block\">Mot de passe oublié ?</a>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"btn btn-info btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </div>
                </form>
            </div>
            <div class=\"login-footer\">
                <div class=\"pull-left\">
                    &copy; 2017 Schoolium
                </div>
                <div class=\"pull-right\">
                    <a href=\"#\">About</a> |
                    <a href=\"#\">Privacy</a> |
                    <a href=\"#\">Contact Us</a>
                </div>
            </div>
        </div>
</div>
";
        
        $__internal_a8c562223fcedc28233a2333eedf66834497a9cc4b9cb4cdc644189260156870->leave($__internal_a8c562223fcedc28233a2333eedf66834497a9cc4b9cb4cdc644189260156870_prof);

        
        $__internal_5fdd5e20818c407491185dd73ce8c4fe6144c4ae2a034be749c27f58a264bc56->leave($__internal_5fdd5e20818c407491185dd73ce8c4fe6144c4ae2a034be749c27f58a264bc56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  72 => 25,  61 => 19,  57 => 17,  51 => 15,  49 => 14,  45 => 13,  42 => 12,  36 => 10,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"login-container\">
        
        <div class=\"login-box animated fadeInDown\">
            <!-- <div class=\"login-logo\"></div> -->
            <h1 style=\"text-align: center;color: white;\">SCHOOLIUM</h1>
            <div class=\"login-body\">
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <div class=\"login-title\"><strong>Bienvenue</strong>,</div>
                <form action=\"{{ path(\"fos_user_security_check\") }}\" class=\"form-horizontal\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans }}\" />
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                        
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans }}\" />
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-md-6\">
                        <a href=\"#\" class=\"btn btn-link btn-block\">Mot de passe oublié ?</a>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"btn btn-info btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                    </div>
                </div>
                </form>
            </div>
            <div class=\"login-footer\">
                <div class=\"pull-left\">
                    &copy; 2017 Schoolium
                </div>
                <div class=\"pull-right\">
                    <a href=\"#\">About</a> |
                    <a href=\"#\">Privacy</a> |
                    <a href=\"#\">Contact Us</a>
                </div>
            </div>
        </div>
</div>
", "FOSUserBundle:Security:login_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
