<?php

/* partials/navigation.html.twig */
class __TwigTemplate_715a26cca299d4894f58c697d536863248f2ad924a1619d1083df2a33979529d extends Twig_Template
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
        echo "<div class=\"overlay overlay-boxify\">
    <nav>
        ";
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 4
        echo "        ";
        // line 5
        echo "            
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "         <ul>
          ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
            ";
                // line 9
                if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                    // line 10
                    echo "            ";
                    $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                    // line 11
                    echo "                <li class=\"";
                    echo (isset($context["current_module"]) ? $context["current_module"] : null);
                    echo "\">
                    <a href=\"#";
                    // line 12
                    echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                    echo "\"><i class=\"fa fa-link\"></i>";
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "</a>
                </li>
            ";
                }
                // line 14
                echo "    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </nav>
</div>";
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 4,  75 => 18,  68 => 16,  61 => 14,  53 => 12,  48 => 11,  45 => 10,  43 => 9,  37 => 8,  34 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="overlay overlay-boxify">*/
/*     <nav>*/
/*         {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/*         {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/*             */
/*         {% for row in page.collection()|batch(2) %}*/
/*          <ul>*/
/*           {% for module in row %} */
/*             {% if not module.header.hidemenu %}*/
/*             {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}*/
/*                 <li class="{{ current_module }}">*/
/*                     <a href="#{{ _self.pageLinkName(module.menu) }}"><i class="fa fa-link"></i>{{ module.menu }}</a>*/
/*                 </li>*/
/*             {% endif %}    */
/*         {% endfor %}*/
/*     </ul>*/
/*         {% endfor %}*/
/* */
/*     </nav>*/
/* </div>*/
