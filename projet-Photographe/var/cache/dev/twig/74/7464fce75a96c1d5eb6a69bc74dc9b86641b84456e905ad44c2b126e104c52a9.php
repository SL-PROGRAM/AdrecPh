<?php

/* header/header.html */
class __TwigTemplate_806f76c287bbcb38ee5ddd01f3400cca395ed32b7bb96eb7bb18796460cc1aae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header/header.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header/header.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>

<header>
    <div class=\"bandeau\">
        <img class=\"logo\" src=\"asset/1.jpg\">

        <div class=\"menu\">
            <img class=\"logo\" src=\"asset/1.jpg\">

            <div class=\"aa\">
                <div class=\"titres\">
                    <p class=\"submenu\">PARTICULIER</p>
                    <p class=\"submenu\" >PROFESSIONEL</p>
                    <p class=\"submenu\" >GALERIES</p>
                    <p class=\"submenu\" >CONTACT</p>
                </div>

                <div class=\"titres\">
                    <div class=\"submenu\">
                        <a href=\"/particuliers\">Evenement</a>
                        <a href=\"/particuliers\">Workshop</a>
                        <a href=\"/particuliers\">Studio</a>
                        <a href=\"/particuliers\">Animaux</a>
                        <a href=\"/particuliers\">Charme</a>
                        <a href=\"/particuliers\">Lifestyle</a>
                    </div>

                    <div class=\"submenu\">
                        <a href=\"/professionels\">Présentation d'entreprise</a>
                        <a href=\"/professionels\">Présentation de produit</a>
                        <a href=\"/professionels\">Photo d'immobilier</a>
                        <a href=\"/professionels\">Couverture d'évenement</a>
                    </div>
                    <div class=\"submenu\">
                        <a>Croute</a>
                        <a>Bigre</a>
                        <a>Isseo</a>
                        <a>...</a>
                    </div>
                    <div class=\"submenu\">
                        <a href=\"/contact\">Contact</a>
                        <a href=\"/livreOr\">Livre d'Or</a>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"connexion\">
            <p>Bloc de connexion général</p>
        </div>

    </div>
</header>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header/header.html";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>

<header>
    <div class=\"bandeau\">
        <img class=\"logo\" src=\"asset/1.jpg\">

        <div class=\"menu\">
            <img class=\"logo\" src=\"asset/1.jpg\">

            <div class=\"aa\">
                <div class=\"titres\">
                    <p class=\"submenu\">PARTICULIER</p>
                    <p class=\"submenu\" >PROFESSIONEL</p>
                    <p class=\"submenu\" >GALERIES</p>
                    <p class=\"submenu\" >CONTACT</p>
                </div>

                <div class=\"titres\">
                    <div class=\"submenu\">
                        <a href=\"/particuliers\">Evenement</a>
                        <a href=\"/particuliers\">Workshop</a>
                        <a href=\"/particuliers\">Studio</a>
                        <a href=\"/particuliers\">Animaux</a>
                        <a href=\"/particuliers\">Charme</a>
                        <a href=\"/particuliers\">Lifestyle</a>
                    </div>

                    <div class=\"submenu\">
                        <a href=\"/professionels\">Présentation d'entreprise</a>
                        <a href=\"/professionels\">Présentation de produit</a>
                        <a href=\"/professionels\">Photo d'immobilier</a>
                        <a href=\"/professionels\">Couverture d'évenement</a>
                    </div>
                    <div class=\"submenu\">
                        <a>Croute</a>
                        <a>Bigre</a>
                        <a>Isseo</a>
                        <a>...</a>
                    </div>
                    <div class=\"submenu\">
                        <a href=\"/contact\">Contact</a>
                        <a href=\"/livreOr\">Livre d'Or</a>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"connexion\">
            <p>Bloc de connexion général</p>
        </div>

    </div>
</header>

</html>", "header/header.html", "/home/sl/Symfony/AdrecPh/projet-Photographe/templates/header/header.html");
    }
}
