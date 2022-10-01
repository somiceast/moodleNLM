<?php

class __Mustache_bbe70fc48edacbae6c5555f1975a8962 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        // 'hasplans' section
        $value = $context->find('hasplans');
        $buffer .= $this->sectionE22d9200f7c9963e35fcf38ed3298255($context, $indent, $value);
        // 'hascompstoreview' section
        $value = $context->find('hascompstoreview');
        $buffer .= $this->sectionAd088837b5be3b9e820b1ea5178b8a34($context, $indent, $value);
        // 'hasplanstoreview' section
        $value = $context->find('hasplanstoreview');
        $buffer .= $this->section85cafcacccca6590913c059f412ae3d8($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3495f1b1237aa3a0c2a8e570983d2a20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'myplans, block_lp';
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
                
                $buffer .= 'myplans, block_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5227aafce407b931f297e4d8c2352a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li><a href="{{url}}">{{{name}}}</a></li>
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
                
                $buffer .= $indent . '                        <li><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDdc45bc7d77834619709c7d48308b431(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewmore, block_lp';
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
                
                $buffer .= 'viewmore, block_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section175bb980313f4c1d2234619d70a33148(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="more"><a href="{{plansurl}}">{{#str}}viewmore, block_lp{{/str}}</a></li>
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
                
                $buffer .= $indent . '                        <li class="more"><a href="';
                $value = $this->resolveValue($context->find('plansurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDdc45bc7d77834619709c7d48308b431($context, $indent, $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE992feaa3e23bbe22073fbb4c38e19b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <ul>
                    {{#activeplans}}
                        <li><a href="{{url}}">{{{name}}}</a></li>
                    {{/activeplans}}
                    {{#hasmoreplans}}
                        <li class="more"><a href="{{plansurl}}">{{#str}}viewmore, block_lp{{/str}}</a></li>
                    {{/hasmoreplans}}
                </ul>
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
                
                $buffer .= $indent . '                <ul>
';
                // 'activeplans' section
                $value = $context->find('activeplans');
                $buffer .= $this->sectionE5227aafce407b931f297e4d8c2352a9($context, $indent, $value);
                // 'hasmoreplans' section
                $value = $context->find('hasmoreplans');
                $buffer .= $this->section175bb980313f4c1d2234619d70a33148($context, $indent, $value);
                $buffer .= $indent . '                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6344f7597f0f598cfe71462ad412899a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noactiveplans, block_lp';
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
                
                $buffer .= 'noactiveplans, block_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section776fb5567a4573c2c3c5a30c7b5d9a5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewotherplans, block_lp';
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
                
                $buffer .= 'viewotherplans, block_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE22d9200f7c9963e35fcf38ed3298255(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3>{{#str}}myplans, block_lp{{/str}}</h3>
        <div class="sub-content">
            {{#hasactiveplans}}
                <ul>
                    {{#activeplans}}
                        <li><a href="{{url}}">{{{name}}}</a></li>
                    {{/activeplans}}
                    {{#hasmoreplans}}
                        <li class="more"><a href="{{plansurl}}">{{#str}}viewmore, block_lp{{/str}}</a></li>
                    {{/hasmoreplans}}
                </ul>
            {{/hasactiveplans}}
            {{^hasactiveplans}}
                <p>{{#str}}noactiveplans, block_lp{{/str}} <a href="{{plansurl}}">{{#str}}viewotherplans, block_lp{{/str}}</a></p>
            {{/hasactiveplans}}
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
                
                $buffer .= $indent . '        <h3>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3495f1b1237aa3a0c2a8e570983d2a20($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <div class="sub-content">
';
                // 'hasactiveplans' section
                $value = $context->find('hasactiveplans');
                $buffer .= $this->sectionE992feaa3e23bbe22073fbb4c38e19b2($context, $indent, $value);
                // 'hasactiveplans' inverted section
                $value = $context->find('hasactiveplans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <p>';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section6344f7597f0f598cfe71462ad412899a($context, $indent, $value);
                    $buffer .= ' <a href="';
                    $value = $this->resolveValue($context->find('plansurl'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section776fb5567a4573c2c3c5a30c7b5d9a5e($context, $indent, $value);
                    $buffer .= '</a></p>
';
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03ac08b9bfa21356faebcc14ee8bdd33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competenciestoreview, block_lp';
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
                
                $buffer .= 'competenciestoreview, block_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5bfbdb6d4190cc04f315826cc6d017d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <a href="{{usercompetency.url}}">{{{competency.shortname}}}</a> ({{user.fullname}}) - {{usercompetency.statusname}}
                    </li>
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
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('usercompetency.url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= $value;
                $buffer .= '</a> (';
                $value = $this->resolveValue($context->findDot('user.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ') - ';
                $value = $this->resolveValue($context->findDot('usercompetency.statusname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF39a1ad92fe98df6ac490211fdbc7e59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="more"><a href="{{pluginbaseurl}}/competencies_to_review.php">{{#str}}viewmore, block_lp{{/str}}</a></li>
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
                
                $buffer .= $indent . '                    <li class="more"><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/competencies_to_review.php">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDdc45bc7d77834619709c7d48308b431($context, $indent, $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd088837b5be3b9e820b1ea5178b8a34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3>{{#str}}competenciestoreview, block_lp{{/str}}</h3>
        <div class="sub-content">
            <ul>
                {{#compstoreview}}
                    <li>
                        <a href="{{usercompetency.url}}">{{{competency.shortname}}}</a> ({{user.fullname}}) - {{usercompetency.statusname}}
                    </li>
                {{/compstoreview}}
                {{#hasmorecompstoreview}}
                    <li class="more"><a href="{{pluginbaseurl}}/competencies_to_review.php">{{#str}}viewmore, block_lp{{/str}}</a></li>
                {{/hasmorecompstoreview}}
            </ul>
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
                
                $buffer .= $indent . '        <h3>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section03ac08b9bfa21356faebcc14ee8bdd33($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <div class="sub-content">
';
                $buffer .= $indent . '            <ul>
';
                // 'compstoreview' section
                $value = $context->find('compstoreview');
                $buffer .= $this->section5bfbdb6d4190cc04f315826cc6d017d9($context, $indent, $value);
                // 'hasmorecompstoreview' section
                $value = $context->find('hasmorecompstoreview');
                $buffer .= $this->sectionF39a1ad92fe98df6ac490211fdbc7e59($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ec02fa7258178acd1a50dcd29a01519(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planstoreview, block_lp';
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
                
                $buffer .= 'planstoreview, block_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE41c0a07e3d50771a1a5caa574ecf1d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <a href="{{plan.url}}">{{{plan.name}}}</a> ({{user.fullname}}) - {{plan.statusname}}
                    </li>
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
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('plan.url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('plan.name'), $context);
                $buffer .= $value;
                $buffer .= '</a> (';
                $value = $this->resolveValue($context->findDot('user.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ') - ';
                $value = $this->resolveValue($context->findDot('plan.statusname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA65857362a45a693770d144470e7720a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="more"><a href="{{pluginbaseurl}}/plans_to_review.php">{{#str}}viewmore, block_lp{{/str}}</a></li>
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
                
                $buffer .= $indent . '                    <li class="more"><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/plans_to_review.php">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDdc45bc7d77834619709c7d48308b431($context, $indent, $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85cafcacccca6590913c059f412ae3d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3>{{#str}}planstoreview, block_lp{{/str}}</h3>
        <div class="sub-content">
            <ul>
                {{#planstoreview}}
                    <li>
                        <a href="{{plan.url}}">{{{plan.name}}}</a> ({{user.fullname}}) - {{plan.statusname}}
                    </li>
                {{/planstoreview}}
                {{#hasmoreplanstoreview}}
                    <li class="more"><a href="{{pluginbaseurl}}/plans_to_review.php">{{#str}}viewmore, block_lp{{/str}}</a></li>
                {{/hasmoreplanstoreview}}
            </ul>
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
                
                $buffer .= $indent . '        <h3>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9ec02fa7258178acd1a50dcd29a01519($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <div class="sub-content">
';
                $buffer .= $indent . '            <ul>
';
                // 'planstoreview' section
                $value = $context->find('planstoreview');
                $buffer .= $this->sectionE41c0a07e3d50771a1a5caa574ecf1d6($context, $indent, $value);
                // 'hasmoreplanstoreview' section
                $value = $context->find('hasmoreplanstoreview');
                $buffer .= $this->sectionA65857362a45a693770d144470e7720a($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
