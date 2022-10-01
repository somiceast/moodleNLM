<?php

class __Mustache_4369b1cf0fe9ec04ed7bf6f6b7b0a693 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav id="competency-path-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <small>
';
        // 'showlinks' section
        $value = $context->find('showlinks');
        $buffer .= $this->section89461f3112515218d8bf0756b19ea2a3($context, $indent, $value);
        // 'showlinks' inverted section
        $value = $context->find('showlinks');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->findDot('framework.name'), $context);
            $buffer .= $value;
            $buffer .= '
';
        }
        $buffer .= $indent . '        /
';
        // 'ancestors' section
        $value = $context->find('ancestors');
        $buffer .= $this->sectionBcc4cdddde5982f91d2f7d52825984e7($context, $indent, $value);
        $buffer .= $indent . '    </small>
';
        $buffer .= $indent . '</nav>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section7657092d23e6efc54f71bd8bdf6481a3($context, $indent, $value);

        return $buffer;
    }

    private function section89461f3112515218d8bf0756b19ea2a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{pluginbaseurl}}/competencies.php?competencyframeworkid={{framework.id}}&pagecontextid={{pagecontextid}}" >
            {{{framework.name}}}
        </a>
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
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/competencies.php?competencyframeworkid=';
                $value = $this->resolveValue($context->findDot('framework.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" >
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('framework.name'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd2ac28b5fa33c20d6194c5799a7f17a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{pluginbaseurl}}/competencies.php?competencyid={{id}}">
                {{{name}}}
            </a>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/competencies.php?competencyid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcc4cdddde5982f91d2f7d52825984e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#showlinks}}
            <a href="{{pluginbaseurl}}/competencies.php?competencyid={{id}}">
                {{{name}}}
            </a>
            {{/showlinks}}
            {{^showlinks}}
                {{{name}}}
            {{/showlinks}}
            {{^last}}<span> / </span>{{/last}}
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
                
                // 'showlinks' section
                $value = $context->find('showlinks');
                $buffer .= $this->sectionAd2ac28b5fa33c20d6194c5799a7f17a($context, $indent, $value);
                // 'showlinks' inverted section
                $value = $context->find('showlinks');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $buffer .= $indent . '            ';
                // 'last' inverted section
                $value = $context->find('last');
                if (empty($value)) {
                    
                    $buffer .= '<span> / </span>';
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7657092d23e6efc54f71bd8bdf6481a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencydialogue\'], function(Compdialogue) {
    Compdialogue.init();
});
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
                
                $buffer .= $indent . 'require([\'tool_lp/competencydialogue\'], function(Compdialogue) {
';
                $buffer .= $indent . '    Compdialogue.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
