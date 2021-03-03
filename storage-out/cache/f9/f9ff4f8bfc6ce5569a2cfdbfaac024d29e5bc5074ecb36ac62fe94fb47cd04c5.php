<?php

/* default/template/checkout/payment_address.twig */
class __TwigTemplate_dedcfc98fd418a95337645b24372ccfb97819371f01c89454ee164c775f44845 extends Twig_Template
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
        echo "<form class=\"form-horizontal\">
\t";
        // line 2
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 3
            echo "\t\t<div class=\"radio\">
\t\t\t<label>
\t\t\t\t<input type=\"radio\" name=\"payment_address\" value=\"existing\" checked=\"checked\"/>
\t\t\t\t";
            // line 6
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "</label>
\t\t</div>
\t\t<div id=\"payment-existing\">
\t\t\t<select name=\"address_id\" class=\"form-control\">
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["address"], "address_id", array(), "array") == (isset($context["address_id"]) ? $context["address_id"] : null))) {
                    // line 12
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo "
\t\t\t\t\t\t\t";
                    // line 13
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 14
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 15
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 16
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 17
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo "
\t\t\t\t\t\t\t";
                    // line 20
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 21
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 22
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 23
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ",
\t\t\t\t\t\t\t";
                    // line 24
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"radio\">
\t\t\t<label>
\t\t\t\t<input type=\"radio\" name=\"payment_address\" value=\"new\"/>
\t\t\t\t";
            // line 32
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
\t\t</div>
\t";
        }
        // line 35
        echo "\t<br/>
