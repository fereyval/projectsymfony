<?php

/* base.html.twig */
class __TwigTemplate_b2d7320a4d90e4780b210c974d50d495fd10cd929d182affdf7e90aafa4fc577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dc346fe348e154143eb2e9a88de9c08df4a2af7cb6099ad787582687ee246a6 = $this->env->getExtension("native_profiler");
        $__internal_0dc346fe348e154143eb2e9a88de9c08df4a2af7cb6099ad787582687ee246a6->enter($__internal_0dc346fe348e154143eb2e9a88de9c08df4a2af7cb6099ad787582687ee246a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0dc346fe348e154143eb2e9a88de9c08df4a2af7cb6099ad787582687ee246a6->leave($__internal_0dc346fe348e154143eb2e9a88de9c08df4a2af7cb6099ad787582687ee246a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_567fb24e10bced18ceedc67b78a25a18f9e313256ce36f959e1235cb6c843bf2 = $this->env->getExtension("native_profiler");
        $__internal_567fb24e10bced18ceedc67b78a25a18f9e313256ce36f959e1235cb6c843bf2->enter($__internal_567fb24e10bced18ceedc67b78a25a18f9e313256ce36f959e1235cb6c843bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_567fb24e10bced18ceedc67b78a25a18f9e313256ce36f959e1235cb6c843bf2->leave($__internal_567fb24e10bced18ceedc67b78a25a18f9e313256ce36f959e1235cb6c843bf2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58431b7bb7a0273242a43fdea0df74ade54bc0a463a6626093890b1b10fc9125 = $this->env->getExtension("native_profiler");
        $__internal_58431b7bb7a0273242a43fdea0df74ade54bc0a463a6626093890b1b10fc9125->enter($__internal_58431b7bb7a0273242a43fdea0df74ade54bc0a463a6626093890b1b10fc9125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58431b7bb7a0273242a43fdea0df74ade54bc0a463a6626093890b1b10fc9125->leave($__internal_58431b7bb7a0273242a43fdea0df74ade54bc0a463a6626093890b1b10fc9125_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb4be3928e4a79945b22924a2d38af88c34b00b963b659c99f1e3998005b708 = $this->env->getExtension("native_profiler");
        $__internal_3eb4be3928e4a79945b22924a2d38af88c34b00b963b659c99f1e3998005b708->enter($__internal_3eb4be3928e4a79945b22924a2d38af88c34b00b963b659c99f1e3998005b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3eb4be3928e4a79945b22924a2d38af88c34b00b963b659c99f1e3998005b708->leave($__internal_3eb4be3928e4a79945b22924a2d38af88c34b00b963b659c99f1e3998005b708_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ced6789b9d3ed07d57ae21b1d382400882d5b7c9d0526a7bedbe7c620d6f9317 = $this->env->getExtension("native_profiler");
        $__internal_ced6789b9d3ed07d57ae21b1d382400882d5b7c9d0526a7bedbe7c620d6f9317->enter($__internal_ced6789b9d3ed07d57ae21b1d382400882d5b7c9d0526a7bedbe7c620d6f9317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ced6789b9d3ed07d57ae21b1d382400882d5b7c9d0526a7bedbe7c620d6f9317->leave($__internal_ced6789b9d3ed07d57ae21b1d382400882d5b7c9d0526a7bedbe7c620d6f9317_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
