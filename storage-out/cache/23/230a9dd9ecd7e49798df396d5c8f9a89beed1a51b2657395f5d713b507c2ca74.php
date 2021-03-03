<?php

/* default/template/checkout/register.twig */
class __TwigTemplate_8a7518415df9c263eb4eebacdc5fc7ce3139f064d4d0711d046af5b771d8419b extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-sm-6\">
\t\t<fieldset id=\"account\">
\t\t\t<legend>";
        // line 4
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
\t\t\t<small>";
        // line 5
        echo (isset($context["text_why_your_details"]) ? $context["text_why_your_details"] : null);
        echo "</small>
\t\t\t<div class=\"form-group\" style=\"display: ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t<label class=\"control-label\">";
        // line 7
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 9
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 10
                echo "\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 12
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t";
                // line 13
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 18
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\"/>
\t\t\t\t\t\t\t\t";
                // line 19
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 25
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 26
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 29
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 30
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-email\">";
        // line 33
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 34
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-payment-email\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 37
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 38
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 41
            echo "
\t\t\t\t";
            // line 42
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 43
                echo "
\t\t\t\t\t";
                // line 44
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 45
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 46
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<select name=\"custom_field[";
                    // line 47
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 48
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>


\t\t\t\t\t\t\t\t";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 52
                        echo "

\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 54
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>


\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "

\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 63
                echo "
\t\t\t\t\t";
                // line 64
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 65
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 66
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                    // line 67
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 71
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 78
                echo "
\t\t\t\t\t";
                // line 79
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 80
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 81
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                    // line 82
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 86
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 87
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 93
                echo "
\t\t\t\t\t";
                // line 94
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 95
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 96
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 97
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 100
                echo "
\t\t\t\t\t";
                // line 101
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 102
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 103
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 104
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 107
                echo "
\t\t\t\t\t";
                // line 108
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 109
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 110
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-payment-custom-field";
                    // line 112
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 114
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 115
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 118
                echo "
\t\t\t\t\t";
                // line 119
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 120
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 121
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 123
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 132
                echo "
\t\t\t\t\t";
                // line 133
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 134
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 135
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 137
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 146
                echo "
\t\t\t\t\t";
                // line 147
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 148
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 149
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 151
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 160
                echo "
\t\t\t\t";
            }
            // line 162
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
        // line 166
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-password\">";
        // line 168
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 169
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-payment-password\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-confirm\">";
        // line 172
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 173
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-payment-confirm\" class=\"form-control\"/>
\t\t\t</div>
\t\t</fieldset>
\t</div>
\t<div class=\"col-sm-6\">
\t\t<fieldset id=\"address\">
\t\t\t<legend>";
        // line 179
        echo (isset($context["text_your_address"]) ? $context["text_your_address"] : null);
        echo "</legend>
\t\t\t<small>";
        // line 180
        echo (isset($context["text_why_your_address"]) ? $context["text_why_your_address"] : null);
        echo "</small>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-company\">";
        // line 182
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 183
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 186
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 187
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 190
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 191
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-city\">";
        // line 194
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 195
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 198
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"postcode\" value=\"";
        // line 199
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-country\">";
        // line 202
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
\t\t\t\t<select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
        // line 204
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>


\t\t\t\t\t";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 208
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 209
                echo "

\t\t\t\t\t\t\t<option value=\"";
                // line 211
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>


