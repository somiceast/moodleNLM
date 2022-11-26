<?php

class __Mustache_26d002c6164c3864831ec13b66d528a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mod_questionnaire_completepage generalbox">
';
        $buffer .= $indent . '    ';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('respondentinfo'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->sectionAaa5291545729f0942794c517afc1698($context, $indent, $value);
        $value = $this->resolveValue($context->find('printblank'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'subtitle' section
        $value = $context->find('subtitle');
        $buffer .= $this->sectionF5d74b8dc1d9b802e6ee8d25df350487($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'progressbar' section
        $value = $context->find('progressbar');
        $buffer .= $this->section2a8d236a87fc0a797805a3ee3577dfdc($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'addinfo' section
        $value = $context->find('addinfo');
        $buffer .= $this->section787ca1e2a356c7cd4ae6fbad4a1e3aab($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'message' section
        $value = $context->find('message');
        $buffer .= $this->section036a5d05bc4a59835bab8f29cf029823($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'continue' section
        $value = $context->find('continue');
        $buffer .= $this->section035760b35196b8ab5f09070eae95dbe3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="generalbox">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('formstart'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'questions' section
        $value = $context->find('questions');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'pageinfo' section
        $value = $context->find('pageinfo');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div class="notice" style="padding: 0.5em 0 0.5em 0.2em;">
';
        $buffer .= $indent . '            <div class="buttons">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('controlbuttons'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('formend'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaa5291545729f0942794c517afc1698(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="surveyTitle">{{.}}</h3>';
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
                
                $buffer .= '<h3 class="surveyTitle">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5d74b8dc1d9b802e6ee8d25df350487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="surveySubTitle">{{.}}</h4>';
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
                
                $buffer .= '<h4 class="surveySubTitle">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a8d236a87fc0a797805a3ee3577dfdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="progressbar">{{{.}}}</div>';
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
                
                $buffer .= '<div class="progressbar">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section787ca1e2a356c7cd4ae6fbad4a1e3aab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="addInfo">{{{.}}}</div>';
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
                
                $buffer .= '<div class="addInfo">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section036a5d05bc4a59835bab8f29cf029823(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="message">{{{.}}}</div>';
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
                
                $buffer .= '<div class="message">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section035760b35196b8ab5f09070eae95dbe3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{continue}}}';
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
                
                $value = $this->resolveValue($context->find('continue'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
