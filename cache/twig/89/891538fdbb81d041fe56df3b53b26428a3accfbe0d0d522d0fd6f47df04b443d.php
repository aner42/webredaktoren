<?php

/* modular/video.html.twig */
class __TwigTemplate_99eb75f551d223a3b1ba22f15a249b21e898bf9bba9485ece5537bb333d75def extends Twig_Template
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
        echo "<section class=\"video\" id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "videos", array())) {
            // line 6
            echo "                <h1>
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "videos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 8
                echo "                        <a href=\"";
                echo $this->getAttribute($context["video"], "url", array());
                echo "\" class=\"youtube-media\"><i class=\"fa fa-";
                echo $this->getAttribute($context["video"], "icon", array());
                echo "\"></i> ";
                echo $this->getAttribute($context["video"], "text", array());
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                </h1>
                ";
        }
        // line 12
        echo "                ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  47 => 10,  34 => 8,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="video" id="about">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12 text-center">*/
/*                 {% if page.header.videos %}*/
/*                 <h1>*/
/*                     {% for video in page.header.videos %}*/
/*                         <a href="{{ video.url }}" class="youtube-media"><i class="fa fa-{{ video.icon }}"></i> {{ video.text }}</a>*/
/*                     {% endfor %}*/
/*                 </h1>*/
/*                 {% endif %}*/
/*                 {{ page.content }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
