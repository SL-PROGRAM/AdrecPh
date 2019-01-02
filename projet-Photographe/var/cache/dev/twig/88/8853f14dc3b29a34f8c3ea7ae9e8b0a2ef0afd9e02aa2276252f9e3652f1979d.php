<?php

/* /header/index.html.twig */
class __TwigTemplate_50d529916dc91b93176b3fa62acee26ef515efe4482d65c8ce7aabccbeddd89a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/header/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/header/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/header/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"bandeau\">
        <img src=\"asset/1.jpg\">

        <div class=\"menu\">
            <img class=\"photo\" src=\"asset/1.jpg\">

            <div class=\"aa\">
                <div class=\"titres\">
                    <p class=\"submenu\">PARTICULIER</p>
                    <p class=\"submenu\" >PROFESSIONEL</p>
                    <p class=\"submenu\" >GALERIES</p>
                    <p class=\"submenu\" >CONTACT</p>
                </div>

                <div class=\"titres\">
                    <div class=\"submenu\">
                        <a>Evenement</a>
                        <a>Workshop</a>
                        <a>Studio</a>
                        <a>Animaux</a>
                        <a>Charme</a>
                        <a>Lifestyle</a>
                    </div>

                    <div class=\"submenu\">
                        <a>Présentation d'entreprise</a>
                        <a>Présentation de produit</a>
                        <a>Photo d'immobilier</a>
                        <a>Couverture d'évenement</a>
                    </div>
                    <div class=\"submenu\">
                        <a>Croute</a>
                        <a>Bigre</a>
                        <a>Isseo</a>
                        <a>...</a>
                    </div>
                    <div class=\"submenu\">
                        <a>Contact</a>
                        <a>Livre d'Or</a>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"connexion\">
            <p>Bloc de connexion</p>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/header/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ controller_name }}!{% endblock %}

{% block body %}
    <div class=\"bandeau\">
        <img src=\"asset/1.jpg\">

        <div class=\"menu\">
            <img class=\"photo\" src=\"asset/1.jpg\">

            <div class=\"aa\">
                <div class=\"titres\">
                    <p class=\"submenu\">PARTICULIER</p>
                    <p class=\"submenu\" >PROFESSIONEL</p>
                    <p class=\"submenu\" >GALERIES</p>
                    <p class=\"submenu\" >CONTACT</p>
                </div>

                <div class=\"titres\">
                    <div class=\"submenu\">
                        <a>Evenement</a>
                        <a>Workshop</a>
                        <a>Studio</a>
                        <a>Animaux</a>
                        <a>Charme</a>
                        <a>Lifestyle</a>
                    </div>

                    <div class=\"submenu\">
                        <a>Présentation d'entreprise</a>
                        <a>Présentation de produit</a>
                        <a>Photo d'immobilier</a>
                        <a>Couverture d'évenement</a>
                    </div>
                    <div class=\"submenu\">
                        <a>Croute</a>
                        <a>Bigre</a>
                        <a>Isseo</a>
                        <a>...</a>
                    </div>
                    <div class=\"submenu\">
                        <a>Contact</a>
                        <a>Livre d'Or</a>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"connexion\">
            <p>Bloc de connexion</p>
        </div>

    </div>

{% endblock %}
", "/header/index.html.twig", "/media/julien/Stockage/php/AdrecPh/projet-Photographe/templates/header/index.html.twig");
    }
}
