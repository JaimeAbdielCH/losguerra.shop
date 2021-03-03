<?php

/* default/template/checkout/shipping_address.twig */
class __TwigTemplate_7362e989d04a8e71b2e0f7ab06f33d2b9fa231f503e1f0fc2c3cd867ecdf6a20 extends Twig_Template
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
\t\t\t\t<input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\"/>
\t\t\t\t";
            // line 6
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "</label>
\t\t</div>
\t\t<div id=\"shipping-existing\">
\t\t\t<select name=\"address_id\" class=\"form-control\">
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null))) {
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
\t\t\t\t<input type=\"radio\" name=\"shipping_address\" value=\"new\"/>
\t\t\t\t";
            // line 32
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
\t\t</div>
\t";
        }
        // line 35
        echo "\t<br/>
\t<div id=\"shipping-new\" style=\"display: ";
        // line 36
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 38
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 40
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 44
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 46
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 50
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 52
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 56
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 58
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 62
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 64
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 68
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 70
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 74
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"postcode\" value=\"";
        // line 76
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 80
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
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
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 91
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\"></select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-geo-zone\">";
        // line 97
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"geo_zone_id\" id=\"input-shipping-geo-zone\" class=\"form-control\"></select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-ltnlng\">";
        // line 103
        echo (isset($context["entry_ltnlng"]) ? $context["entry_ltnlng"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"hidden\" name=\"ltnlng\" value=\"";
        // line 105
        echo (isset($context["ltnlng"]) ? $context["ltnlng"] : null);
        echo "\" id=\"input-shipping-ltnlng\" class=\"form-control\"/>
\t\t\t\t<div id=\"shipment_map\" style=\"height: 300px\"></div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 110
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 111
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 112
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"custom_field[";
                // line 114
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">";
                // line 115
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 117
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
                // line 119
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 123
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 124
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 125
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div id=\"input-shipping-custom-field";
                // line 127
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t\t\t\t\t";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 131
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    // line 132
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 139
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 140
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 141
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div id=\"input-shipping-custom-field";
                // line 143
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t\t\t\t\t";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 147
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 155
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 156
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 157
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 159
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 163
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 164
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 165
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 167
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 171
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 172
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 173
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<button type=\"button\" id=\"button-shipping-custom-field";
                // line 175
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t";
                // line 177
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 178
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 182
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 183
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 184
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 187
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
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
            // line 197
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 198
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 199
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 202
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
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
            // line 212
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 213
                echo "\t\t\t\t<div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 214
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 217
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
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
            // line 227
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "\t</div>
\t<div class=\"buttons clearfix\">
\t\t<div class=\"pull-right\">
\t\t\t<input type=\"button\" value=\"";
        // line 231
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-shipping-address\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"/>
\t\t</div>
\t</div>
</form>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('input[name=\\'shipping_address\\']').on('change', function () {
\t\tif (this.value == 'new') {
\t\t\$('#shipping-existing').hide();
\t\t\$('#shipping-new').show();
\t\t} else {
\t\t\$('#shipping-existing').show();
\t\t\$('#shipping-new').hide();
\t\t}
\t});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#collapse-shipping-address .form-group[data-sort]').detach().each(function () {
if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-shipping-address .form-group').length - 2) {
\$('#collapse-shipping-address .form-group').eq(parseInt(\$(this).attr('data-sort')) + 2).before(this);
}

if (\$(this).attr('data-sort') > \$('#collapse-shipping-address .form-group').length - 2) {
\$('#collapse-shipping-address .form-group:last').after(this);
}

if (\$(this).attr('data-sort') == \$('#collapse-shipping-address .form-group').length - 2) {
\$('#collapse-shipping-address .form-group:last').after(this);
}

if (\$(this).attr('data-sort') < -\$('#collapse-shipping-address .form-group').length - 2) {
\$('#collapse-shipping-address .form-group:first').before(this);
}
});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#collapse-shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function () {
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
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 327
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickTime: false});

\$('.time').datetimepicker({language: '";
        // line 329
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickDate: false});