\t\t\t\t\t\t";
            } else {
                // line 215
                echo "

\t\t\t\t\t\t\t<option value=\"";
                // line 217
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>


\t\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "

\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-zone\">";
        // line 227
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
\t\t\t\t<select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\"></select>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-geo-zone\">";
        // line 231
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
\t\t\t\t<select name=\"geo_zone_id\" id=\"input-payment-geo-zone\" class=\"form-control\"></select>
\t\t\t</div>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"control-label\" for=\"input-payment-ltnlng\">";
        // line 235
        echo (isset($context["entry_ltnlng"]) ? $context["entry_ltnlng"] : null);
        echo "</label>
\t\t\t\t<input type=\"hidden\" name=\"ltnlng\" value=\"";
        // line 236
        echo (isset($context["ltnlng"]) ? $context["ltnlng"] : null);
        echo "\" id=\"input-payment-ltnlng\" class=\"form-control\"/>
\t\t\t\t<div id=\"map\" style=\"height: 300px\"></div>
\t\t\t\t<script>
\t\t\t\t\tvar map;
\t\t\t\t\tvar ltnlng = \$('#input-payment-ltnlng').val().split(',');
\t\t\t\t\tvar panamaKml = \"https://losguerra.shop/Panama.kml\"
\t\t\t\t\tvar _ltn = ltnlng != \"\" ? parseFloat(ltnlng[0]) : 9.0026504;
\t\t\t\t\tvar _lng = ltnlng != \"\" ? parseFloat(ltnlng[1]) : -79.512029;
\t\t\t\t\tvar pos = {
\t\t\t\t\t\tlat: _ltn,
\t\t\t\t\t\tlng: _lng
\t\t\t\t\t};
\t\t\t\t\tif (ltnlng == \"\") {
\t\t\t\t\tzmm = 13
\t\t\t\t\tif (navigator.geolocation) {
\t\t\t\t\t\tnavigator.geolocation.getCurrentPosition(showPosition);
\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tzmm = 18
\t\t\t\t\t}


\t\t\t\t\tfunction showPosition(position) {
\t\t\t\t\tconsole.log('position from geo location');
\t\t\t\t\tpos = {
\t\t\t\t\t\tlat: position.coords.latitude,
\t\t\t\t\t\tlng: position.coords.longitude
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tfunction initMap() {
\t\t\t\t\t\tconsole.log('init map');
\t\t\t\t\t\tmap = new google.maps.Map(document.getElementById('map'), {
\t\t\t\t\t\tcenter: pos,
\t\t\t\t\t\tsensor: true,
\t\t\t\t\t\tzoom: zmm
\t\t\t\t\t\t});

\t\t\t\t\t\tvar marker = new google.maps.Marker({position: pos, map: map});

\t\t\t\t\t\tvar kmlLayer = new google.maps.KmlLayer(panamaKml, {
\t\t\t\t\t\tsuppressInfoWindows: true,
\t\t\t\t\t\tpreserveViewport: true,
\t\t\t\t\t\tmap: map
\t\t\t\t\t\t});

\t\t\t\t\t\tkmlLayer.addListener('click', function (event) {
\t\t\t\t\t\tmarker.setPosition(event.latLng.toJSON());
\t\t\t\t\t\t\$('#input-payment-ltnlng').val(event.latLng.toUrlValue());
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t</div>
\t\t\t";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 290
            echo "
\t\t\t\t";
            // line 291
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 292
                echo "
\t\t\t\t\t";
                // line 293
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 294
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 295
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<select name=\"custom_field[";
                    // line 296
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 297
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>


\t\t\t\t\t\t\t\t";
                    // line 300
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 301
                        echo "

\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 303
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>


\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 307
                    echo "

\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 312
                echo "
\t\t\t\t\t";
                // line 313
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 314
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 315
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                    // line 316
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 317
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 318
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 320
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 321
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 324
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 327
                echo "
\t\t\t\t\t";
                // line 328
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 329
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 330
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                    // line 331
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 332
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 333
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 335
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 336
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 339
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 342
                echo "
\t\t\t\t\t";
                // line 343
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 344
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 345
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 346
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 349
                echo "
\t\t\t\t\t";
                // line 350
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 351
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 352
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 353
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 356
                echo "
\t\t\t\t\t";
                // line 357
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 358
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 359
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-payment-custom-field";
                    // line 361
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 363
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 364
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 367
                echo "
\t\t\t\t\t";
                // line 368
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 369
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 370
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 372
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 381
                echo "
\t\t\t\t\t";
                // line 382
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 383
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 384
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 386
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 395
                echo "
\t\t\t\t\t";
                // line 396
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 397
                    echo "\t\t\t\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 398
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 400
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 409
                echo "
\t\t\t\t";
            }
            // line 411
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "\t\t</fieldset>

\t\t";
        // line 414
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "</div>
</div>
<div class=\"checkbox\">
\t<label for=\"newsletter\">
\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\"/>
\t\t";
        // line 419
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
</div>
";
        // line 421
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 422
            echo "\t<div class=\"checkbox\">
\t\t<label>
\t\t\t<input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\"/>
\t\t\t";
            // line 425
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "</label>
\t</div>
";
        }
        // line 428
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 429
            echo "\t<div class=\"buttons clearfix\">
\t\t<div class=\"pull-right\">";
            // line 430
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
\t\t\t&nbsp;
\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"/>
\t\t\t<input type=\"button\" value=\"";
            // line 433
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"/>
\t\t</div>
\t</div>
";
        } else {
            // line 437
            echo "\t<div class=\"buttons clearfix\">
\t\t<div class=\"pull-right\">
\t\t\t<input type=\"button\" value=\"";
            // line 439
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"/>
\t\t</div>
\t</div>
";
        }
        // line 443
        echo "<script type=\"text/javascript\">
\t<!--
\t// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function () {
if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
}

if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\$('#account .form-group:last').after(this);
}

if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\$('#account .form-group:last').after(this);
}

if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\$('#account .form-group:first').before(this);
}
});

