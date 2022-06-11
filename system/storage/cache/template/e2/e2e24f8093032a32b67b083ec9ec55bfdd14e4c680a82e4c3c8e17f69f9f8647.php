<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Demo-Store/template/extension/module/webdigifycategory.twig */
class __TwigTemplate_5902a3773e227b21880fc81b532e8d60263d305c87fd7716ec687d6f50a1e79b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"box-category-top\">
\t<div class=\"box-heading\">";
        // line 2
        echo ($context["heading_subtitle"] ?? null);
        echo " <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></div>
    </div>
  <div class=\"box-content-category\">
<ul id=\"nav-one\" class=\"dropmenu box-category\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t<li class=\"top_level dropdown\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                echo "</a>
\t\t\t<div class=\"dropdown-menu megamenu column";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 9);
                echo "\">
            <div class=\"dropdown-inner\">
              ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 11), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 12
                    echo "\t\t\t\t<ul class=\"list-unstyled childs_1\">
                ";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 14
                        echo "\t\t\t\t\t<!-- 2 Level Sub Categories START -->
\t\t\t\t\t";
                        // line 15
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 15)) {
                            // line 16
                            echo "\t\t\t\t\t  <li class=\"dropdown\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 16);
                            echo "</a>
\t\t\t\t\t\t\t";
                            // line 17
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 17)) {
                                echo "<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 17);
                                echo "\"  alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 17);
                                echo "\" />";
                            }
                            // line 18
                            echo "\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t              <div class=\"dropdown-inner\">
\t\t\t              ";
                            // line 20
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 20), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 20)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 20), 1, "ceil"))));
                            foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                // line 21
                                echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t  ";
                                // line 22
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                    // line 23
                                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 23);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 23);
                                    echo "</a></li>
\t\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 25
                                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 27
                            echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t  </li>
\t\t\t\t\t";
                        } else {
                            // line 32
                            echo "\t\t\t\t\t  <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 32);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 32);
                            echo "</a></li>
\t\t\t\t\t";
                        }
                        // line 34
                        echo "\t\t\t\t\t<!-- 2 Level Sub Categories END -->
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "              
\t\t\t    </ul>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "            </div>
\t\t\t</div>

\t\t\t</li>
        ";
            } else {
                // line 44
                echo "\t\t\t<li class=\"top_level\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 44);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
                echo "</a></li>
        ";
            }
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t";
        if (($context["blog_enable"] ?? null)) {
            // line 48
            echo "       \t<li> <a href=\"";
            echo ($context["all_blogs"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo "</a></li>       
\t\t";
        }
        // line 50
        echo " </ul>
  </div>





";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/extension/module/webdigifycategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 50,  184 => 48,  181 => 47,  175 => 46,  167 => 44,  160 => 39,  152 => 36,  145 => 34,  137 => 32,  130 => 27,  123 => 25,  112 => 23,  108 => 22,  105 => 21,  101 => 20,  97 => 18,  89 => 17,  82 => 16,  80 => 15,  77 => 14,  73 => 13,  70 => 12,  66 => 11,  61 => 9,  54 => 8,  51 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/extension/module/webdigifycategory.twig", "");
    }
}
