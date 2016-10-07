<?php

/* modular/downloads.html.twig */
class __TwigTemplate_560609e2b09ed9ee0512dc5953458f6c2118058650c49c1e7414aa5525f153b8 extends Twig_Template
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
        // line 1
        echo "<section class=\"download\" id=\"download\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center wp4\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <section class="download" id="download">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12 text-center wp4">*/
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
