<?php

/* ::body.html.twig */
class __TwigTemplate_e2c4d495f786a1a5ac9b92a75d5a005b30a94dca74a0e44523b4fe52d3dd3163 extends Twig_Template
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
        $__internal_451ab4ffab93307b5df1bc86553415e5ec8ae03d444f8478230382f5cc3fd7bc = $this->env->getExtension("native_profiler");
        $__internal_451ab4ffab93307b5df1bc86553415e5ec8ae03d444f8478230382f5cc3fd7bc->enter($__internal_451ab4ffab93307b5df1bc86553415e5ec8ae03d444f8478230382f5cc3fd7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::body.html.twig"));

        // line 1
        echo "<div class=\"background2\">
    <div class=\"container center\">
        <form action=\" ";
        // line 3
        echo $this->env->getExtension('routing')->getPath("envoi_reussi");
        echo "\" method=\"post\" class=\"blogger\">
    \t<div class=\"row home_how2\">
        \t<div class=\"col-sm-4 txtcenter\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/punchline.png"), "html", null, true);
        echo "\" alt=\"punchline\"></div>
            <div class=\"col-sm-4 txtcenter\" >
                
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Evenement", array()), 'row');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Budget", array()), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Mail", array()), 'row');
        echo "
                
        \t</div>
            <div class=\"col-sm-4 txtcenter\">
               
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Convives", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Date", array()), 'row');
        echo "

                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Thematique", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Demander", array()), 'row');
        echo "
                
            </div>
        </div>
        </form>
    </div>
</div>

<div class=\"container center\">
    <h1 class=\"maintitle\">Degust&Co : comment ça marche ?</h1>
    <div class=\"row home_how\">
        <div class=\"col-sm-4 txtcenter\">
            <img class=\"home_how_icon\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/loupe.png"), "html", null, true);
        echo "\" alt=\"Trouvez\">
            <h4 class=\"c_5e5f5f\">Trouvez</h4>
            <p class=\"text-center\">Selon votre ville, la thématique ou la date de votre choix, seul ou en groupe, vous trouverez alors tous les événements et les formules de groupe proposés par nos partenaires.</p>
        </div>
        <div class=\"col-sm-4 txtcenter\">
            <img class=\"home_how_icon\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/calendar.png"), "html", null, true);
        echo "\" alt=\"Réservez\">
            <h4 class=\"c_5e5f5f\">Réservez</h4>
            <p class=\"text-center\">Votre sélection faite, vous réservez une expérience gustative en un simple clic. Indiquez le nombre de convives souhaités, vos coordonnées et payez en ligne en toute sécurité !</p>
        </div>
        <div class=\"col-sm-4 txtcenter\">
            <img class=\"home_how_icon2\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/verre.png"), "html", null, true);
        echo "\" alt=\"Profitez\">
            <h4 class=\"c_5e5f5f\">Profitez</h4>
            <p class=\"text-center\">Notre animateur partenaire vous fera alors découvrir son univers rien que pour le plaisir de vos papilles ! Chez vous ou à l’extérieur, vivez une expérience originale et unique.</p>
        </div>
    </div>
</div>

<div class=\"fullscreen background parallax\" style=\"background-image:url('";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/parallax.jpg"), "html", null, true);
        echo "');\" data-img-width=\"1600\" data-img-height=\"1064\" data-diff=\"100\"></div>

<div style=\"background:#FFF\">
    <div class=\"container center texte ptl\">
        <ul class=\"bxslider\">
            <li class =\"liste\">\" Très bon projet, site nickel, offre intéressante ! J'adore ! \" <br><br><b>David</b></li>
            <li class =\"liste\">\" Je vous félicite pour ce projet. Je trouve l’idée géniale et surtout très utile<br> pour organiser des événement à thèmes ! \" <br><br><b>Mouna</b></li>
            <li class =\"liste\">\" Votre site est clair et agréable à consulter. \" <br><br><b>Eric</b></li>
        </ul>
    </div>
