<?php

class __Mustache_2e1cd8996e330cd89be76ebc5c1cbdaf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!--<div class="row">-->
';
        // 'plans' section
        $value = $context->find('plans');
        $buffer .= $this->sectionAf59d085e887a6ce84858be2ae76fbb6($context, $indent, $value);
        $buffer .= $indent . '<!--</div>-->
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section2e0358f1937120efca11493931343bab($context, $indent, $value);

        return $buffer;
    }

    private function section80c09044d33d0449e00fb2f17fc07cb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' uncompleted, block_lpprogress ';
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
                
                $buffer .= ' uncompleted, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD65fa5780adf989bcc7483b5555ecf95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' comp_status, block_lpprogress ';
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
                
                $buffer .= ' comp_status, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4242dfc0383bb9b933cda9f2a84c79dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' comp_selfeva, block_lpprogress ';
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
                
                $buffer .= ' comp_selfeva, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5f68939ac462ea0884a1113a99a89a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' comp_selfeva_compare, block_lpprogress ';
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
                
                $buffer .= ' comp_selfeva_compare, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f6db526ea67aed5b232f881419d9aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' comp, block_lpprogress ';
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
                
                $buffer .= ' comp, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc1c52d95925d3506fb08e2bca1033d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' comp_desc, block_lpprogress ';
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
                
                $buffer .= ' comp_desc, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE73db91a07e0a4262b6fdebf8085576b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' comp_course, block_lpprogress ';
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
                
                $buffer .= ' comp_course, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06ab8468bc4425f8004637687eb9f8c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            item_completed, block_lpprogress ';
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
                
                $buffer .= '
';
                $buffer .= $indent . '                            item_completed, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33dcaa22cc322b3aa35ffbaaa94e11b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <td style="color: #00A000">{{#str}}
                            item_completed, block_lpprogress {{/str}}</td>';
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
                
                $buffer .= $indent . '                        <td style="color: #00A000">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section06ab8468bc4425f8004637687eb9f8c2($context, $indent, $value);
                $buffer .= '</td>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a7caf1fc26a7944aefc66d4fa666e14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            item_uncompleted, block_lpprogress ';
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
                
                $buffer .= '
