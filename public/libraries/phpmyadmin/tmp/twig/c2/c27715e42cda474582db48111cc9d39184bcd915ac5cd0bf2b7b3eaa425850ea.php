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

/* table/zoom_search/index.twig */
class __TwigTemplate_b92ede5ccd0445dd6494a76c2a21235c304f29ca54da181afcebcc1b58728710 extends Template
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
        echo "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 3
        echo PhpMyAdmin\Url::getFromRoute("/table/search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "pos" => 0]);
        echo "\">
      ";
        // line 4
        echo PhpMyAdmin\Html\Generator::getIcon("b_search", _gettext("Table search"), false, false, "TabsMode");
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"";
        // line 9
        echo PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        echo "\">
      ";
        // line 10
        echo PhpMyAdmin\Html\Generator::getIcon("b_select", _gettext("Zoom search"), false, false, "TabsMode");
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 15
        echo PhpMyAdmin\Url::getFromRoute("/table/find-replace", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        echo "\">
      ";
        // line 16
        echo PhpMyAdmin\Html\Generator::getIcon("b_find_replace", _gettext("Find and replace"), false, false, "TabsMode");
        echo "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        echo PhpMyAdmin\Url::getFromRoute("/table/zoom-search");
        echo "\" name=\"insertForm\" id=\"zoom_search_form\" class=\"ajax lock-page\">
  ";
        // line 22
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        echo PhpMyAdmin\Url::getFromRoute("/table/zoom-search");
        echo "\">

  <div class=\"card mb-3\">
    <div class=\"card-header\">";
echo _gettext("Do a \"query by example\" (wildcard: \"%\") for two different columns");
        // line 27
        echo "</div>

    <div class=\"card-body\" id=\"inputSection\">
      <table class=\"table table-striped table-hover table-sm w-auto\" id=\"tableFieldsId\">
        <thead>
          <tr>
            ";
        // line 33
        if (($context["geom_column_flag"] ?? null)) {
            // line 34
            echo "              <th>";
echo _gettext("Function");
            echo "</th>
            ";
        }
        // line 36
        echo "            <th>";
echo _gettext("Column");
        echo "</th>
            <th>";
echo _gettext("Type");
        // line 37
        echo "</th>
            <th>";
echo _gettext("Collation");
        // line 38
        echo "</th>
            <th>";
echo _gettext("Operator");
        // line 39
        echo "</th>
            <th>";
echo _gettext("Value");
        // line 40
        echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 44
        $context["type"] = [];
        // line 45
        echo "          ";
        $context["collation"] = [];
        // line 46
        echo "          ";
        $context["func"] = [];
        // line 47
        echo "          ";
        $context["value"] = [];
        // line 48
        echo "
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "            ";
            // line 51
            echo "            ";
            if ((0 === twig_compare($context["i"], 2))) {
                // line 52
                echo "              <tr>
                <th>
                  ";
echo _gettext("Additional search criteria");
                // line 55
                echo "                </th>
              </tr>
            ";
            }
            // line 58
            echo "            <tr class=\"noclick\">
              <th>
                <select name=\"criteriaColumnNames[]\" id=\"tableid_";
            // line 60
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                  <option value=\"pma_null\">
                    ";
echo _gettext("None");
            // line 63
            echo "                  </option>
                  ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["column_names"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 65
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 65) && (0 === twig_compare((($__internal_compile_0 = ($context["criteria_column_names"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), (($__internal_compile_1 = ($context["column_names"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["j"]] ?? null) : null))))) {
                    // line 66
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["column_names"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["j"]] ?? null) : null), "html", null, true);
                    echo "\" selected>
                        ";
                    // line 67
                    echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["column_names"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["j"]] ?? null) : null), "html", null, true);
                    echo "
                      </option>
                    ";
                } else {
                    // line 70
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["column_names"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["j"]] ?? null) : null), "html", null, true);
                    echo "\">
                        ";
                    // line 71
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["column_names"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["j"]] ?? null) : null), "html", null, true);
                    echo "
                      </option>
                    ";
                }
                // line 74
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                </select>
              </th>
              ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 77) && (0 !== twig_compare((($__internal_compile_6 = ($context["criteria_column_names"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["i"]] ?? null) : null), "pma_null")))) {
                // line 78
                echo "                ";
                $context["key"] = (($__internal_compile_7 = ($context["keys"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[(($__internal_compile_8 = ($context["criteria_column_names"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["i"]] ?? null) : null)] ?? null) : null);
                // line 79
                echo "                ";
                $context["properties"] = twig_get_attribute($this->env, $this->source, ($context["self"] ?? null), "getColumnProperties", [0 => $context["i"], 1 => ($context["key"] ?? null)], "method", false, false, false, 79);
                // line 80
                echo "                ";
                $context["type"] = twig_array_merge(($context["type"] ?? null), [$context["i"] => (($__internal_compile_9 = ($context["properties"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["type"] ?? null) : null)]);
                // line 81
                echo "                ";
                $context["collation"] = twig_array_merge(($context["collation"] ?? null), [$context["i"] => (($__internal_compile_10 = ($context["properties"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["collation"] ?? null) : null)]);
                // line 82
                echo "                ";
                $context["func"] = twig_array_merge(($context["func"] ?? null), [$context["i"] => (($__internal_compile_11 = ($context["properties"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["func"] ?? null) : null)]);
                // line 83
                echo "                ";
                $context["value"] = twig_array_merge(($context["value"] ?? null), [$context["i"] => (($__internal_compile_12 = ($context["properties"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["value"] ?? null) : null)]);
                // line 84
                echo "              ";
            }
            // line 85
            echo "              ";
            // line 86
            echo "              <td dir=\"ltr\">
                ";
            // line 87
            ((twig_get_attribute($this->env, $this->source, ($context["type"] ?? null), $context["i"], [], "array", true, true, false, 87)) ? (print (twig_escape_filter($this->env, (($__internal_compile_13 = ($context["type"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["i"]] ?? null) : null), "html", null, true))) : (print ("")));
            echo "
              </td>
              ";
            // line 90
            echo "              <td>
                ";
            // line 91
            ((twig_get_attribute($this->env, $this->source, ($context["collation"] ?? null), $context["i"], [], "array", true, true, false, 91)) ? (print (twig_escape_filter($this->env, (($__internal_compile_14 = ($context["collation"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["i"]] ?? null) : null), "html", null, true))) : (print ("")));
            echo "
              </td>
              ";
            // line 94
            echo "              <td>
                ";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), $context["i"], [], "array", true, true, false, 95)) ? ((($__internal_compile_15 = ($context["func"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["i"]] ?? null) : null)) : (""));
            echo "
              </td>
              ";
            // line 98
            echo "              <td>
                ";
            // line 99
            echo ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), $context["i"], [], "array", true, true, false, 99)) ? ((($__internal_compile_16 = ($context["value"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["i"]] ?? null) : null)) : (""));
            echo "
              </td>
              <td>
                ";
            // line 103
            echo "                <input type=\"hidden\" name=\"criteriaColumnTypes[";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\" id=\"types_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"";
            // line 104
            if (twig_get_attribute($this->env, $this->source, ($context["criteria_column_types"] ?? null), $context["i"], [], "array", true, true, false, 104)) {
                echo " value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["criteria_column_types"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["i"]] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">
                <input type=\"hidden\" name=\"criteriaColumnCollations[";
            // line 105
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\" id=\"collations_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
      </table>

      <table class=\"table table-borderless table-sm w-auto\">
        <tr>
          <td>
            <label for=\"dataLabel\">
              ";
echo _gettext("Use this column to label each point");
        // line 117
        echo "            </label>
          </td>
          <td>
            <select name=\"dataLabel\" id=\"dataLabel\">
              <option value=\"\">
                ";
echo _gettext("None");
        // line 123
        echo "              </option>
              ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["column_names"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 125
            echo "                ";
            if (((isset($context["data_label"]) || array_key_exists("data_label", $context)) && (0 === twig_compare(($context["data_label"] ?? null), twig_escape_filter($this->env, (($__internal_compile_18 = ($context["column_names"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["i"]] ?? null) : null)))))) {
                // line 126
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_19 = ($context["column_names"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["i"]] ?? null) : null), "html", null, true);
                echo "\" selected>
                    ";
                // line 127
                echo twig_escape_filter($this->env, (($__internal_compile_20 = ($context["column_names"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["i"]] ?? null) : null), "html", null, true);
                echo "
                  </option>
                ";
            } else {
                // line 130
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_21 = ($context["column_names"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["i"]] ?? null) : null), "html", null, true);
                echo "\">
                    ";
                // line 131
                echo twig_escape_filter($this->env, (($__internal_compile_22 = ($context["column_names"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["i"]] ?? null) : null), "html", null, true);
                echo "
                  </option>
                ";
            }
            // line 134
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for=\"maxRowPlotLimit\">
              ";
echo _gettext("Maximum rows to plot");
        // line 142
        echo "            </label>
          </td>
          <td>
            <input type=\"number\" name=\"maxPlotLimit\" id=\"maxRowPlotLimit\" required=\"required\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, ($context["max_plot_limit"] ?? null), "html", null, true);
        echo "\">
          </td>
        </tr>
      </table>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"zoom_submit\" id=\"inputFormSubmitId\" value=\"";
echo _gettext("Go");
        // line 152
        echo "\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/zoom_search/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 152,  375 => 145,  370 => 142,  361 => 135,  355 => 134,  349 => 131,  344 => 130,  338 => 127,  333 => 126,  330 => 125,  326 => 124,  323 => 123,  315 => 117,  305 => 109,  293 => 105,  285 => 104,  279 => 103,  273 => 99,  270 => 98,  265 => 95,  262 => 94,  257 => 91,  254 => 90,  249 => 87,  246 => 86,  244 => 85,  241 => 84,  238 => 83,  235 => 82,  232 => 81,  229 => 80,  226 => 79,  223 => 78,  221 => 77,  217 => 75,  211 => 74,  205 => 71,  200 => 70,  194 => 67,  189 => 66,  186 => 65,  182 => 64,  179 => 63,  173 => 60,  169 => 58,  164 => 55,  159 => 52,  156 => 51,  154 => 50,  150 => 49,  147 => 48,  144 => 47,  141 => 46,  138 => 45,  136 => 44,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  112 => 36,  106 => 34,  104 => 33,  96 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  69 => 16,  65 => 15,  57 => 10,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/zoom_search/index.twig", "/var/www/html/public/phpmyadmin/templates/table/zoom_search/index.twig");
    }
}