\$('.datetime').datetimepicker({language: '";
        // line 331
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "', pickDate: true, pickTime: true});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\tconsole.log('country on change');
\$('#collapse-shipping-address select[name=\\'country_id\\']').on('change', function () {
\t\$.ajax({
\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\tdataType: 'json',
\tbeforeSend: function () {
\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', true);
\t},
\tcomplete: function () {
\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', false);
\t},
\tsuccess: function (json) {
\t\tconsole.log('ajax success');
\t\tif (json['postcode_required'] == '1') {
\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t} else {
\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t}

\t\thtml = '<option value=\"\"> ";
        // line 355
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\tif (json['zone'] && json['zone'] != '') {
\t\tfor (i = 0; i < json['zone'].length; i ++) {
\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t}
\t\t} else {
\t\thtml += '<option value=\"0\" selected=\"selected\"> ";
        // line 364
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t}

\t\t\$('#collapse-shipping-address select[name=\\'zone_id\\']').html(html);
\t},
\terror: function (xhr, ajaxOptions, thrownError) {
\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t}
});\t
});

//\$('#collapse-shipping-address select[name=\\'country_id\\']').trigger('change');
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('select[name=\\'zone_id\\']').change(function () {
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
            html = '<option value=\"\">   ";
        // line 392
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

            if (json['geo_zone'] && json['geo_zone'] != '') {
            for (i = 0; i < json['geo_zone'].length; i ++) {
            html += '<option value=\"' + json['geo_zone'][i]['geo_zone_id'] + '\"';

            if (json['geo_zone'][i]['geo_zone_id'] == '";
        // line 398
        echo (isset($context["geo_zone_id"]) ? $context["geo_zone_id"] : null);
        echo "') {
            html += ' selected=\"selected\"';
            }

            html += '>' + json['geo_zone'][i]['name'] + '</option>';
            }
            } else {
            html += '<option value=\"0\" selected=\"selected\">   ";
        // line 405
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
//
\t-->
</script>
<script>
\tvar shipment_map;
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

function init_shipment_map_Map() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
zmm = 18;
}
shipment_map = new google.maps.Map(document.getElementById('shipment_map'), {
center: pos,
sensor: true,
zoom: zmm
});

var marker = new google.maps.Marker({position: pos, map: shipment_map});

shipment_map.addListener('click', function (e) {
  console.log('map listener');
marker.setPosition(e.latLng.toJSON());
console.log(e.latLng.toUrlValue());
\$('#input-shipping-ltnlng').val(e.latLng.toUrlValue());
});

var kmlLayer = new google.maps.KmlLayer(panamaKml, {
suppressInfoWindows: true,
preserveViewport: true,
map: shipment_map
});

kmlLayer.addListener('click', function (event) {
marker.setPosition(event.latLng.toJSON());
console.log('kmllayer click');
console.log(event.latLng.toUrlValue());
\$('#input-shipping-ltnlng').val(event.latLng.toUrlValue());
});

}
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 478
        echo (isset($context["googleapikey"]) ? $context["googleapikey"] : null);
        echo "&callback=init_shipment_map_Map\" async defer></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  954 => 478,  878 => 405,  868 => 398,  859 => 392,  828 => 364,  816 => 355,  789 => 331,  784 => 329,  779 => 327,  678 => 231,  673 => 228,  667 => 227,  646 => 217,  638 => 214,  629 => 213,  626 => 212,  605 => 202,  597 => 199,  588 => 198,  585 => 197,  564 => 187,  556 => 184,  547 => 183,  544 => 182,  533 => 178,  529 => 177,  522 => 175,  517 => 173,  508 => 172,  505 => 171,  490 => 167,  483 => 165,  474 => 164,  471 => 163,  456 => 159,  449 => 157,  440 => 156,  437 => 155,  431 => 151,  422 => 148,  414 => 147,  410 => 145,  406 => 144,  402 => 143,  397 => 141,  388 => 140,  385 => 139,  379 => 135,  370 => 132,  362 => 131,  358 => 129,  354 => 128,  350 => 127,  345 => 125,  336 => 124,  333 => 123,  327 => 119,  316 => 117,  312 => 116,  308 => 115,  300 => 114,  293 => 112,  284 => 111,  281 => 110,  277 => 109,  270 => 105,  265 => 103,  256 => 97,  247 => 91,  241 => 87,  230 => 85,  226 => 84,  222 => 83,  216 => 80,  207 => 76,  202 => 74,  195 => 70,  190 => 68,  183 => 64,  178 => 62,  171 => 58,  166 => 56,  159 => 52,  154 => 50,  147 => 46,  142 => 44,  135 => 40,  130 => 38,  121 => 36,  118 => 35,  112 => 32,  105 => 27,  99 => 26,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  43 => 12,  40 => 11,  36 => 10,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form class="form-horizontal">*/
/* 	{% if addresses %}*/
/* 		<div class="radio">*/
/* 			<label>*/
/* 				<input type="radio" name="shipping_address" value="existing" checked="checked"/>*/
/* 				{{ text_address_existing }}</label>*/
/* 		</div>*/
/* 		<div id="shipping-existing">*/
/* 			<select name="address_id" class="form-control">*/
/* 				{% for address in addresses %}*/
/* 					{% if address.address_id == address_id %}*/
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
/* 				<input type="radio" name="shipping_address" value="new"/>*/
/* 				{{ text_address_new }}</label>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<br/>*/
/* 	<div id="shipping-new" style="display: {% if addresses %}none{% else %}block{% endif %};">*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-firstname">{{ entry_firstname }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-shipping-firstname" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-lastname">{{ entry_lastname }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-shipping-lastname" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-company">{{ entry_company }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-shipping-company" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-address-1">{{ entry_address_1 }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-shipping-address-1" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-address-2">{{ entry_address_2 }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-shipping-address-2" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-city">{{ entry_city }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-shipping-city" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-postcode">{{ entry_postcode }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-shipping-postcode" class="form-control"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-country">{{ entry_country }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<select name="country_id" id="input-shipping-country" class="form-control">*/
/* 					<option value="">{{ text_select }}</option>*/
/* 					{% for country in countries %}*/
/* 							<option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-zone">{{ entry_zone }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<select name="zone_id" id="input-shipping-zone" class="form-control"></select>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-geo-zone">{{ entry_geo_zone }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<select name="geo_zone_id" id="input-shipping-geo-zone" class="form-control"></select>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-shipping-ltnlng">{{ entry_ltnlng }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="hidden" name="ltnlng" value="{{ ltnlng }}" id="input-shipping-ltnlng" class="form-control"/>*/
/* 				<div id="shipment_map" style="height: 300px"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% for custom_field in custom_fields %}*/
/* 			{% if custom_field.type == 'select' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
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
/* 						<div id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
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
/* 						<div id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
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
/* 					<label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'textarea' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'file' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<button type="button" id="button-shipping-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default">*/
/* 							<i class="fa fa-upload"></i>*/
/* 							{{ button_upload }}</button>*/
/* 						<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-shipping-custom-field{{ custom_field.custom_field_id }}"/>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'date' %}*/
/* 				<div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 					<label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="input-group date">*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
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
/* 					<label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="input-group time">*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
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
/* 					<label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="input-group datetime">*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
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
/* 			<input type="button" value="{{ button_continue }}" id="button-shipping-address" data-loading-text="{{ text_loading }}" class="btn btn-primary"/>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* <script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('input[name=\'shipping_address\']').on('change', function () {*/
/* 		if (this.value == 'new') {*/
/* 		$('#shipping-existing').hide();*/
/* 		$('#shipping-new').show();*/
/* 		} else {*/
/* 		$('#shipping-existing').show();*/
/* 		$('#shipping-new').hide();*/
/* 		}*/
/* 	});*/
/* //--></script>*/
/* <script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('#collapse-shipping-address .form-group[data-sort]').detach().each(function () {*/
/* if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-shipping-address .form-group').length - 2) {*/
/* $('#collapse-shipping-address .form-group').eq(parseInt($(this).attr('data-sort')) + 2).before(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') > $('#collapse-shipping-address .form-group').length - 2) {*/
/* $('#collapse-shipping-address .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') == $('#collapse-shipping-address .form-group').length - 2) {*/
/* $('#collapse-shipping-address .form-group:last').after(this);*/
/* }*/
/* */
/* if ($(this).attr('data-sort') < -$('#collapse-shipping-address .form-group').length - 2) {*/
/* $('#collapse-shipping-address .form-group:first').before(this);*/
/* }*/
/* });*/
/* //--></script>*/
/* <script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('#collapse-shipping-address button[id^=\'button-shipping-custom-field\']').on('click', function () {*/
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
/* //--></script>*/
/* <script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('.date').datetimepicker({language: '{{ datepicker }}', pickTime: false});*/
/* */
/* $('.time').datetimepicker({language: '{{ datepicker }}', pickDate: false});*/
/* */
/* $('.datetime').datetimepicker({language: '{{ datepicker }}', pickDate: true, pickTime: true});*/
/* //--></script>*/
/* <script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	console.log('country on change');*/
/* $('#collapse-shipping-address select[name=\'country_id\']').on('change', function () {*/
/* 	$.ajax({*/
/* 	url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/* 	dataType: 'json',*/
/* 	beforeSend: function () {*/
/* 	$('#collapse-shipping-address select[name=\'country_id\']').prop('disabled', true);*/
/* 	},*/
/* 	complete: function () {*/
/* 	$('#collapse-shipping-address select[name=\'country_id\']').prop('disabled', false);*/
/* 	},*/
/* 	success: function (json) {*/
/* 		console.log('ajax success');*/
/* 		if (json['postcode_required'] == '1') {*/
/* 			$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().addClass('required');*/
/* 		} else {*/
/* 			$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().removeClass('required');*/
/* 		}*/
/* */
/* 		html = '<option value=""> {{ text_select }}</option>';*/
/* */
/* 		if (json['zone'] && json['zone'] != '') {*/
/* 		for (i = 0; i < json['zone'].length; i ++) {*/
/* 		html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 		html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 		}*/
/* 		} else {*/
/* 		html += '<option value="0" selected="selected"> {{ text_none }}</option>';*/
/* 		}*/
/* */
/* 		$('#collapse-shipping-address select[name=\'zone_id\']').html(html);*/
/* 	},*/
/* 	error: function (xhr, ajaxOptions, thrownError) {*/
/* 		alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 	}*/
/* });	*/
/* });*/
/* */
/* //$('#collapse-shipping-address select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/
/* <script*/
/* 	type="text/javascript">*/
/* 	<!--*/
/* 	$('select[name=\'zone_id\']').change(function () {*/
/*       if (this.value) {*/
/*             $.ajax({*/
/*             url: 'index.php?route=account/account/zone&zone_id=' + this.value,*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*             $('select[name=\'zone_id\']').prop('disabled', true);*/
/*             },*/
/*             complete: function () {*/
/*             $('select[name=\'zone_id\']').prop('disabled', false);*/
/*             },*/
/*             success: function (json) {*/
/*             html = '<option value="">   {{ text_select }}</option>';*/
/* */
/*             if (json['geo_zone'] && json['geo_zone'] != '') {*/
/*             for (i = 0; i < json['geo_zone'].length; i ++) {*/
/*             html += '<option value="' + json['geo_zone'][i]['geo_zone_id'] + '"';*/
/* */
/*             if (json['geo_zone'][i]['geo_zone_id'] == '{{ geo_zone_id }}') {*/
/*             html += ' selected="selected"';*/
/*             }*/
/* */
/*             html += '>' + json['geo_zone'][i]['name'] + '</option>';*/
/*             }*/
/*             } else {*/
/*             html += '<option value="0" selected="selected">   {{ text_none }}</option>';*/
/*             }*/
/* */
/*             $('select[name=\'geo_zone_id\']').html(html);*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*             });*/
/*       } else {*/
/*             setTimeout(() => {*/
/*             $('select[name=\'zone_id\']').trigger('change');*/
/*             }, 500);*/
/*       }*/
/* });*/
/* //*/
/* 	-->*/
/* </script>*/
/* <script>*/
/* 	var shipment_map;*/
/* var panamaKml = "https://losguerra.shop/Panama.kml"*/
/* var _ltn = 9.0026504;*/
/* var _lng = -79.512029;*/
/* var pos = {*/
/*             lat: _ltn,*/
/*             lng: _lng*/
/*           };*/
/* zmm = 13;*/
/* */
/* */
/* function showPosition(position) {*/
/* console.log('position from geo location');*/
/* pos = {*/
/*         lat: position.coords.latitude,*/
/*         lng: position.coords.longitude*/
/*       }*/
/* }*/
/* */
/* function init_shipment_map_Map() {*/
/* if (navigator.geolocation) {*/
/* navigator.geolocation.getCurrentPosition(showPosition);*/
/* zmm = 18;*/
/* }*/
/* shipment_map = new google.maps.Map(document.getElementById('shipment_map'), {*/
/* center: pos,*/
/* sensor: true,*/
/* zoom: zmm*/
/* });*/
/* */
/* var marker = new google.maps.Marker({position: pos, map: shipment_map});*/
/* */
/* shipment_map.addListener('click', function (e) {*/
/*   console.log('map listener');*/
/* marker.setPosition(e.latLng.toJSON());*/
/* console.log(e.latLng.toUrlValue());*/
/* $('#input-shipping-ltnlng').val(e.latLng.toUrlValue());*/
/* });*/
/* */
/* var kmlLayer = new google.maps.KmlLayer(panamaKml, {*/
/* suppressInfoWindows: true,*/
/* preserveViewport: true,*/
/* map: shipment_map*/
/* });*/
/* */
/* kmlLayer.addListener('click', function (event) {*/
/* marker.setPosition(event.latLng.toJSON());*/
/* console.log('kmllayer click');*/
/* console.log(event.latLng.toUrlValue());*/
/* $('#input-shipping-ltnlng').val(event.latLng.toUrlValue());*/
/* });*/
/* */
/* }*/
/* </script>*/
/* <script src="https://maps.googleapis.com/maps/api/js?key={{ googleapikey }}&callback=init_shipment_map_Map" async defer></script>*/
/* */