';
                $buffer .= $indent . '                            item_uncompleted, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd2ee9d5ebc9b4b5bd7406635ed93d4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <td STYLE=""> {{usercompetency.comp_selfeva}}</td>';
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
                
                $buffer .= $indent . '                        <td STYLE=""> ';
                $value = $this->resolveValue($context->findDot('usercompetency.comp_selfeva'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC128bf7f58c557c7b471760309900684(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            comp_selfeva_unable, block_lpprogress ';
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
                
                $buffer .= '
';
                $buffer .= $indent . '                            comp_selfeva_unable, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57e58fde7c5d2970a673c1b4d576b2fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        comp_course_link, block_lpprogress ';
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
                
                $buffer .= '
';
                $buffer .= $indent . '                        comp_course_link, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2253cfcd1be895579b6672b0ec3282aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr class="step0 {{#isproficient}}active{{/isproficient}}">
                    {{#isproficient}}
                        <td style="color: #00A000">{{#str}}
                            item_completed, block_lpprogress {{/str}}</td>{{/isproficient}}
                    {{^isproficient}}
                        <td style="color: red">{{#str}}
                            item_uncompleted, block_lpprogress {{/str}}</td>{{/isproficient}}
                    <!--                        这里应该还有一列输入当前能力自评水平-->
                    {{#usercompetency.comp_selfeva}}
                        <td STYLE=""> {{usercompetency.comp_selfeva}}</td>{{/usercompetency.comp_selfeva}}
                    {{^usercompetency.comp_selfeva}}
                        <td style="color: red">{{#str}}
                            comp_selfeva_unable, block_lpprogress {{/str}}</td>{{/usercompetency.comp_selfeva}}
                    <!--compare the values between evaluate & competency-->
                    <td>{{usercompetency.comp_selfeva_compare}}</td>
                    <td>{{competency.shortname}}</td>
                    <td>{{{competency.description}}}</td>
                    <td><a href="#" data-id="{{competency.id}}" data-action="find-courses-link">{{#str}}
                        comp_course_link, block_lpprogress {{/str}}</a></td>

                </tr>
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
                
                $buffer .= $indent . '                <tr class="step0 ';
                // 'isproficient' section
                $value = $context->find('isproficient');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                // 'isproficient' section
                $value = $context->find('isproficient');
                $buffer .= $this->section33dcaa22cc322b3aa35ffbaaa94e11b0($context, $indent, $value);
                $buffer .= '
';
                // 'isproficient' inverted section
                $value = $context->find('isproficient');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <td style="color: red">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section0a7caf1fc26a7944aefc66d4fa666e14($context, $indent, $value);
                    $buffer .= '</td>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                    <!--                        这里应该还有一列输入当前能力自评水平-->
';
                // 'usercompetency.comp_selfeva' section
                $value = $context->findDot('usercompetency.comp_selfeva');
                $buffer .= $this->sectionCd2ee9d5ebc9b4b5bd7406635ed93d4f($context, $indent, $value);
                $buffer .= '
';
                // 'usercompetency.comp_selfeva' inverted section
                $value = $context->findDot('usercompetency.comp_selfeva');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <td style="color: red">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionC128bf7f58c557c7b471760309900684($context, $indent, $value);
                    $buffer .= '</td>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                    <!--compare the values between evaluate & competency-->
';
                $buffer .= $indent . '                    <td>';
                $value = $this->resolveValue($context->findDot('usercompetency.comp_selfeva_compare'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                    <td>';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                    <td>';
                $value = $this->resolveValue($context->findDot('competency.description'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                    <td><a href="#" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-action="find-courses-link">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section57e58fde7c5d2970a673c1b4d576b2fb($context, $indent, $value);
                $buffer .= '</a></td>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6fafb188e90c95bc450437762b901a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completed, block_lpprogress ';
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
                
                $buffer .= ' completed, block_lpprogress ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c7f301b3f5a538b27989b14ae2aa0e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="text-muted final">{{#str}} completed, block_lpprogress {{/str}}</div>';
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
                
                $buffer .= $indent . '                <div class="text-muted final">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE6fafb188e90c95bc450437762b901a4($context, $indent, $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf59d085e887a6ce84858be2ae76fbb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="card">
        <h3 class="text-center">{{name}}</h3>
        {{^iscompleted}}
            <div class="text-muted final" align="center">{{#str}} uncompleted, block_lpprogress {{/str}}</div>
        {{/iscompleted}}

        <!--                <div class="col-md-12">-->
        <table id="progressbar">
            <tr class="step0 {{#isproficient}}active{{/isproficient}}">
                <th>{{#str}} comp_status, block_lpprogress {{/str}}</th>
                <th>{{#str}} comp_selfeva, block_lpprogress {{/str}}</th>
                <th>{{#str}} comp_selfeva_compare, block_lpprogress {{/str}}</th>
                <th>{{#str}} comp, block_lpprogress {{/str}}</th>
                <th>{{#str}} comp_desc, block_lpprogress {{/str}}</th>
                <th>{{#str}} comp_course, block_lpprogress {{/str}}</th>
            </tr>
            {{#competencies}}
                <tr class="step0 {{#isproficient}}active{{/isproficient}}">
                    {{#isproficient}}
                        <td style="color: #00A000">{{#str}}
                            item_completed, block_lpprogress {{/str}}</td>{{/isproficient}}
                    {{^isproficient}}
                        <td style="color: red">{{#str}}
                            item_uncompleted, block_lpprogress {{/str}}</td>{{/isproficient}}
                    <!--                        这里应该还有一列输入当前能力自评水平-->
                    {{#usercompetency.comp_selfeva}}
                        <td STYLE=""> {{usercompetency.comp_selfeva}}</td>{{/usercompetency.comp_selfeva}}
                    {{^usercompetency.comp_selfeva}}
                        <td style="color: red">{{#str}}
                            comp_selfeva_unable, block_lpprogress {{/str}}</td>{{/usercompetency.comp_selfeva}}
                    <!--compare the values between evaluate & competency-->
                    <td>{{usercompetency.comp_selfeva_compare}}</td>
                    <td>{{competency.shortname}}</td>
                    <td>{{{competency.description}}}</td>
                    <td><a href="#" data-id="{{competency.id}}" data-action="find-courses-link">{{#str}}
                        comp_course_link, block_lpprogress {{/str}}</a></td>

                </tr>
            {{/competencies}}
        </table>
        <div class="step0 active">
            {{#iscompleted}}
                <div class="text-muted final">{{#str}} completed, block_lpprogress {{/str}}</div>{{/iscompleted}}
        </div><!--                </div>-->
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
                
                $buffer .= $indent . '    <div class="card">
';
                $buffer .= $indent . '        <h3 class="text-center">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>
';
                // 'iscompleted' inverted section
                $value = $context->find('iscompleted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="text-muted final" align="center">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section80c09044d33d0449e00fb2f17fc07cb1($context, $indent, $value);
                    $buffer .= '</div>
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <!--                <div class="col-md-12">-->
';
                $buffer .= $indent . '        <table id="progressbar">
';
                $buffer .= $indent . '            <tr class="step0 ';
                // 'isproficient' section
                $value = $context->find('isproficient');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <th>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD65fa5780adf989bcc7483b5555ecf95($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4242dfc0383bb9b933cda9f2a84c79dd($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF5f68939ac462ea0884a1113a99a89a6($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f6db526ea67aed5b232f881419d9aa($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFc1c52d95925d3506fb08e2bca1033d7($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE73db91a07e0a4262b6fdebf8085576b($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '            </tr>
';
                // 'competencies' section
                $value = $context->find('competencies');
                $buffer .= $this->section2253cfcd1be895579b6672b0ec3282aa($context, $indent, $value);
                $buffer .= $indent . '        </table>
';
                $buffer .= $indent . '        <div class="step0 active">
';
                // 'iscompleted' section
                $value = $context->find('iscompleted');
                $buffer .= $this->section5c7f301b3f5a538b27989b14ae2aa0e8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div><!--                </div>-->
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e0358f1937120efca11493931343bab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\',
    \'core/templates\',
    \'core/ajax\',
    \'core/notification\',
    \'core/str\',
    \'tool_lp/dialogue\'],
    function($, templates, ajax, notification, str, Dialogue) {

    $(\'section.block_lpprogress\').find(\'[data-action="find-courses-link"]\').click(function(e) {
    e.preventDefault();

    var competencyid = $(e.target).data(\'id\');
    var requests = ajax.call([{
    methodname: \'tool_lp_list_courses_using_competency\',
    args: {id: competencyid}
    }]);

    requests[0].done(function(courses) {
    var context = {
    courses: courses
    };
    templates.render(\'tool_lp/linked_courses_summary\', context).done(function(html) {
    str.get_string(\'linkedcourses\', \'tool_lp\').done(function(linkedcourses) {
    new Dialogue(
    linkedcourses, // Title.
    html // The linked courses.
    );
    }).fail(notification.exception);
    }).fail(notification.exception);
    }).fail(notification.exception);
    });
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
                
                $buffer .= $indent . '    require([\'jquery\',
';
                $buffer .= $indent . '    \'core/templates\',
';
                $buffer .= $indent . '    \'core/ajax\',
';
                $buffer .= $indent . '    \'core/notification\',
';
                $buffer .= $indent . '    \'core/str\',
';
                $buffer .= $indent . '    \'tool_lp/dialogue\'],
';
                $buffer .= $indent . '    function($, templates, ajax, notification, str, Dialogue) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'section.block_lpprogress\').find(\'[data-action="find-courses-link"]\').click(function(e) {
';
                $buffer .= $indent . '    e.preventDefault();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var competencyid = $(e.target).data(\'id\');
';
                $buffer .= $indent . '    var requests = ajax.call([{
';
                $buffer .= $indent . '    methodname: \'tool_lp_list_courses_using_competency\',
';
                $buffer .= $indent . '    args: {id: competencyid}
';
                $buffer .= $indent . '    }]);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    requests[0].done(function(courses) {
';
                $buffer .= $indent . '    var context = {
';
                $buffer .= $indent . '    courses: courses
';
                $buffer .= $indent . '    };
';
                $buffer .= $indent . '    templates.render(\'tool_lp/linked_courses_summary\', context).done(function(html) {
';
                $buffer .= $indent . '    str.get_string(\'linkedcourses\', \'tool_lp\').done(function(linkedcourses) {
';
                $buffer .= $indent . '    new Dialogue(
';
                $buffer .= $indent . '    linkedcourses, // Title.
';
                $buffer .= $indent . '    html // The linked courses.
';
                $buffer .= $indent . '    );
';
                $buffer .= $indent . '    }).fail(notification.exception);
';
                $buffer .= $indent . '    }).fail(notification.exception);
';
                $buffer .= $indent . '    }).fail(notification.exception);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
