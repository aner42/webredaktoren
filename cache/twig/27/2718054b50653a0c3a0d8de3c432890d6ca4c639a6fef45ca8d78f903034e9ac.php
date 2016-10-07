<?php

/* partials/footer.html.twig */
class __TwigTemplate_e4a2513245e04db6ec1aa6288e51b511da7f12b8bfe822fd991a164ad8a3a78b extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <h1 class=\"footer-logo\">
                    <img src=\"";
        // line 6
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/logo-blue.png");
        echo "\" alt=\"Footer Logo Blue\">
                </h1>
                <p>© Boxify 2015 - <a href=\"http://tympanus.net/codrops/licensing/\">License</a> - Designed &amp; Developed by <a href=\"http://www.peterfinlan.com/\">Peter Finlan</a></p>
            </div>
            <div class=\"col-md-7\">
                <ul class=\"footer-nav\">
                    ";
        // line 12
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 13
        echo "                        ";
        // line 14
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 15
            echo "                               ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 16
                echo "                                ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 17
                echo "                                    <li class=\"";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\">
                                        <a href=\"#";
                // line 18
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                                    </li>
                                ";
            }
            // line 20
            echo "    
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            </ul>           
                        </div>
                    </div>
                </div>
            </footer>";
    }

    // line 13
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
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  70 => 22,  63 => 20,  55 => 18,  50 => 17,  47 => 16,  44 => 15,  39 => 14,  37 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }
}
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-5">*/
/*                 <h1 class="footer-logo">*/
/*                     <img src="{{ url('theme://img/logo-blue.png') }}" alt="Footer Logo Blue">*/
/*                 </h1>*/
/*                 <p>© Boxify 2015 - <a href="http://tympanus.net/codrops/licensing/">License</a> - Designed &amp; Developed by <a href="http://www.peterfinlan.com/">Peter Finlan</a></p>*/
/*             </div>*/
/*             <div class="col-md-7">*/
/*                 <ul class="footer-nav">*/
/*                     {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/*                         {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/*                             {% for module in page.collection() %}*/
/*                                {% if not module.header.hidemenu %}*/
/*                                 {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}*/
/*                                     <li class="{{ current_module }}">*/
/*                                         <a href="#{{ _self.pageLinkName(module.menu) }}">{{ module.menu }}</a>*/
/*                                     </li>*/
/*                                 {% endif %}    */
/*                             {% endfor %}*/
/*                             </ul>           */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
