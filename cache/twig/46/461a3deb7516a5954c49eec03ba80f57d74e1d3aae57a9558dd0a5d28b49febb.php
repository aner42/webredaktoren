<?php

/* modular/features.html.twig */
class __TwigTemplate_6cf21022fa79f931cd0beb28b4b7f72cd32e13cc10e269b0cb75f486ce436c33 extends Twig_Template
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
        echo "<section class=\"features-intro\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 nopadding features-intro-img\">
                <div class=\"features-bg\">
                    <div class=\"texture-overlay\"></div>
                    <div class=\"features-img wp1\">
                        <img src=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "logo", array()), array(), "array"), "url", array());
        echo "\" alt=\"Logo\">
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 nopadding\">
                <div class=\"features-slider\">
                    <ul class=\"slides\" id=\"featuresSlider\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slider", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 16
            echo "                            <li>
                                <h1>";
            // line 17
            echo $this->getAttribute($context["slide"], "title", array());
            echo "</h1>
                                <p>";
            // line 18
            echo $this->getAttribute($context["slide"], "content", array());
            echo "</p>
                                <p><a href=\"";
            // line 19
            echo $this->getAttribute($context["slide"], "link_url", array());
            echo "\" class=\"arrow-btn\">";
            echo $this->getAttribute($context["slide"], "link_text", array());
            echo " <i class=\"fa fa-long-arrow-right\"></i></a></p>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  53 => 19,  49 => 18,  45 => 17,  42 => 16,  38 => 15,  28 => 8,  19 => 1,);
    }
}
/* <section class="features-intro">*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-6 nopadding features-intro-img">*/
/*                 <div class="features-bg">*/
/*                     <div class="texture-overlay"></div>*/
/*                     <div class="features-img wp1">*/
/*                         <img src="{{ page.media[page.header.logo].url }}" alt="Logo">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 nopadding">*/
/*                 <div class="features-slider">*/
/*                     <ul class="slides" id="featuresSlider">*/
/*                         {% for slide in page.header.slider %}*/
/*                             <li>*/
/*                                 <h1>{{ slide.title }}</h1>*/
/*                                 <p>{{ slide.content }}</p>*/
/*                                 <p><a href="{{ slide.link_url }}" class="arrow-btn">{{ slide.link_text }} <i class="fa fa-long-arrow-right"></i></a></p>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* */