\t<div id=\"payment-new\" style=\"display: ";
        // line 36
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-firstname\">";
        // line 38
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 40
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-lastname\">";
        // line 44
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 46
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-company\">";
        // line 50
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 52
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-address-1\">";
        // line 56
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 58
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-address-2\">";
        // line 62
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 64
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-city\">";
        // line 68
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 70
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-postcode\">";
        // line 74
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        // line 76
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-country\">";
        // line 80
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
        // line 83
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
\t\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 85
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\">";
            echo $this->getAttribute($context["country"], "name", array());
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-zone\">";
        // line 91
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
        // line 94
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t</select>
\t\t\t\t";
        // line 96
        if ((isset($context["error_zone"]) ? $context["error_zone"] : null)) {
            // line 97
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_zone"]) ? $context["error_zone"] : null);
            echo "</div>
\t\t\t\t";
        }
        // line 99
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-geo-zone\">";
        // line 102
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"geo_zone_id\" id=\"input-payment-geo-zone\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
        // line 105
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t</select>
\t\t\t\t";
        // line 107
        if ((isset($context["error_geo_zone"]) ? $context["error_geo_zone"] : null)) {
            // line 108
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_goe_zone"]) ? $context["error_goe_zone"] : null);
            echo "</div>
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-ltnlng\">";
        // line 113
        echo (isset($context["entry_ltnlng"]) ? $context["entry_ltnlng"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"hidden\" name=\"ltnlng\" value=\"";
        // line 115
        echo (isset($context["ltnlng"]) ? $context["ltnlng"] : null);
        echo "\" id=\"input-payment-ltnlng\" class=\"form-control\"/>
\t\t\t\t<div id=\"map\" style=\"height: 300px\"></div>
\t\t\t\t";
        // line 117
        if ((isset($context["error_ltnlng"]) ? $context["error_ltnlng"] : null)) {
            // line 118
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_ltnlng"]) ? $context["error_ltnlng"] : null);
            echo "</div>
\t\t\t\t";
        }
        // line 120
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 123
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 124
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 125
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"custom_field[";
                // line 127
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">";
                // line 128
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 136
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 137
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 138
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                // line 140
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t\t\t\t\t";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 144
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 152
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 153
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 154
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                // line 156
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t\t\t\t\t";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 158
                    echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 160
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    // line 161
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 168
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 169
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 170
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 172
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
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 176
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 177
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 178
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 180
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
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 184
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 185
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 186
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<button type=\"button\" id=\"button-payment-custom-field";
                // line 188
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t";
                // line 190
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 191
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 195
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 196
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 197
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 200
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
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 210
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 211
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 212
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 215
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
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 225
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 226
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 227
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 230
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
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 240
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "\t</div>
\t<div class=\"buttons clearfix\">
\t\t<div class=\"pull-right\">
\t\t\t<input type=\"button\" value=\"";
        // line 244
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-payment-address\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"/>
\t\t</div>
\t</div>
</form>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('input[name=\\'payment_address\\']').on('change', function () {
if (this.value == 'new') {
\$('#payment-existing').hide();
\$('#payment-new').show();
} else {
\$('#payment-existing').show();
\$('#payment-new').hide();
}
});
//
\t-->
</script>
<script type=\"text/javascript\">
\t<!--
\t// Sort the custom fields
\$('#collapse-payment-address .form-group[data-sort]').detach().each(function () {
if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-payment-address .form-group').length - 2) {
\$('#collapse-payment-address .form-group').eq(parseInt(\$(this).attr('data-sort')) + 2).before(this);
}

if (\$(this).attr('data-sort') > \$('#collapse-payment-address .form-group').length - 2) {
\$('#collapse-payment-address .form-group:last').after(this);
}

if (\$(this).attr('data-sort') == \$('#collapse-payment-address .form-group').length - 2) {
\$('#collapse-payment-address .form-group:last').after(this);
}

if (\$(this).attr('data-sort') < -\$('#collapse-payment-address .form-group').length - 2) {
\$('#collapse-payment-address .form-group:first').before(this);
}
});
//
\t-->
</script>
\t<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function () {
var element = this;

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
\$(element).button('loading');
},
complete: function () {
\$(element).button('reset');
},
success: function (json) {
\$(element).parent().find('.text-danger').remove();

if (json['error']) {
\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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
<script
\ttype=\"text/javascript\">
<!--
\$('.date').datetimepicker({language: '";
        // line 346
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickTime: false});

\$('.time').datetimepicker({language: '";
        // line 348
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickDate: false});

\$('.datetime').datetimepicker({language: '";
        // line 350
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickDate: true, pickTime: true});
//
\t-->
</script>
<script
\ttype=\"text/javascript\">
<!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function () {
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
\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().addClass('required');
} else {
\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
}

html = '<option value=\"\">   ";
        // line 374
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

if (json['zone'] && json['zone'] != '') {
for (i = 0; i < json['zone'].length; i ++) {
html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

html += '>' + json['zone'][i]['name'] + '</option>';
}
} else {
html += '<option value=\"0\" selected=\"selected\">   ";
        // line 383
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

//\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//
\t-->
</script>

<script
\ttype=\"text/javascript\">
<!--
\$('select[name=\\'zone_id\\']').change(function () {
if (this.value) {
\t\t\$.ajax({
\t\turl: 'index.php?route=account/account/zone&zone_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function () {
\t\t\$('select[name=\\'zone_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function () {
\t\t\$('select[name=\\'zone_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function (json) {
\t\thtml = '<option value=\"\">  ";
        // line 414
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\tif (json['geo_zone'] && json['geo_zone'] != '') {
\t\tfor (i = 0; i < json['geo_zone'].length; i ++) {
\t\thtml += '<option value=\"' + json['geo_zone'][i]['geo_zone_id'] + '\"';

\t\tif (json['geo_zone'][i]['geo_zone_id'] == '";
        // line 420
        echo (isset($context["geo_zone_id"]) ? $context["geo_zone_id"] : null);
        echo "') {
\t\thtml += ' selected=\"selected\"';
\t\t}

\t\thtml += '>' + json['geo_zone'][i]['name'] + '</option>';
\t\t}
\t\t} else {
\t\thtml += '<option value=\"0\" selected=\"selected\">  ";
        // line 427
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t}

\t\t\$('select[name=\\'geo_zone_id\\']').html(html);
\t\t},
\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t});
} else {
\t\tsetTimeout(() => {
\t\t\$('select[name=\\'zone_id\\']').trigger('change');
\t\t}, 500);
}

});
//
\t-->
</script>
<script>
var map;
var panamaKml = \"https://losguerra.shop/Panama.kml\"
var _ltn = 9.0026504;
var _lng = -79.512029;
var pos = {
lat: _ltn,
lng: _lng
};
zmm = 13;


function showPosition(position) {
console.log('position from geo location');
pos = {
lat: position.coords.latitude,
lng: position.coords.longitude
}
}

function initMap() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
zmm = 18;
}
map = new google.maps.Map(document.getElementById('map'), {
center: pos,
sensor: true,
zoom: zmm
});

var marker = new google.maps.Marker({position: pos, map: map});

map.addListener('click', function (e) {
marker.setPosition(e.latLng.toJSON());
\$('#input-payment-ltnlng').val(e.latLng.toUrlValue());
});

var kmlLayer = new google.maps.KmlLayer(panamaKml, {
suppressInfoWindows: true,
preserveViewport: true,
map: map
});

kmlLayer.addListener('click', function (event) {
marker.setPosition(event.latLng.toJSON());
\$('#input-payment-ltnlng').val(event.latLng.toUrlValue());
});

}
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 497
        echo (isset($context["googleapikey"]) ? $context["googleapikey"] : null);
        echo "&callback=initMap\"
    async defer></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  998 => 497,  925 => 427,  915 => 420,  906 => 414,  872 => 383,  860 => 374,  833 => 350,  828 => 348,  823 => 346,  716 => 244,  711 => 241,  705 => 240,  684 => 230,  676 => 227,  667 => 226,  664 => 225,  643 => 215,  635 => 212,  626 => 211,  623 => 210,  602 => 200,  594 => 197,  585 => 196,  582 => 195,  571 => 191,  567 => 190,  560 => 188,  555 => 186,  546 => 185,  543 => 184,  528 => 180,  521 => 178,  512 => 177,  509 => 176,  494 => 172,  487 => 170,  478 => 169,  475 => 168,  469 => 164,  460 => 161,  452 => 160,  448 => 158,  444 => 157,  440 => 156,  435 => 154,  426 => 153,  423 => 152,  417 => 148,  408 => 145,  400 => 144,  396 => 142,  392 => 141,  388 => 140,  383 => 138,  374 => 137,  371 => 136,  365 => 132,  354 => 130,  350 => 129,  346 => 128,  338 => 127,  331 => 125,  322 => 124,  319 => 123,  315 => 122,  311 => 120,  305 => 118,  303 => 117,  298 => 115,  293 => 113,  288 => 110,  282 => 108,  280 => 107,  275 => 105,  269 => 102,  264 => 99,  258 => 97,  256 => 96,  251 => 94,  245 => 91,  239 => 87,  228 => 85,  224 => 84,  220 => 83,  214 => 80,  207 => 76,  202 => 74,  195 => 70,  190 => 68,  183 => 64,  178 => 62,  171 => 58,  166 => 56,  159 => 52,  154 => 50,  147 => 46,  142 => 44,  135 => 40,  130 => 38,  121 => 36,  118 => 35,  112 => 32,  105 => 27,  99 => 26,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  43 => 12,  40 => 11,  36 => 10,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form class="form-horizontal">*/
/* 	{% if addresses %}*/
/* 		<div class="radio">*/
/* 			<label>*/
/* 				<input type="radio" name="payment_address" value="existing" checked="checked"/>*/
/* 				{{ text_address_existing }}</label>*/
/* 		</div>*/
/* 		<div id="payment-existing">*/
/* 			<select name="address_id" class="form-control">*/
/* 				{% for address in addresses %}*/
/* 					{% if address['address_id'] == address_id %}*/
/* 						<option value="{{ address.address_id }}" selected="selected">{{ address.firstname }}*/
/* 							{{ address.lastname }},*/
/* 							{{ address.address_1 }},*/
/* 							{{ address.city }},*/
/* 							{{ address.zone }},*/
/* 							{{ address.country }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ address.address_id }}">{{ address.firstname }}*/
/* 							{{ address.lastname }},*/
/* 							{{ address.address_1 }},*/
/* 							{{ address.city }},*/
/* 							{{ address.zone }},*/
/* 							{{ address.country }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* 		<div class="radio">*/
/* 			<label>*/
/* 				<input type="radio" name="payment_address" value="new"/>*/
/* 				{{ text_address_new }}</label>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<br/>*/
/* 	<div id="payment-new" style="display: {% if addresses %}none{% else %}block{% endif %};">*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-payment-firstname" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-company">{{ entry_company }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-payment-company" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-payment-address-1" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-payment-address-2" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-city">{{ entry_city }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-payment-city" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="postcode" value="" placeholder="{{ entry_postcode }}" id="input-payment-postcode" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-country">{{ entry_country }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<select name="country_id" id="input-payment-country" class="form-control">*/
/* 					<option value="">{{ text_select }}</option>*/
/* 					{% for country in countries %}*/
/* 							<option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<select name="zone_id" id="input-payment-zone" class="form-control">*/
/* 					<option value="">{{ text_none }}</option>*/
/* 				</select>*/
/* 				{% if error_zone %}*/
/* 					<div class="text-danger">{{ error_zone }}</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-geo-zone">{{ entry_geo_zone }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<select name="geo_zone_id" id="input-payment-geo-zone" class="form-control">*/
/* 					<option value="">{{ text_none }}</option>*/
/* 				</select>*/
/* 				{% if error_geo_zone %}*/
/* 					<div class="text-danger">{{ error_goe_zone }}</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-payment-ltnlng">{{ entry_ltnlng }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="hidden" name="ltnlng" value="{{ ltnlng }}" id="input-payment-ltnlng" class="form-control"/>*/
/* 				<div id="map" style="height: 300px"></div>*/
/* 				{% if error_ltnlng %}*/
/* 					<div class="text-danger">{{ error_ltnlng }}</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		{% for custom_field in custom_fields %}*/
/* 			{% if custom_field.type == 'select' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/* 							<option value="">{{ text_select }}</option>*/
/* 							{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'radio' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 							{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<div class="radio">*/
/* 									<label>*/
/* 										<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/* 										{{ custom_field_value.name }}</label>*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'checkbox' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 							{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<div class="checkbox">*/
/* 									<label>*/
/* 										<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/* 										{{ custom_field_value.name }}</label>*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'text' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'textarea' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'file' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default">*/
/* 							<i class="fa fa-upload"></i>*/
/* 							{{ button_upload }}</button>*/
/* 						<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}"/>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'date' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="input-group date">*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 							<span class="input-group-btn">*/
/* 								<button type="button" class="btn btn-default">*/
/* 									<i class="fa fa-calendar"></i>*/
/* 								</button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'time' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="input-group time">*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 							<span class="input-group-btn">*/
/* 								<button type="button" class="btn btn-default">*/
/* 									<i class="fa fa-calendar"></i>*/
/* 								</button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'time' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="input-group datetime">*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 							<span class="input-group-btn">*/
/* 								<button type="button" class="btn btn-default">*/
/* 									<i class="fa fa-calendar"></i>*/
/* 								</button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	<div class="buttons clearfix">*/
/* 		<div class="pull-right">*/
/* 			<input type="button" value="{{ button_continue }}" id="button-payment-address" data-loading-text="{{ text_loading }}" class="btn btn-primary"/>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* <script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('input[name=\'payment_address\']').on('change', function () {*/
/* if (this.value == 'new') {*/
/* $('#payment-existing').hide();*/
/* $('#payment-new').show();*/
/* } else {*/
/* $('#payment-existing').show();*/
/* $('#payment-new').hide();*/
/* }*/
/* });*/
/* //*/
/* 	-->*/
/* </script>*/
/* <script type="text/javascript">*/
/* 	<!--*/
/* 	// Sort the custom fields*/
/* $('#collapse-payment-address .form-group[data-sort]').detach().each(function () {*/
/* if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-payment-address .form-group').length - 2) {*/
/* $('#collapse-payment-address .form-group').eq(parseInt($(this).attr('data-sort')) + 2).before(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') > $('#collapse-payment-address .form-group').length - 2) {*/
/* $('#collapse-payment-address .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') == $('#collapse-payment-address .form-group').length - 2) {*/
/* $('#collapse-payment-address .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') < -$('#collapse-payment-address .form-group').length - 2) {*/
/* $('#collapse-payment-address .form-group:first').before(this);*/
/* }*/
/* });*/
/* //*/
/* 	-->*/
/* </script>*/
/* 	<script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function () {*/
/* var element = this;*/
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
/* $(element).button('loading');*/
/* },*/
/* complete: function () {*/
/* $(element).button('reset');*/
/* },*/
/* success: function (json) {*/
/* $(element).parent().find('.text-danger').remove();*/
/* */
/* if (json['error']) {*/
/* $(element).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* }*/
/* */
/* if (json['success']) {*/
/* alert(json['success']);*/
/* */
/* $(element).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
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
/* <script*/
/* 	type="text/javascript">*/
/* <!--*/
/* $('.date').datetimepicker({language: '{{ datepicker }}', pickTime: false});*/
/* */
/* $('.time').datetimepicker({language: '{{ datepicker }}', pickDate: false});*/
/* */
/* $('.datetime').datetimepicker({language: '{{ datepicker }}', pickDate: true, pickTime: true});*/
/* //*/
/* 	-->*/
/* </script>*/
/* <script*/
/* 	type="text/javascript">*/
/* <!--*/
/* $('#collapse-payment-address select[name=\'country_id\']').on('change', function () {*/
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
/* $('#collapse-payment-address input[name=\'postcode\']').parent().parent().addClass('required');*/
/* } else {*/
/* $('#collapse-payment-address input[name=\'postcode\']').parent().parent().removeClass('required');*/
/* }*/
/* */
/* html = '<option value="">   {{ text_select }}</option>';*/
/* */
/* if (json['zone'] && json['zone'] != '') {*/
/* for (i = 0; i < json['zone'].length; i ++) {*/
/* html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* html += '>' + json['zone'][i]['name'] + '</option>';*/
/* }*/
/* } else {*/
/* html += '<option value="0" selected="selected">   {{ text_none }}</option>';*/
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
/* //$('#collapse-payment-address select[name=\'country_id\']').trigger('change');*/
/* //*/
/* 	-->*/
/* </script>*/
/* */
/* <script*/
/* 	type="text/javascript">*/
/* <!--*/
/* $('select[name=\'zone_id\']').change(function () {*/
/* if (this.value) {*/
/* 		$.ajax({*/
/* 		url: 'index.php?route=account/account/zone&zone_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function () {*/
/* 		$('select[name=\'zone_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function () {*/
/* 		$('select[name=\'zone_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function (json) {*/
/* 		html = '<option value="">  {{ text_select }}</option>';*/
/* */
/* 		if (json['geo_zone'] && json['geo_zone'] != '') {*/
/* 		for (i = 0; i < json['geo_zone'].length; i ++) {*/
/* 		html += '<option value="' + json['geo_zone'][i]['geo_zone_id'] + '"';*/
/* */
/* 		if (json['geo_zone'][i]['geo_zone_id'] == '{{ geo_zone_id }}') {*/
/* 		html += ' selected="selected"';*/
/* 		}*/
/* */
/* 		html += '>' + json['geo_zone'][i]['name'] + '</option>';*/
/* 		}*/
/* 		} else {*/
/* 		html += '<option value="0" selected="selected">  {{ text_none }}</option>';*/
/* 		}*/
/* */
/* 		$('select[name=\'geo_zone_id\']').html(html);*/
/* 		},*/
/* 		error: function (xhr, ajaxOptions, thrownError) {*/
/* 		alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		});*/
/* } else {*/
/* 		setTimeout(() => {*/
/* 		$('select[name=\'zone_id\']').trigger('change');*/
/* 		}, 500);*/
/* }*/
/* */
/* });*/
/* //*/
/* 	-->*/
/* </script>*/
/* <script>*/
/* var map;*/
/* var panamaKml = "https://losguerra.shop/Panama.kml"*/
/* var _ltn = 9.0026504;*/
/* var _lng = -79.512029;*/
/* var pos = {*/
/* lat: _ltn,*/
/* lng: _lng*/
/* };*/
/* zmm = 13;*/
/* */
/* */
/* function showPosition(position) {*/
/* console.log('position from geo location');*/
/* pos = {*/
/* lat: position.coords.latitude,*/
/* lng: position.coords.longitude*/
/* }*/
/* }*/
/* */
/* function initMap() {*/
/* if (navigator.geolocation) {*/
/* navigator.geolocation.getCurrentPosition(showPosition);*/
/* zmm = 18;*/
/* }*/
/* map = new google.maps.Map(document.getElementById('map'), {*/
/* center: pos,*/
/* sensor: true,*/
/* zoom: zmm*/
/* });*/
/* */
/* var marker = new google.maps.Marker({position: pos, map: map});*/
/* */
/* map.addListener('click', function (e) {*/
/* marker.setPosition(e.latLng.toJSON());*/
/* $('#input-payment-ltnlng').val(e.latLng.toUrlValue());*/
/* });*/
/* */
/* var kmlLayer = new google.maps.KmlLayer(panamaKml, {*/
/* suppressInfoWindows: true,*/
/* preserveViewport: true,*/
/* map: map*/
/* });*/
/* */
/* kmlLayer.addListener('click', function (event) {*/
/* marker.setPosition(event.latLng.toJSON());*/
/* $('#input-payment-ltnlng').val(event.latLng.toUrlValue());*/
/* });*/
/* */
/* }*/
/* </script>*/
/* <script src="https://maps.googleapis.com/maps/api/js?key={{ googleapikey }}&callback=initMap"*/
/*     async defer></script>*/
/* */