</div>
";
        
        $__internal_451ab4ffab93307b5df1bc86553415e5ec8ae03d444f8478230382f5cc3fd7bc->leave($__internal_451ab4ffab93307b5df1bc86553415e5ec8ae03d444f8478230382f5cc3fd7bc_prof);

    }

    public function getTemplateName()
    {
        return "::body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  101 => 42,  93 => 37,  85 => 32,  70 => 20,  66 => 19,  61 => 17,  57 => 16,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <div class="background2">*/
/*     <div class="container center">*/
/*         <form action=" {{ path('envoi_reussi') }}" method="post" class="blogger">*/
/*     	<div class="row home_how2">*/
/*         	<div class="col-sm-4 txtcenter"><img src="{{ asset('img/punchline.png') }}" alt="punchline"></div>*/
/*             <div class="col-sm-4 txtcenter" >*/
/*                 */
/*                 {{ form_row(form.Evenement) }}*/
/*                 {{ form_row(form.Budget) }}*/
/*                 {{ form_row(form.Nom) }}*/
/*                 {{ form_row(form.Mail) }}*/
/*                 */
/*         	</div>*/
/*             <div class="col-sm-4 txtcenter">*/
/*                */
/*                 {{ form_row(form.Convives) }}*/
/*                 {{ form_row(form.Date) }}*/
/* */
/*                 {{ form_row(form.Thematique) }}*/
/*                 {{ form_row(form.Demander) }}*/
/*                 */
/*             </div>*/
/*         </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container center">*/
/*     <h1 class="maintitle">Degust&Co : comment ça marche ?</h1>*/
/*     <div class="row home_how">*/
/*         <div class="col-sm-4 txtcenter">*/
/*             <img class="home_how_icon" src="{{ asset('img/loupe.png') }}" alt="Trouvez">*/
/*             <h4 class="c_5e5f5f">Trouvez</h4>*/
/*             <p class="text-center">Selon votre ville, la thématique ou la date de votre choix, seul ou en groupe, vous trouverez alors tous les événements et les formules de groupe proposés par nos partenaires.</p>*/
/*         </div>*/
/*         <div class="col-sm-4 txtcenter">*/
/*             <img class="home_how_icon" src="{{ asset('img/calendar.png') }}" alt="Réservez">*/
/*             <h4 class="c_5e5f5f">Réservez</h4>*/
/*             <p class="text-center">Votre sélection faite, vous réservez une expérience gustative en un simple clic. Indiquez le nombre de convives souhaités, vos coordonnées et payez en ligne en toute sécurité !</p>*/
/*         </div>*/
/*         <div class="col-sm-4 txtcenter">*/
/*             <img class="home_how_icon2" src="{{ asset('img/verre.png') }}" alt="Profitez">*/
/*             <h4 class="c_5e5f5f">Profitez</h4>*/
/*             <p class="text-center">Notre animateur partenaire vous fera alors découvrir son univers rien que pour le plaisir de vos papilles ! Chez vous ou à l’extérieur, vivez une expérience originale et unique.</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="fullscreen background parallax" style="background-image:url('{{ asset ('img/parallax.jpg') }}');" data-img-width="1600" data-img-height="1064" data-diff="100"></div>*/
/* */
/* <div style="background:#FFF">*/
/*     <div class="container center texte ptl">*/
/*         <ul class="bxslider">*/
/*             <li class ="liste">" Très bon projet, site nickel, offre intéressante ! J'adore ! " <br><br><b>David</b></li>*/
/*             <li class ="liste">" Je vous félicite pour ce projet. Je trouve l’idée géniale et surtout très utile<br> pour organiser des événement à thèmes ! " <br><br><b>Mouna</b></li>*/
/*             <li class ="liste">" Votre site est clair et agréable à consulter. " <br><br><b>Eric</b></li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
