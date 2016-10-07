<?php

/* modular/screenshots.html.twig */
class __TwigTemplate_f0904a1569576259d723f2489a9c02729a3b94aeed771feec4369fc240e5eb0b extends Twig_Template
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
        echo "<section class=\"screenshots-intro\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>
<section class=\"screenshots\" id=\"screenshots\">
  <div class=\"container-fluid\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "screenshots", array()), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "      <div class=\"row\">
        <ul class=\"grid\">
          ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "            <li>
              <figure>
                <img src=\"";
                // line 18
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["item"], "description", array());
                echo "\">
                <figcaption>
                  <div class=\"caption-content\">
                    <a href=\"";
                // line 21
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "large_image", array()), array(), "array"), "url", array());
                echo "\" class=\"single_image\">
                      <i class=\"fa fa-";
                // line 22
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i><br>
                      <p>";
                // line 23
                echo $this->getAttribute($context["item"], "description", array());
                echo "</p>
                    </a>
                  </div>
                </figcaption>
              </figure>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </ul>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/screenshots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  80 => 30,  67 => 23,  63 => 22,  59 => 21,  51 => 18,  47 => 16,  43 => 15,  39 => 13,  35 => 12,  25 => 5,  19 => 1,);
    }
}
/* <section class="screenshots-intro">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* <section class="screenshots" id="screenshots">*/
/*   <div class="container-fluid">*/
/*     {% for row in page.header.screenshots|batch(4) %}*/
/*       <div class="row">*/
/*         <ul class="grid">*/
/*           {% for item in row %}*/
/*             <li>*/
/*               <figure>*/
/*                 <img src="{{ page.media[item.image].url }}" alt="{{ item.description }}">*/
/*                 <figcaption>*/
/*                   <div class="caption-content">*/
/*                     <a href="{{ page.media[item.large_image].url }}" class="single_image">*/
/*                       <i class="fa fa-{{ item.icon }}"></i><br>*/
/*                       <p>{{ item.description }}</p>*/
/*                     </a>*/
/*                   </div>*/
/*                 </figcaption>*/
/*               </figure>*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </section>*/
