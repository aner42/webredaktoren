<?php

/* modular/featureslist.html.twig */
class __TwigTemplate_95bb1a0ab98e916c562e3f8b3c527801c09860aa839acd2bdfd92aaa272291f0 extends Twig_Template
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
        echo "<section class=\"features-list\" id=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featureslist", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                    <div class=\"col-md-4 feature-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo " wp2 ";
            if ($this->getAttribute($context["item"], "delay", array())) {
                echo "delay-";
                echo $this->getAttribute($context["item"], "delay", array());
                echo "s";
            }
            echo "\">
                        <div class=\"feature-icon\">
                            <i class=\"fa fa-";
            // line 8
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h1>";
            // line 11
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h1>
                            <p>";
            // line 12
            echo $this->getAttribute($context["item"], "content", array());
            echo "</p>
                            <a href=\"";
            // line 13
            echo $this->getAttribute($context["item"], "link", array());
            echo "\" class=\"read-more-btn\">";
            echo $this->getAttribute($context["item"], "text", array());
            echo " <i class=\"fa fa-chevron-circle-right\"></i></a>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/featureslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  68 => 13,  64 => 12,  60 => 11,  54 => 8,  42 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="features-list" id="features">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% for item in page.header.featureslist %}*/
/*                     <div class="col-md-4 feature-{{ loop.index }} wp2 {% if item.delay %}delay-{{ item.delay }}s{% endif %}">*/
/*                         <div class="feature-icon">*/
/*                             <i class="fa fa-{{ item.icon }}"></i>*/
/*                         </div>*/
/*                         <div class="feature-content">*/
/*                             <h1>{{ item.title }}</h1>*/
/*                             <p>{{ item.content }}</p>*/
/*                             <a href="{{ item.link }}" class="read-more-btn">{{ item.text }} <i class="fa fa-chevron-circle-right"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %} */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
