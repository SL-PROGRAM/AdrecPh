<?php

/* accueil/index.html.twig */
class __TwigTemplate_d0535667e25af6724c717f9775ba04c8397143889a1d7b7ad03de683dd018c03 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

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
        echo "    <div class=\"presentation-photographe\">
        <img id=\"BO-photo-presentation-accueil\" src=\"./asset/img/Fond-de-presentation.jpg\" alt = \"Photo du photographe\">
        <p class=\"text-presentation-photographe\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

    <div class=\"container\">
        <section class=\"section-presentation pro\">
            <div>
                <h1> ESPACE PROFESSIONNEL</h1>
                <h2 id=\"BO-text-presentation-pro\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
            </div>
            <div class=\"presentation-global\">
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-1-presentation-pro\" src=\"asset/img/Presentation.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-1-pro\">Présentation d'entreprise</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-2-presentation-pro\" src=\"asset/img/Produit.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-2-pro\">Présentation de produit</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-3-presentation-pro\" src=\"asset/img/Immobilier.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-3-pro\">Photo d'immobilier</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-4-presentation-pro\" src=\"asset/img/Evenement.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-4-pro\">Couverture d'évenement</P> </a>
                </div>
            </div>
            <div class=\"presentation-global\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">
            </div>
        </section>
        <section class=\"section-presentation particulier\">
            <div>
                <h1> ESPACE  PARTICULIER</h1>
                <h2 id=\"BO-text-presentation-particulier\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
            </div>
            <div class=\"presentation-global\">
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-1-presentation-particulier\" src=\"asset/img/Evenement.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-1-particulier\">Evenement</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-2-presentation-particulier\" src=\"asset/img/Workshop.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-2-particulier\">Workshop</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-3-presentation-particulier\" src=\"asset/img/Studio.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-3-particulier\">Studio</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-4-presentation-particulier\" src=\"asset/img/Animaux.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-4-particulier\">Animaux</P> </a>
                </div>

                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-5-presentation-particulier\" src=\"asset/img/Presentation.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-5-particulier\">Charme</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-6-presentation-particulier\" src=\"asset/img/Lifestyle.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-6-particulier\">Lifestyle</P> </a>
                </div>
            </div>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
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
    <div class=\"presentation-photographe\">
        <img id=\"BO-photo-presentation-accueil\" src=\"./asset/img/Fond-de-presentation.jpg\" alt = \"Photo du photographe\">
        <p class=\"text-presentation-photographe\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

    <div class=\"container\">
        <section class=\"section-presentation pro\">
            <div>
                <h1> ESPACE PROFESSIONNEL</h1>
                <h2 id=\"BO-text-presentation-pro\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
            </div>
            <div class=\"presentation-global\">
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-1-presentation-pro\" src=\"asset/img/Presentation.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-1-pro\">Présentation d'entreprise</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-2-presentation-pro\" src=\"asset/img/Produit.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-2-pro\">Présentation de produit</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-3-presentation-pro\" src=\"asset/img/Immobilier.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-3-pro\">Photo d'immobilier</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-4-presentation-pro\" src=\"asset/img/Evenement.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-4-pro\">Couverture d'évenement</P> </a>
                </div>
            </div>
            <div class=\"presentation-global\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">

                <img class=\"logo-client\" src=\"asset/img/Presentation.jpg\">
            </div>
        </section>
        <section class=\"section-presentation particulier\">
            <div>
                <h1> ESPACE  PARTICULIER</h1>
                <h2 id=\"BO-text-presentation-particulier\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
            </div>
            <div class=\"presentation-global\">
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-1-presentation-particulier\" src=\"asset/img/Evenement.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-1-particulier\">Evenement</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-2-presentation-particulier\" src=\"asset/img/Workshop.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-2-particulier\">Workshop</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-3-presentation-particulier\" src=\"asset/img/Studio.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-3-particulier\">Studio</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-4-presentation-particulier\" src=\"asset/img/Animaux.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-4-particulier\">Animaux</P> </a>
                </div>

                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-5-presentation-particulier\" src=\"asset/img/Presentation.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-5-particulier\">Charme</P> </a>
                </div>
                <div class=\"presentation\">
                    <a src=\"#\"><img class=\"photo-presentation\" id=\"BO-photo-6-presentation-particulier\" src=\"asset/img/Lifestyle.jpg\">
                        <P class=\"text-presentation\" id=\"BO-titre-photo-6-particulier\">Lifestyle</P> </a>
                </div>
            </div>
        </section>
    </div>
{% endblock %}
", "accueil/index.html.twig", "/media/julien/Stockage/php/AdrecPh/projet-Photographe/templates/accueil/index.html.twig");
    }
}