\$('#address .form-group[data-sort]').detach().each(function () {
if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
}

if (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\$('#address .form-group:last').after(this);
}

if (\$(this).attr('data-sort') == \$('#address .form-group').length) {
\$('#address .form-group:last').after(this);
}

if (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\$('#address .form-group:first').before(this);
}
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function () {
\$.ajax({
url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
dataType: 'json',
success: function (json) {
\$('#collapse-payment-address .custom-field').hide();
\$('#collapse-payment-address .custom-field').removeClass('required');

for (i = 0; i < json.length; i ++) {
custom_field = json[i];

\$('#payment-custom-field' + custom_field['custom_field_id']).show();

if (custom_field['required']) {
\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
}
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//
\t-->
</script>
\t<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function () {
var node = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
if (\$('#form-upload input[name=\\'file\\']').val() != '') {
clearInterval(timer);

\$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData(\$('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function () {
\$(node).button('loading');
},
complete: function () {
\$(node).button('reset');
},
success: function (json) {
\$('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
//
\t-->
</script>
\t<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 570
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickTime: false});

\$('.time').datetimepicker({language: '";
        // line 572
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickDate: false});

\$('.datetime').datetimepicker({language: '";
        // line 574
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickDate: true, pickTime: true});
//
\t-->
</script>
\t<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function () {
\$.ajax({
url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
dataType: 'json',
beforeSend: function () {
\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
},
complete: function () {
\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
},
success: function (json) {
if (json['postcode_required'] == '1') {
\$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
} else {
\$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
}

html = '<option value=\"\">  ";
        // line 598
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

if (json['zone'] && json['zone'] != '') {
for (i = 0; i < json['zone'].length; i ++) {
html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

if (json['zone'][i]['zone_id'] == '";
        // line 604
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
html += ' selected=\"selected\"';
}

html += '>' + json['zone'][i]['name'] + '</option>';
}
} else {
html += '<option value=\"0\" selected=\"selected\">  ";
        // line 611
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
}

\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//
\t-->
</script>

<script
\ttype=\"text/javascript\">
<!--
\$('select[name=\\'zone_id\\']').change(function () {
if (this.value) {
\$.ajax({
url: 'index.php?route=account/account/zone&zone_id=' + this.value,
dataType: 'json',
beforeSend: function () {
\$('select[name=\\'zone_id\\']').prop('disabled', true);
},
complete: function () {
\$('select[name=\\'zone_id\\']').prop('disabled', false);
},
success: function (json) {
html = '<option value=\"\">    ";
        // line 642
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

if (json['geo_zone'] && json['geo_zone'] != '') {
for (i = 0; i < json['geo_zone'].length; i ++) {
html += '<option value=\"' + json['geo_zone'][i]['geo_zone_id'] + '\"';

if (json['geo_zone'][i]['geo_zone_id'] == '";
        // line 648
        echo (isset($context["geo_zone_id"]) ? $context["geo_zone_id"] : null);
        echo "') {
html += ' selected=\"selected\"';
}

html += '>' + json['geo_zone'][i]['name'] + '</option>';
}
} else {
html += '<option value=\"0\" selected=\"selected\">    ";
        // line 655
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
}

\$('select[name=\\'geo_zone_id\\']').html(html);
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
} else {
setTimeout(() => {
\$('select[name=\\'zone_id\\']').trigger('change');
}, 500);
}

});

\$('select[name=\\'zone_id\\']').trigger('change');
//
\t-->
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 676
        echo (isset($context["googleapikey"]) ? $context["googleapikey"] : null);
        echo "&callback=initMap\"
async
defer>
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1472 => 676,  1448 => 655,  1438 => 648,  1429 => 642,  1395 => 611,  1385 => 604,  1376 => 598,  1349 => 574,  1344 => 572,  1339 => 570,  1210 => 443,  1201 => 439,  1197 => 437,  1188 => 433,  1182 => 430,  1179 => 429,  1177 => 428,  1171 => 425,  1166 => 422,  1164 => 421,  1159 => 419,  1151 => 414,  1147 => 412,  1141 => 411,  1137 => 409,  1117 => 400,  1110 => 398,  1103 => 397,  1101 => 396,  1098 => 395,  1078 => 386,  1071 => 384,  1064 => 383,  1062 => 382,  1059 => 381,  1039 => 372,  1032 => 370,  1025 => 369,  1023 => 368,  1020 => 367,  1010 => 364,  1006 => 363,  999 => 361,  994 => 359,  987 => 358,  985 => 357,  982 => 356,  968 => 353,  962 => 352,  955 => 351,  953 => 350,  950 => 349,  936 => 346,  930 => 345,  923 => 344,  921 => 343,  918 => 342,  913 => 339,  904 => 336,  896 => 335,  892 => 333,  888 => 332,  884 => 331,  880 => 330,  873 => 329,  871 => 328,  868 => 327,  863 => 324,  854 => 321,  846 => 320,  842 => 318,  838 => 317,  834 => 316,  830 => 315,  823 => 314,  821 => 313,  818 => 312,  811 => 307,  799 => 303,  795 => 301,  791 => 300,  785 => 297,  777 => 296,  771 => 295,  764 => 294,  762 => 293,  759 => 292,  757 => 291,  754 => 290,  750 => 289,  694 => 236,  690 => 235,  683 => 231,  676 => 227,  669 => 222,  663 => 221,  654 => 217,  650 => 215,  641 => 211,  637 => 209,  634 => 208,  630 => 207,  624 => 204,  619 => 202,  611 => 199,  607 => 198,  601 => 195,  597 => 194,  591 => 191,  587 => 190,  581 => 187,  577 => 186,  571 => 183,  567 => 182,  562 => 180,  558 => 179,  549 => 173,  545 => 172,  539 => 169,  535 => 168,  530 => 166,  526 => 164,  519 => 162,  515 => 160,  495 => 151,  488 => 149,  481 => 148,  479 => 147,  476 => 146,  456 => 137,  449 => 135,  442 => 134,  440 => 133,  437 => 132,  417 => 123,  410 => 121,  403 => 120,  401 => 119,  398 => 118,  388 => 115,  384 => 114,  377 => 112,  372 => 110,  365 => 109,  363 => 108,  360 => 107,  346 => 104,  340 => 103,  333 => 102,  331 => 101,  328 => 100,  314 => 97,  308 => 96,  301 => 95,  299 => 94,  296 => 93,  291 => 90,  282 => 87,  274 => 86,  270 => 84,  266 => 83,  262 => 82,  258 => 81,  251 => 80,  249 => 79,  246 => 78,  241 => 75,  232 => 72,  224 => 71,  220 => 69,  216 => 68,  212 => 67,  208 => 66,  201 => 65,  199 => 64,  196 => 63,  189 => 58,  177 => 54,  173 => 52,  169 => 51,  163 => 48,  155 => 47,  149 => 46,  142 => 45,  140 => 44,  137 => 43,  135 => 42,  132 => 41,  128 => 40,  123 => 38,  119 => 37,  113 => 34,  109 => 33,  103 => 30,  99 => 29,  93 => 26,  89 => 25,  85 => 23,  79 => 22,  73 => 19,  69 => 18,  65 => 16,  59 => 13,  55 => 12,  51 => 10,  48 => 9,  44 => 8,  40 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="col-sm-6">*/
/* 		<fieldset id="account">*/
/* 			<legend>{{ text_your_details }}</legend>*/
/* 			<small>{{ text_why_your_details }}</small>*/
/* 			<div class="form-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/* 				<label class="control-label">{{ entry_customer_group }}</label>*/
/* 				{% for customer_group in customer_groups %}*/
/* 					{% if customer_group.customer_group_id == customer_group_id %}*/
/* 						<div class="radio">*/
/* 							<label>*/
/* 								<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked"/>*/
/* 								{{ customer_group.name }}</label>*/
/* 						</div>*/
/* 					{% else %}*/
/* 						<div class="radio">*/
/* 							<label>*/
/* 								<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}"/>*/
/* 								{{ customer_group.name }}</label>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/* 				<input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-payment-firstname" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/* 				<input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-email">{{ entry_email }}</label>*/
/* 				<input type="text" name="email" value="" placeholder="{{ entry_email }}" id="input-payment-email" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-telephone">{{ entry_telephone }}</label>*/
/* 				<input type="text" name="telephone" value="" placeholder="{{ entry_telephone }}" id="input-payment-telephone" class="form-control"/>*/
/* 			</div>*/
/* 			{% for custom_field in custom_fields %}*/
/* */
/* 				{% if custom_field.location == 'account' %}*/
/* */
/* 					{% if custom_field.type == 'select' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/* 								<option value="">{{ text_select }}</option>*/
/* */
/* */
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* */
/* */
/* 									<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* 								{% endfor %}*/
/* */
/* */
/* 							</select>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'radio' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label">{{ custom_field.name }}</label>*/
/* 							<div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<div class="radio">*/
/* 										<label>*/
/* 											<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/* 											{{ custom_field_value.name }}</label>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'checkbox' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label">{{ custom_field.name }}</label>*/
/* 							<div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<div class="checkbox">*/
/* 										<label>*/
/* 											<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/* 											{{ custom_field_value.name }}</label>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'text' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'textarea' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'file' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label">{{ custom_field.name }}</label>*/
/* 							<br/>*/
/* 							<button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default">*/
/* 								<i class="fa fa-upload"></i>*/
/* 								{{ button_upload }}</button>*/
/* 							<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'date' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<div class="input-group date">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button type="button" class="btn btn-default">*/
/* 										<i class="fa fa-calendar"></i>*/
/* 									</button>*/
/* 								</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'time' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<div class="input-group time">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button type="button" class="btn btn-default">*/
/* 										<i class="fa fa-calendar"></i>*/
/* 									</button>*/
/* 								</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'time' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<div class="input-group datetime">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button type="button" class="btn btn-default">*/
/* 										<i class="fa fa-calendar"></i>*/
/* 									</button>*/
/* 								</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 				{% endif %}*/
/* */
/* 			{% endfor %}*/
/* 		</fieldset>*/
/* 		<fieldset>*/
/* 			<legend>{{ text_your_password }}</legend>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-password">{{ entry_password }}</label>*/
/* 				<input type="password" name="password" value="" placeholder="{{ entry_password }}" id="input-payment-password" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-confirm">{{ entry_confirm }}</label>*/
/* 				<input type="password" name="confirm" value="" placeholder="{{ entry_confirm }}" id="input-payment-confirm" class="form-control"/>*/
/* 			</div>*/
/* 		</fieldset>*/
/* 	</div>*/
/* 	<div class="col-sm-6">*/
/* 		<fieldset id="address">*/
/* 			<legend>{{ text_your_address }}</legend>*/
/* 			<small>{{ text_why_your_address }}</small>*/
/* 			<div class="form-group">*/
/* 				<label class="control-label" for="input-payment-company">{{ entry_company }}</label>*/
/* 				<input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-payment-company" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/* 				<input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-payment-address-1" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="control-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/* 				<input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-payment-address-2" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-city">{{ entry_city }}</label>*/
/* 				<input type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-payment-city" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/* 				<input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-payment-postcode" class="form-control"/>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-country">{{ entry_country }}</label>*/
/* 				<select name="country_id" id="input-payment-country" class="form-control">*/
/* 					<option value="">{{ text_select }}</option>*/
/* */
/* */
/* 					{% for country in countries %}*/
/* 						{% if country.country_id == country_id %}*/
/* */
/* */
/* 							<option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* */
/* */
/* 						{% else %}*/
/* */
/* */
/* 							<option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* */
/* */
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* */
/* */
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/* 				<select name="zone_id" id="input-payment-zone" class="form-control"></select>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-geo-zone">{{ entry_geo_zone }}</label>*/
/* 				<select name="geo_zone_id" id="input-payment-geo-zone" class="form-control"></select>*/
/* 			</div>*/
/* 			<div class="form-group required">*/
/* 				<label class="control-label" for="input-payment-ltnlng">{{ entry_ltnlng }}</label>*/
/* 				<input type="hidden" name="ltnlng" value="{{ ltnlng }}" id="input-payment-ltnlng" class="form-control"/>*/
/* 				<div id="map" style="height: 300px"></div>*/
/* 				<script>*/
/* 					var map;*/
/* 					var ltnlng = $('#input-payment-ltnlng').val().split(',');*/
/* 					var panamaKml = "https://losguerra.shop/Panama.kml"*/
/* 					var _ltn = ltnlng != "" ? parseFloat(ltnlng[0]) : 9.0026504;*/
/* 					var _lng = ltnlng != "" ? parseFloat(ltnlng[1]) : -79.512029;*/
/* 					var pos = {*/
/* 						lat: _ltn,*/
/* 						lng: _lng*/
/* 					};*/
/* 					if (ltnlng == "") {*/
/* 					zmm = 13*/
/* 					if (navigator.geolocation) {*/
/* 						navigator.geolocation.getCurrentPosition(showPosition);*/
/* 					}*/
/* 					} else {*/
/* 						zmm = 18*/
/* 					}*/
/* */
/* */
/* 					function showPosition(position) {*/
/* 					console.log('position from geo location');*/
/* 					pos = {*/
/* 						lat: position.coords.latitude,*/
/* 						lng: position.coords.longitude*/
/* 						}*/
/* 					}*/
/* */
/* 					function initMap() {*/
/* 						console.log('init map');*/
/* 						map = new google.maps.Map(document.getElementById('map'), {*/
/* 						center: pos,*/
/* 						sensor: true,*/
/* 						zoom: zmm*/
/* 						});*/
/* */
/* 						var marker = new google.maps.Marker({position: pos, map: map});*/
/* */
/* 						var kmlLayer = new google.maps.KmlLayer(panamaKml, {*/
/* 						suppressInfoWindows: true,*/
/* 						preserveViewport: true,*/
/* 						map: map*/
/* 						});*/
/* */
/* 						kmlLayer.addListener('click', function (event) {*/
/* 						marker.setPosition(event.latLng.toJSON());*/
/* 						$('#input-payment-ltnlng').val(event.latLng.toUrlValue());*/
/* 						});*/
/* 					}*/
/* 				</script>*/
/* 			</div>*/
/* 			{% for custom_field in custom_fields %}*/
/* */
/* 				{% if custom_field.location == 'address' %}*/
/* */
/* 					{% if custom_field.type == 'select' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/* 								<option value="">{{ text_select }}</option>*/
/* */
/* */
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* */
/* */
/* 									<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* 								{% endfor %}*/
/* */
/* */
/* 							</select>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'radio' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label">{{ custom_field.name }}</label>*/
/* 							<div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<div class="radio">*/
/* 										<label>*/
/* 											<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/* 											{{ custom_field_value.name }}</label>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'checkbox' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label">{{ custom_field.name }}</label>*/
/* 							<div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<div class="checkbox">*/
/* 										<label>*/
/* 											<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/* 											{{ custom_field_value.name }}</label>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'text' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'textarea' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'file' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label">{{ custom_field.name }}</label>*/
/* 							<br/>*/
/* 							<button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default">*/
/* 								<i class="fa fa-upload"></i>*/
/* 								{{ button_upload }}</button>*/
/* 							<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'date' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<div class="input-group date">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button type="button" class="btn btn-default">*/
/* 										<i class="fa fa-calendar"></i>*/
/* 									</button>*/
/* 								</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'time' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<div class="input-group time">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button type="button" class="btn btn-default">*/
/* 										<i class="fa fa-calendar"></i>*/
/* 									</button>*/
/* 								</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if custom_field.type == 'time' %}*/
/* 						<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<div class="input-group datetime">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button type="button" class="btn btn-default">*/
/* 										<i class="fa fa-calendar"></i>*/
/* 									</button>*/
/* 								</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</fieldset>*/
/* */
/* 		{{ captcha }}</div>*/
/* </div>*/
/* <div class="checkbox">*/
/* 	<label for="newsletter">*/
/* 		<input type="checkbox" name="newsletter" value="1" id="newsletter"/>*/
/* 		{{ entry_newsletter }}</label>*/
/* </div>*/
/* {% if shipping_required %}*/
/* 	<div class="checkbox">*/
/* 		<label>*/
/* 			<input type="checkbox" name="shipping_address" value="1" checked="checked"/>*/
/* 			{{ entry_shipping }}</label>*/
/* 	</div>*/
/* {% endif %}*/
/* {% if text_agree %}*/
/* 	<div class="buttons clearfix">*/
/* 		<div class="pull-right">{{ text_agree }}*/
/* 			&nbsp;*/
/* 			<input type="checkbox" name="agree" value="1"/>*/
/* 			<input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary"/>*/
/* 		</div>*/
/* 	</div>*/
/* {% else %}*/
/* 	<div class="buttons clearfix">*/
/* 		<div class="pull-right">*/
/* 			<input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary"/>*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
/* <script type="text/javascript">*/
/* 	<!--*/
/* 	// Sort the custom fields*/
/* $('#account .form-group[data-sort]').detach().each(function () {*/
/* if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/* $('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/* $('#account .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/* $('#account .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/* $('#account .form-group:first').before(this);*/
/* }*/
/* });*/
/* */
/* $('#address .form-group[data-sort]').detach().each(function () {*/
/* if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {*/
/* $('#address .form-group').eq($(this).attr('data-sort')).before(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') > $('#address .form-group').length) {*/
/* $('#address .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') == $('#address .form-group').length) {*/
/* $('#address .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') < -$('#address .form-group').length) {*/
/* $('#address .form-group:first').before(this);*/
/* }*/
/* });*/
/* */
/* $('#collapse-payment-address input[name=\'customer_group_id\']').on('change', function () {*/
/* $.ajax({*/
/* url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,*/
/* dataType: 'json',*/
/* success: function (json) {*/
/* $('#collapse-payment-address .custom-field').hide();*/
/* $('#collapse-payment-address .custom-field').removeClass('required');*/
/* */
/* for (i = 0; i < json.length; i ++) {*/
/* custom_field = json[i];*/
/* */
/* $('#payment-custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* if (custom_field['required']) {*/
/* $('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* }*/
/* }*/
/* },*/
/* error: function (xhr, ajaxOptions, thrownError) {*/
/* alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* }*/
/* });*/
/* });*/
/* */
/* $('#collapse-payment-address input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //*/
/* 	-->*/
/* </script>*/
/* 	<script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function () {*/
/* var node = this;*/
/* */
/* $('#form-upload').remove();*/
/* */
/* $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* if (typeof timer != 'undefined') {*/
/* clearInterval(timer);*/
/* }*/
/* */
/* timer = setInterval(function () {*/
/* if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* clearInterval(timer);*/
/* */
/* $.ajax({*/
/* url: 'index.php?route=tool/upload',*/
/* type: 'post',*/
/* dataType: 'json',*/
/* data: new FormData($('#form-upload')[0]),*/
/* cache: false,*/
/* contentType: false,*/
/* processData: false,*/
/* beforeSend: function () {*/
/* $(node).button('loading');*/
/* },*/
/* complete: function () {*/
/* $(node).button('reset');*/
/* },*/
/* success: function (json) {*/
/* $('.text-danger').remove();*/
/* */
/* if (json['error']) {*/
/* $(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* }*/
/* */
/* if (json['success']) {*/
/* alert(json['success']);*/
/* */
/* $(node).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
/* }*/
/* },*/
/* error: function (xhr, ajaxOptions, thrownError) {*/
/* alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* }*/
/* });*/
/* }*/
/* }, 500);*/
/* });*/
/* //*/
/* 	-->*/
/* </script>*/
/* 	<script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('.date').datetimepicker({language: '{{ datepicker }}', pickTime: false});*/
/* */
/* $('.time').datetimepicker({language: '{{ datepicker }}', pickDate: false});*/
/* */
/* $('.datetime').datetimepicker({language: '{{ datepicker }}', pickDate: true, pickTime: true});*/
/* //*/
/* 	-->*/
/* </script>*/
/* 	<script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('#collapse-payment-address select[name=\'country_id\']').on('change', function () {*/
/* $.ajax({*/
/* url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/* dataType: 'json',*/
/* beforeSend: function () {*/
/* $('#collapse-payment-address select[name=\'country_id\']').prop('disabled', true);*/
/* },*/
/* complete: function () {*/
/* $('#collapse-payment-address select[name=\'country_id\']').prop('disabled', false);*/
/* },*/
/* success: function (json) {*/
/* if (json['postcode_required'] == '1') {*/
/* $('#collapse-payment-address input[name=\'postcode\']').parent().addClass('required');*/
/* } else {*/
/* $('#collapse-payment-address input[name=\'postcode\']').parent().removeClass('required');*/
/* }*/
/* */
/* html = '<option value="">  {{ text_select }}</option>';*/
/* */
/* if (json['zone'] && json['zone'] != '') {*/
/* for (i = 0; i < json['zone'].length; i ++) {*/
/* html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* html += ' selected="selected"';*/
/* }*/
/* */
/* html += '>' + json['zone'][i]['name'] + '</option>';*/
/* }*/
/* } else {*/
/* html += '<option value="0" selected="selected">  {{ text_none }}</option>';*/
/* }*/
/* */
/* $('#collapse-payment-address select[name=\'zone_id\']').html(html);*/
/* },*/
/* error: function (xhr, ajaxOptions, thrownError) {*/
/* alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* }*/
/* });*/
/* });*/
/* */
/* $('#collapse-payment-address select[name=\'country_id\']').trigger('change');*/
/* //*/
/* 	-->*/
/* </script>*/
/* */
/* <script*/
/* 	type="text/javascript">*/
/* <!--*/
/* $('select[name=\'zone_id\']').change(function () {*/
/* if (this.value) {*/
/* $.ajax({*/
/* url: 'index.php?route=account/account/zone&zone_id=' + this.value,*/
/* dataType: 'json',*/
/* beforeSend: function () {*/
/* $('select[name=\'zone_id\']').prop('disabled', true);*/
/* },*/
/* complete: function () {*/
/* $('select[name=\'zone_id\']').prop('disabled', false);*/
/* },*/
/* success: function (json) {*/
/* html = '<option value="">    {{ text_select }}</option>';*/
/* */
/* if (json['geo_zone'] && json['geo_zone'] != '') {*/
/* for (i = 0; i < json['geo_zone'].length; i ++) {*/
/* html += '<option value="' + json['geo_zone'][i]['geo_zone_id'] + '"';*/
/* */
/* if (json['geo_zone'][i]['geo_zone_id'] == '{{ geo_zone_id }}') {*/
/* html += ' selected="selected"';*/
/* }*/
/* */
/* html += '>' + json['geo_zone'][i]['name'] + '</option>';*/
/* }*/
/* } else {*/
/* html += '<option value="0" selected="selected">    {{ text_none }}</option>';*/
/* }*/
/* */
/* $('select[name=\'geo_zone_id\']').html(html);*/
/* },*/
/* error: function (xhr, ajaxOptions, thrownError) {*/
/* alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* }*/
/* });*/
/* } else {*/
/* setTimeout(() => {*/
/* $('select[name=\'zone_id\']').trigger('change');*/
/* }, 500);*/
/* }*/
/* */
/* });*/
/* */
/* $('select[name=\'zone_id\']').trigger('change');*/
/* //*/
/* 	-->*/
/* </script>*/
/* <script src="https://maps.googleapis.com/maps/api/js?key={{ googleapikey }}&callback=initMap"*/
/* async*/
/* defer>*/
/* </script>*/
