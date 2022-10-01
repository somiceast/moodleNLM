<?php

class __Mustache_ad1218be9430d6c066dddb9d8c942110 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class=\'competency-heading\'>
';
        $buffer .= $indent . '    <h4 id="competency_link_';
        $value = $this->resolveValue($context->findDot('competency.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        <small>
';
        // 'showlinks' section
        $value = $context->find('showlinks');
        $buffer .= $this->section97ddbd8db13a1fba57a2395b4c768c3a($context, $indent, $value);
        // 'showlinks' inverted section
        $value = $context->find('showlinks');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </small>
';
        $buffer .= $indent . '    </h4>
';
        // 'framework' section
        $value = $context->find('framework');
        $buffer .= $this->section6269fbb314dd252b36748e5f9161e521($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'competency.description' section
        $value = $context->findDot('competency.description');
        $buffer .= $this->sectionB65d6b253c94370fb1bd0061a9a4b4ba($context, $indent, $value);
        // 'comppath' section
        $value = $context->find('comppath');
        $buffer .= $this->section7726c71f2a12e5869b10a21be9fe10a7($context, $indent, $value);
        // 'showrelatedcompetencies' section
        $value = $context->find('showrelatedcompetencies');
        $buffer .= $this->sectionCdf3d66887fa4004ef3a630962b2f22f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'showrule' section
        $value = $context->find('showrule');
        $buffer .= $this->section4ff75ab905a1674cfa99e2829f7a0208($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section97ddbd8db13a1fba57a2395b4c768c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{pluginbaseurl}}/competencies.php?competencyid={{competency.id}}">{{competency.idnumber}}</a>
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
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6269fbb314dd252b36748e5f9161e521(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class=\'competency-origin\'>
            <p><small>{{{framework.shortname}}} - {{taxonomyterm}}</small>
        </div>
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
                
                $buffer .= $indent . '        <div class=\'competency-origin\'>
';
                $buffer .= $indent . '            <p><small>';
                $value = $this->resolveValue($context->findDot('framework.shortname'), $context);
                $buffer .= $value;
                $buffer .= ' - ';
                $value = $this->resolveValue($context->find('taxonomyterm'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB65d6b253c94370fb1bd0061a9a4b4ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<p>{{{competency.description}}}</p>
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
                
                $buffer .= $indent . '<p>';
                $value = $this->resolveValue($context->findDot('competency.description'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db15ba4d8fa7764751fbbe00561fbe0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'path, tool_lp';
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
                
                $buffer .= 'path, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7726c71f2a12e5869b10a21be9fe10a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="float-left">{{#str}}path, tool_lp{{/str}}&nbsp;</span>{{> tool_lp/competency_path }}
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
                
                $buffer .= $indent . '    <span class="float-left">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5db15ba4d8fa7764751fbbe00561fbe0($context, $indent, $value);
                $buffer .= '&nbsp;</span>';
                if ($partial = $this->mustache->loadPartial('tool_lp/competency_path')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdf3d66887fa4004ef3a630962b2f22f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> tool_lp/related_competencies }}
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
                
                if ($partial = $this->mustache->loadPartial('tool_lp/related_competencies')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3103fb48ab4f3b6ec40803419f475e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competencyrule, tool_lp';
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
                
                $buffer .= 'competencyrule, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24b5df12417019cc5f304d91b2e346c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'outcome, tool_lp';
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
                
                $buffer .= 'outcome, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc736d8c3589cba544eab7b8aaad922e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'when, tool_lp';
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
                
                $buffer .= 'when, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ff75ab905a1674cfa99e2829f7a0208(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h5>{{#str}}competencyrule, tool_lp{{/str}}</h5>
    <dl>
        <dt>{{#str}}outcome, tool_lp{{/str}}</dt>
        <dd>{{rule.outcome}}</dd>
        <dt>{{#str}}when, tool_lp{{/str}}</dt>
        <dd>{{rule.type}}</dd>
    </dl>
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
                
                $buffer .= $indent . '    <h5>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF3103fb48ab4f3b6ec40803419f475e2($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '    <dl>
';
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section24b5df12417019cc5f304d91b2e346c3($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd>';
                $value = $this->resolveValue($context->findDot('rule.outcome'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</dd>
';
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBc736d8c3589cba544eab7b8aaad922e($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd>';
                $value = $this->resolveValue($context->findDot('rule.type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</dd>
';
                $buffer .= $indent . '    </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
