<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_3dc54488bbfa7a9813164d71085b352759ca82dddcf6728b845de026767e194a extends Twig_Template
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
        $__internal_ac1db6d75f3177e71f494c11f05f680bcfbf1b7d955db8c32e8619495949b86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1db6d75f3177e71f494c11f05f680bcfbf1b7d955db8c32e8619495949b86b->enter($__internal_ac1db6d75f3177e71f494c11f05f680bcfbf1b7d955db8c32e8619495949b86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_5a48ce45c36aa70bfd25c1a42a0b79e669c90cdd97fd3d736d08e1825e25b119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a48ce45c36aa70bfd25c1a42a0b79e669c90cdd97fd3d736d08e1825e25b119->enter($__internal_5a48ce45c36aa70bfd25c1a42a0b79e669c90cdd97fd3d736d08e1825e25b119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"login-container\">
        
        <div class=\"login-box animated fadeInDown\">
            <!-- <div class=\"login-logo\"></div> -->
            <h1 style=\"text-align: center;color: white;\">SCHOOLIUM</h1>
            <div class=\"login-body\">
                ";
        // line 9
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 15
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 17
        echo "                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_ac1db6d75f3177e71f494c11f05f680bcfbf1b7d955db8c32e8619495949b86b->leave($__internal_ac1db6d75f3177e71f494c11f05f680bcfbf1b7d955db8c32e8619495949b86b_prof);

        
        $__internal_5a48ce45c36aa70bfd25c1a42a0b79e669c90cdd97fd3d736d08e1825e25b119->leave($__internal_5a48ce45c36aa70bfd25c1a42a0b79e669c90cdd97fd3d736d08e1825e25b119_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
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
", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
