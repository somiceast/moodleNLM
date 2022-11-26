<?php

class __Mustache_c41185a5462b4e3e8c3e8c4e538a15fc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Begin HTML generated from question_yesno template. -->
';
        // 'qelements' section
        $value = $context->find('qelements');
        $buffer .= $this->section6ce4a57e5476329d5bd949bf652efdc3($context, $indent, $value);
        $buffer .= $indent . '<!-- End HTML generated from question_yesno template. -->';

        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2eb10691007c92bdff260da6f5c039fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled="disabled"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled="disabled"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section319086cf0c7c2c8f73eec6f272bff720(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'onclick="{{onclick}}"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdde174e11d6b18ac3d788b99ead1218(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<input id="{{id}}" value="{{value}}" name="{{name}}" type="radio" {{#checked}}checked="checked"{{/checked}} {{#disabled}}disabled="disabled"{{/disabled}} {{#onclick}}onclick="{{onclick}}"{{/onclick}}/>
<label for="{{id}}">{{{label}}}</label>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<input id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" type="radio" ';
                // 'checked' section
                $value = $context->find('checked');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= ' ';
                // 'disabled' section
                $value = $context->find('disabled');
                $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
                $buffer .= ' ';
                // 'onclick' section
                $value = $context->find('onclick');
                $buffer .= $this->section319086cf0c7c2c8f73eec6f272bff720($context, $indent, $value);
                $buffer .= '/>
';
                $buffer .= $indent . '<label for="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= $value;
                $buffer .= '</label>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ce4a57e5476329d5bd949bf652efdc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#choice}}
<input id="{{id}}" value="{{value}}" name="{{name}}" type="radio" {{#checked}}checked="checked"{{/checked}} {{#disabled}}disabled="disabled"{{/disabled}} {{#onclick}}onclick="{{onclick}}"{{/onclick}}/>
<label for="{{id}}">{{{label}}}</label>
{{/choice}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'choice' section
                $value = $context->find('choice');
                $buffer .= $this->sectionFdde174e11d6b18ac3d788b99ead1218($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
