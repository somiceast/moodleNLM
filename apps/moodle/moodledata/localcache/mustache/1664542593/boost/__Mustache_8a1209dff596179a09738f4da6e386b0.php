<?php

class __Mustache_8a1209dff596179a09738f4da6e386b0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="plan-page" data-id="';
        $value = $this->resolveValue($context->findDot('plan.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-userid="';
        $value = $this->resolveValue($context->findDot('plan.userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <h2>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('plan.name'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'plan.canbeedited' section
        $value = $context->findDot('plan.canbeedited');
        $buffer .= $this->sectionD9faf978d354451808bb4a2711729353($context, $indent, $value);
        $buffer .= $indent . '    </h2>
';
        // 'plan.canbeedited' section
        $value = $context->findDot('plan.canbeedited');
        $buffer .= $this->section5c9acb83c9ce5d68391b5418dc7d41d7($context, $indent, $value);
        $buffer .= $indent . '    <div data-region="plan-summary" class="mt-1">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('plan.description'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        <dl>
';
        $buffer .= $indent . '            <dt>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6cf3cf31f053d15ce18f5e7bf34f2d21($context, $indent, $value);
        $buffer .= '</dt>
';
        $buffer .= $indent . '            <dd>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('plan.statusname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'plan.isinreview' section
        $value = $context->findDot('plan.isinreview');
        $buffer .= $this->sectionD486d618ef6eca832cb237f247b51430($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'plan.iscompleteallowed' section
        $value = $context->findDot('plan.iscompleteallowed');
        $buffer .= $this->section0124591a35a7faaf691d45e2fe61ecb4($context, $indent, $value);
        // 'plan.isreopenallowed' section
        $value = $context->findDot('plan.isreopenallowed');
        $buffer .= $this->sectionF3907582a66ab046b271e8f2c496f5fa($context, $indent, $value);
        // 'plan.isrequestreviewallowed' section
        $value = $context->findDot('plan.isrequestreviewallowed');
        $buffer .= $this->section1d42b0c944cc30aaaff64c679baf83db($context, $indent, $value);
        // 'plan.iscancelreviewrequestallowed' section
        $value = $context->findDot('plan.iscancelreviewrequestallowed');
        $buffer .= $this->section9237d595fbb131b354a33209fecd05c0($context, $indent, $value);
        // 'plan.isstartreviewallowed' section
        $value = $context->findDot('plan.isstartreviewallowed');
        $buffer .= $this->section6bd60be84aa72e5b1eebf9cc62bc27ba($context, $indent, $value);
        // 'plan.isstopreviewallowed' section
        $value = $context->findDot('plan.isstopreviewallowed');
        $buffer .= $this->sectionF2dcb993017d8f22140648b197080673($context, $indent, $value);
        // 'plan.isapproveallowed' section
        $value = $context->findDot('plan.isapproveallowed');
        $buffer .= $this->sectionDa52b3774024043058e295aa7cc775b9($context, $indent, $value);
        // 'plan.isunapproveallowed' section
        $value = $context->findDot('plan.isunapproveallowed');
        $buffer .= $this->section85d599ca69da06e08842b3ec69429edd($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </dd>
';
        // 'plan.duedate' section
        $value = $context->findDot('plan.duedate');
        $buffer .= $this->sectionDdb92f0acc95bc4971a665970d7a5665($context, $indent, $value);
        // 'plan.template' section
        $value = $context->findDot('plan.template');
        $buffer .= $this->sectionC1637fc1c9c233d634fd9fef8d17d9da($context, $indent, $value);
        // 'description' section
        $value = $context->find('description');
        $buffer .= $this->sectionD140b599e65c36188d6b5fa9fdbfe8e8($context, $indent, $value);
        $buffer .= $indent . '            <dt>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB63e10a804de5787a638e543679fa0bb($context, $indent, $value);
        $buffer .= '</dt>
';
        $buffer .= $indent . '            <dd>
';
        $buffer .= $indent . '            ';
        if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
            $context->pushBlockContext(array(
                'progresstext' => array($this, 'blockA0e75b7e0f57a9c2015bb7a07d7cea7f'),
                'percentage' => array($this, 'block34ecb99b6aae2767331b27e354e30d39'),
                'percentlabel' => array($this, 'block7d7b29e4af28232b5b00b862f84c2135'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= '            </dd>
';
        $buffer .= $indent . '        </dl>
';
        $buffer .= $indent . '    </div>
';
        // 'plan.commentarea' section
        $value = $context->findDot('plan.commentarea');
        $buffer .= $this->sectionFa79cd7c44f4ba472616d86ae39ba87f($context, $indent, $value);
        $buffer .= $indent . '    <div data-region="plan-competencies" class="mt-1">
';
        $buffer .= $indent . '        <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section550022feeca1a7c313596037fce1244c($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '        <table class="generaltable fullwidth managecompetencies">
';
        $buffer .= $indent . '            <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section285b4f7ab91bcf98f7f0ca7d744bc1bc($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                    <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section557c631e6928e961f89583a6c7d31920($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                    <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9cb39ef02758f9319f0f5cb5f287e99b($context, $indent, $value);
        $buffer .= '</th>
';
        // 'plan.iscompleted' inverted section
        $value = $context->findDot('plan.iscompleted');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <th scope="col">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section6cf3cf31f053d15ce18f5e7bf34f2d21($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '                        <th scope="col">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section4df404defbaa4e47c852157743964c8c($context, $indent, $value);
            $buffer .= '</th>
';
        }
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </thead>
';
        $buffer .= $indent . '            <tbody class="drag-parentnode">
';
        // 'competencies' section
        $value = $context->find('competencies');
        $buffer .= $this->sectionD81c52e34d57f8adfd139a9c2d4cb07a($context, $indent, $value);
        $buffer .= $indent . '            </tbody>
';
        $buffer .= $indent . '        </table>
';
        // 'competencies' inverted section
        $value = $context->find('competencies');
        if (empty($value)) {
            
            $buffer .= $indent . '            <p class="alert alert-info">
';
            $buffer .= $indent . '                ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section22c45b97855c142c1d932aee3163d6c1($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </p>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section18faef04eff22c74bc09e1d9ef570fef($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section5cee92aa958614816842ed486558c3f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editplan, tool_lp';
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
                
                $buffer .= 'editplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section77ad58ea1057d98096003dc698d37705(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}editplan, tool_lp{{/str}}';
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
                
                $buffer .= 't/edit, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5cee92aa958614816842ed486558c3f9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9faf978d354451808bb4a2711729353(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{pluginbaseurl}}/editplan.php?id={{plan.id}}&amp;userid={{plan.userid}}">{{#pix}}t/edit, core, {{#str}}editplan, tool_lp{{/str}}{{/pix}}</a>
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
                $buffer .= '/editplan.php?id=';
                $value = $this->resolveValue($context->findDot('plan.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;userid=';
                $value = $this->resolveValue($context->findDot('plan.userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section77ad58ea1057d98096003dc698d37705($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22ee337edf54458589e0dbd973a89fe1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/add';
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
                
                $buffer .= 't/add';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF91f3f942cfdcf622cc4196ad1a7fbdf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcompetency, tool_lp';
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
                
                $buffer .= 'addcompetency, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c9acb83c9ce5d68391b5418dc7d41d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="actions" class="clearfix">
        <div class="float-left">
            <!-- Button to add competencies to the plan -->
            <button class="btn btn-secondary" data-action="add">{{#pix}}t/add{{/pix}} {{#str}}addcompetency, tool_lp{{/str}}</button>
        </div>
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
                
                $buffer .= $indent . '    <div data-region="actions" class="clearfix">
';
                $buffer .= $indent . '        <div class="float-left">
';
                $buffer .= $indent . '            <!-- Button to add competencies to the plan -->
';
                $buffer .= $indent . '            <button class="btn btn-secondary" data-action="add">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section22ee337edf54458589e0dbd973a89fe1($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF91f3f942cfdcf622cc4196ad1a7fbdf($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cf3cf31f053d15ce18f5e7bf34f2d21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'status, tool_lp';
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
                
                $buffer .= 'status, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD486d618ef6eca832cb237f247b51430(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    - {{plan.reviewer.fullname}}
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
                
                $buffer .= $indent . '                    - ';
                $value = $this->resolveValue($context->findDot('plan.reviewer.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf94e292f88e092fe890901004b81523(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completeplan, tool_lp';
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
                
                $buffer .= 'completeplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0124591a35a7faaf691d45e2fe61ecb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-complete" href="#">{{#str}}completeplan, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-complete" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAf94e292f88e092fe890901004b81523($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30e5b1127e78adca71afb024437ca4e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reopenplan, tool_lp';
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
                
                $buffer .= 'reopenplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3907582a66ab046b271e8f2c496f5fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-reopen" href="#">{{#str}}reopenplan, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-reopen" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section30e5b1127e78adca71afb024437ca4e4($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8da287375ade747d99c234e6e8982412(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'requestreview, tool_lp';
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
                
                $buffer .= 'requestreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d42b0c944cc30aaaff64c679baf83db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-request-review" href="#">{{#str}}requestreview, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-request-review" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8da287375ade747d99c234e6e8982412($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbd111003f3359ac9cad2f73c86166ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancelreviewrequest, tool_lp';
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
                
                $buffer .= 'cancelreviewrequest, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9237d595fbb131b354a33209fecd05c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-cancel-review-request" href="#">{{#str}}cancelreviewrequest, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-cancel-review-request" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDbd111003f3359ac9cad2f73c86166ba($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8adf1d824e306aaf125b1a037a20c224(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startreview, tool_lp';
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
                
                $buffer .= 'startreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bd60be84aa72e5b1eebf9cc62bc27ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-start-review" href="#">{{#str}}startreview, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-start-review" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8adf1d824e306aaf125b1a037a20c224($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf4950d626f5c331244c6f4673ecd957(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'stopreview, tool_lp';
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
                
                $buffer .= 'stopreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2dcb993017d8f22140648b197080673(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-stop-review" href="#">{{#str}}stopreview, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-stop-review" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDf4950d626f5c331244c6f4673ecd957($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6df78be086dead020f45626be3f6c906(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planapprove, tool_lp';
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
                
                $buffer .= 'planapprove, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa52b3774024043058e295aa7cc775b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-approve" href="#">{{#str}}planapprove, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-approve" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6df78be086dead020f45626be3f6c906($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a875ec293f7a5dde815197b1bf15817(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planunapprove, tool_lp';
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
                
                $buffer .= 'planunapprove, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85d599ca69da06e08842b3ec69429edd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    (<a data-action="plan-unapprove" href="#">{{#str}}planunapprove, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                    (<a data-action="plan-unapprove" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6a875ec293f7a5dde815197b1bf15817($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section733a11e9364cffe0a7ee8dc73db80669(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'duedate, tool_lp';
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
                
                $buffer .= 'duedate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDdb92f0acc95bc4971a665970d7a5665(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <dt>{{#str}}duedate, tool_lp{{/str}}</dt>
                <dd>{{plan.duedateformatted}}</dd>
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
                
                $buffer .= $indent . '                <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section733a11e9364cffe0a7ee8dc73db80669($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '                <dd>';
                $value = $this->resolveValue($context->findDot('plan.duedateformatted'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a0c3b9b85a9989e14bfaafaf462f778(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'template, tool_lp';
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
                
                $buffer .= 'template, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23f82cc3b74d96efadcb719fdcd59f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{pluginbaseurl}}/templatecompetencies.php?templateid={{id}}&amp;pagecontextid={{contextid}}">
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
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/templatecompetencies.php?templateid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ae39e3dce9945d5872a2a828daa4528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</a>';
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
                
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3676cac9b0cf0eb27ad766264e520177(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unlinkplantemplate, tool_lp';
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
                
                $buffer .= 'unlinkplantemplate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2aa3ff600c031ba163e0be96244f54eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        (<a data-action="plan-unlink" href="#">{{#str}}unlinkplantemplate, tool_lp{{/str}}</a>)
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
                
                $buffer .= $indent . '                        (<a data-action="plan-unlink" href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3676cac9b0cf0eb27ad766264e520177($context, $indent, $value);
                $buffer .= '</a>)
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1637fc1c9c233d634fd9fef8d17d9da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <dt>{{#str}}template, tool_lp{{/str}}</dt>
                <dd>
                    {{#canread}}
                        <a href="{{pluginbaseurl}}/templatecompetencies.php?templateid={{id}}&amp;pagecontextid={{contextid}}">
                    {{/canread}}
                    {{{plan.template.shortname}}}{{#canread}}</a>{{/canread}}
                    {{#plan.isunlinkallowed}}
                        (<a data-action="plan-unlink" href="#">{{#str}}unlinkplantemplate, tool_lp{{/str}}</a>)
                    {{/plan.isunlinkallowed}}
                </dd>
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
                
                $buffer .= $indent . '                <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9a0c3b9b85a9989e14bfaafaf462f778($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '                <dd>
';
                // 'canread' section
                $value = $context->find('canread');
                $buffer .= $this->section23f82cc3b74d96efadcb719fdcd59f98($context, $indent, $value);
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('plan.template.shortname'), $context);
                $buffer .= $value;
                // 'canread' section
                $value = $context->find('canread');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                // 'plan.isunlinkallowed' section
                $value = $context->findDot('plan.isunlinkallowed');
                $buffer .= $this->section2aa3ff600c031ba163e0be96244f54eb($context, $indent, $value);
                $buffer .= $indent . '                </dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1dee8adaf405bfc6db6cbb048fef1653(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'description';
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
                
                $buffer .= 'description';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD140b599e65c36188d6b5fa9fdbfe8e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <dt>{{#str}}description{{/str}}</dt>
                <dd>{{{plan.description}}}</dd>
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
                
                $buffer .= $indent . '                <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1dee8adaf405bfc6db6cbb048fef1653($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '                <dd>';
                $value = $this->resolveValue($context->findDot('plan.description'), $context);
                $buffer .= $value;
                $buffer .= '</dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB63e10a804de5787a638e543679fa0bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'progress, tool_lp';
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
                
                $buffer .= 'progress, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6682c098be9e9426ef998a5a5d81f4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xcompetenciesproficientoutofy, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" }';
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
                
                $buffer .= 'xcompetenciesproficientoutofy, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('proficientcompetencycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('competencycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" }';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section954479e100ae97793d4306fdf9cf30ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div data-region="comments" class="mt-1">
                {{>tool_lp/comment_area}}
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
                
                $buffer .= $indent . '            <div data-region="comments" class="mt-1">
';
                if ($partial = $this->mustache->loadPartial('tool_lp/comment_area')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa79cd7c44f4ba472616d86ae39ba87f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#canpostorhascomments}}
            <div data-region="comments" class="mt-1">
                {{>tool_lp/comment_area}}
            </div>
        {{/canpostorhascomments}}
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
                
                // 'canpostorhascomments' section
                $value = $context->find('canpostorhascomments');
                $buffer .= $this->section954479e100ae97793d4306fdf9cf30ef($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section550022feeca1a7c313596037fce1244c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'learningplancompetencies, tool_lp';
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
                
                $buffer .= 'learningplancompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section285b4f7ab91bcf98f7f0ca7d744bc1bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'shortname, tool_lp';
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
                
                $buffer .= 'shortname, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section557c631e6928e961f89583a6c7d31920(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rating, tool_lp';
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
                
                $buffer .= 'rating, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cb39ef02758f9319f0f5cb5f287e99b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'proficient, tool_lp';
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
                
                $buffer .= 'proficient, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4df404defbaa4e47c852157743964c8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions, tool_lp';
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
                
                $buffer .= 'actions, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c3a27234c79239bacfcee895e0d6fe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="drag-handlecontainer float-left"></span>
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
                
                $buffer .= $indent . '                        <span class="drag-handlecontainer float-left"></span>
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

    private function section03c42648baed240c743164560a4e3f24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <br>
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
                
                $buffer .= $indent . '                            <br>
';
                $buffer .= $indent . '                            <span class="float-left">';
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

    private function section56f8009c20486b555c6f3c82d8ad11a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <td>{{usercompetencyplan.gradename}}</td>
                        <td>{{usercompetencyplan.proficiencyname}}</td>
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
                
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->findDot('usercompetencyplan.gradename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->findDot('usercompetencyplan.proficiencyname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
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
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbfbf734947d6abf9cff877b7b854cbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core';
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
                
                $buffer .= 't/edit, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC86c8646a130253e75fc01faddaf4e66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="dropdown-item">
                                                <a href="#" data-action="request-review">{{#pix}}t/edit, core{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
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
                
                $buffer .= $indent . '                                            <li class="dropdown-item">
';
                $buffer .= $indent . '                                                <a href="#" data-action="request-review">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionFbfbf734947d6abf9cff877b7b854cbe($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8da287375ade747d99c234e6e8982412($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc03388ff85a21c936e4527850444b73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="dropdown-item">
                                                <a href="#" data-action="cancel-review-request">{{#pix}}t/edit, core{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
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
                
                $buffer .= $indent . '                                            <li class="dropdown-item">
';
                $buffer .= $indent . '                                                <a href="#" data-action="cancel-review-request">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionFbfbf734947d6abf9cff877b7b854cbe($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDbd111003f3359ac9cad2f73c86166ba($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc43fc972e7be636807f79a3364b9d8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core';
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
                
                $buffer .= 't/delete, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
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
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB63741bc893142aad20e2fd0cf44a264(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="dropdown-item">
                                                <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">{{#pix}}t/delete, core{{/pix}} {{#str}}delete{{/str}}</a>
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
                
                $buffer .= $indent . '                                            <li class="dropdown-item">
';
                $buffer .= $indent . '                                                <a href="#" data-action="delete-competency-link" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionDc43fc972e7be636807f79a3364b9d8a($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf04ad3de55ccf9bb54062d4a110c7d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/preview, core';
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
                
                $buffer .= 't/preview, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78ee9396b9e588c9e992b3bdc21af11b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'findcourses, tool_lp';
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
                
                $buffer .= 'findcourses, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD81c52e34d57f8adfd139a9c2d4cb07a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr class="drag-samenode" data-node="user-competency" data-id="{{competency.id}}"
                        data-competencyid="{{competency.id}}"
                        data-userid="{{plan.userid}}">
                    <td>
                        {{#plan.canbeedited}}
                        <span class="drag-handlecontainer float-left"></span>
                        {{/plan.canbeedited}}
                        <a data-usercompetency="true" href="#">{{{competency.shortname}}}</a>
                        <em>{{competency.idnumber}}</em>
                        {{#comppath}}
                            <br>
                            <span class="float-left">{{#str}}path, tool_lp{{/str}}&nbsp;</span>{{> tool_lp/competency_path }}
                        {{/comppath}}
                    </td>
                    {{#plan.iscompleted}}
                        <td>{{usercompetencyplan.gradename}}</td>
                        <td>{{usercompetencyplan.proficiencyname}}</td>
                    {{/plan.iscompleted}}
                    {{^plan.iscompleted}}
                        <td>{{usercompetency.gradename}}</td>
                        <td>{{usercompetency.proficiencyname}}</td>
                        <td>{{usercompetency.statusname}}</td>
                    {{/plan.iscompleted}}
                    {{^plan.iscompleted}}
                        <td>
                            <ul title="{{#str}}edit{{/str}}" class="user-competency-actions">
                                <li>
                                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                                    <ul class="dropdown dropdown-menu">
                                        {{#usercompetency.isrequestreviewallowed}}
                                            <li class="dropdown-item">
                                                <a href="#" data-action="request-review">{{#pix}}t/edit, core{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
                                            </li>
                                        {{/usercompetency.isrequestreviewallowed}}
                                        {{#usercompetency.iscancelreviewrequestallowed}}
                                            <li class="dropdown-item">
                                                <a href="#" data-action="cancel-review-request">{{#pix}}t/edit, core{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
                                            </li>
                                        {{/usercompetency.iscancelreviewrequestallowed}}
                                        {{#plan.canbeedited}}
                                            <li class="dropdown-item">
                                                <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">{{#pix}}t/delete, core{{/pix}} {{#str}}delete{{/str}}</a>
                                            </li>
                                        {{/plan.canbeedited}}
                                        <li class="dropdown-item">
                                            <a href="#" data-action="find-courses-link" data-id="{{competency.id}}">{{#pix}}t/preview, core{{/pix}} {{#str}}findcourses, tool_lp{{/str}}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    {{/plan.iscompleted}}
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
                
                $buffer .= $indent . '                <tr class="drag-samenode" data-node="user-competency" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-competencyid="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-userid="';
                $value = $this->resolveValue($context->findDot('plan.userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <td>
';
                // 'plan.canbeedited' section
                $value = $context->findDot('plan.canbeedited');
                $buffer .= $this->section9c3a27234c79239bacfcee895e0d6fe5($context, $indent, $value);
                $buffer .= $indent . '                        <a data-usercompetency="true" href="#">';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                        <em>';
                $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</em>
';
                // 'comppath' section
                $value = $context->find('comppath');
                $buffer .= $this->section03c42648baed240c743164560a4e3f24($context, $indent, $value);
                $buffer .= $indent . '                    </td>
';
                // 'plan.iscompleted' section
                $value = $context->findDot('plan.iscompleted');
                $buffer .= $this->section56f8009c20486b555c6f3c82d8ad11a7($context, $indent, $value);
                // 'plan.iscompleted' inverted section
                $value = $context->findDot('plan.iscompleted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <td>';
                    $value = $this->resolveValue($context->findDot('usercompetency.gradename'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</td>
';
                    $buffer .= $indent . '                        <td>';
                    $value = $this->resolveValue($context->findDot('usercompetency.proficiencyname'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</td>
';
                    $buffer .= $indent . '                        <td>';
                    $value = $this->resolveValue($context->findDot('usercompetency.statusname'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</td>
';
                }
                // 'plan.iscompleted' inverted section
                $value = $context->findDot('plan.iscompleted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <td>
';
                    $buffer .= $indent . '                            <ul title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                    $buffer .= '" class="user-competency-actions">
';
                    $buffer .= $indent . '                                <li>
';
                    $buffer .= $indent . '                                    <a href="#">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                    $buffer .= '</a><b class="caret"></b>
';
                    $buffer .= $indent . '                                    <ul class="dropdown dropdown-menu">
';
                    // 'usercompetency.isrequestreviewallowed' section
                    $value = $context->findDot('usercompetency.isrequestreviewallowed');
                    $buffer .= $this->sectionC86c8646a130253e75fc01faddaf4e66($context, $indent, $value);
                    // 'usercompetency.iscancelreviewrequestallowed' section
                    $value = $context->findDot('usercompetency.iscancelreviewrequestallowed');
                    $buffer .= $this->sectionEc03388ff85a21c936e4527850444b73($context, $indent, $value);
                    // 'plan.canbeedited' section
                    $value = $context->findDot('plan.canbeedited');
                    $buffer .= $this->sectionB63741bc893142aad20e2fd0cf44a264($context, $indent, $value);
                    $buffer .= $indent . '                                        <li class="dropdown-item">
';
                    $buffer .= $indent . '                                            <a href="#" data-action="find-courses-link" data-id="';
                    $value = $this->resolveValue($context->findDot('competency.id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionFf04ad3de55ccf9bb54062d4a110c7d4($context, $indent, $value);
                    $buffer .= ' ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section78ee9396b9e588c9e992b3bdc21af11b($context, $indent, $value);
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                                        </li>
';
                    $buffer .= $indent . '                                    </ul>
';
                    $buffer .= $indent . '                                </li>
';
                    $buffer .= $indent . '                            </ul>
';
                    $buffer .= $indent . '                        </td>
';
                }
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22c45b97855c142c1d932aee3163d6c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesinlearningplan, tool_lp';
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
                
                $buffer .= 'nocompetenciesinlearningplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18faef04eff22c74bc09e1d9ef570fef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencies\', \'tool_lp/planactions\', \'tool_lp/user_competency_workflow\', \'tool_lp/user_competency_plan_popup\'], function(mod, actionsMod, UserCompWorkflow, Popup) {
    var planActions = new actionsMod(\'plan\');

    (new mod({{plan.id}}, \'plan\', {{contextid}}));
    (new Popup(\'[data-region=plan-page]\', \'[data-usercompetency=true]\', {{plan.id}}));
    planActions.registerEvents();

    var ucw = new UserCompWorkflow();
    ucw.enhanceMenubar(\'.user-competency-actions\');
    ucw.on(\'status-changed\', planActions.refresh.bind(planActions, \'[data-region="plan-summary"]\'));
    ucw.on(\'error-occured\', planActions.refresh.bind(planActions, \'[data-region="plan-summary"]\'));
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
                
                $buffer .= $indent . 'require([\'tool_lp/competencies\', \'tool_lp/planactions\', \'tool_lp/user_competency_workflow\', \'tool_lp/user_competency_plan_popup\'], function(mod, actionsMod, UserCompWorkflow, Popup) {
';
                $buffer .= $indent . '    var planActions = new actionsMod(\'plan\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    (new mod(';
                $value = $this->resolveValue($context->findDot('plan.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', \'plan\', ';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '));
';
                $buffer .= $indent . '    (new Popup(\'[data-region=plan-page]\', \'[data-usercompetency=true]\', ';
                $value = $this->resolveValue($context->findDot('plan.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '));
';
                $buffer .= $indent . '    planActions.registerEvents();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var ucw = new UserCompWorkflow();
';
                $buffer .= $indent . '    ucw.enhanceMenubar(\'.user-competency-actions\');
';
                $buffer .= $indent . '    ucw.on(\'status-changed\', planActions.refresh.bind(planActions, \'[data-region="plan-summary"]\'));
';
                $buffer .= $indent . '    ucw.on(\'error-occured\', planActions.refresh.bind(planActions, \'[data-region="plan-summary"]\'));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockA0e75b7e0f57a9c2015bb7a07d7cea7f($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD6682c098be9e9426ef998a5a5d81f4d($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block34ecb99b6aae2767331b27e354e30d39($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentage'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function block7d7b29e4af28232b5b00b862f84c2135($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentageformatted'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }
}
