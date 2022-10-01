<?php

class __Mustache_cca329558cdf7399f0bf38c48ab1d96c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div style="display: none;" id="cmt-tmpl">';
        $value = $this->resolveValue($context->find('template'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '<div class="mdl-left">
';
        // 'notoggle' inverted section
        $value = $context->find('notoggle');
        if (empty($value)) {
            
            $buffer .= $indent . '        <a href="#" class="comment-link" id="comment-link-';
            $value = $this->resolveValue($context->find('cid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section88f7ba08ccde3b266471a4c0b30c9ce2($context, $indent, $value);
            $buffer .= '<span id="comment-link-text-';
            $value = $this->resolveValue($context->find('cid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">';
            $value = $this->resolveValue($context->find('linktext'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '
';
            // 'displaytotalcount' section
            $value = $context->find('displaytotalcount');
            $buffer .= $this->sectionFfd011f7ca10e68f9b33d0377030c611($context, $indent, $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '        </a>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="comment-ctrl-';
        $value = $this->resolveValue($context->find('cid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="comment-ctrl">
';
        $buffer .= $indent . '        <ul id="comment-list-';
        $value = $this->resolveValue($context->find('cid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="comment-list">
';
        $buffer .= $indent . '            <li class="first"></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <div id="comment-pagination-';
        $value = $this->resolveValue($context->find('cid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="comment-pagination"></div>
';
        $buffer .= $indent . '
';
        // 'canpost' section
        $value = $context->find('canpost');
        $buffer .= $this->sectionDb0210142257c1d238a612f86b8d661d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section1a1df73ad91fb474ce47ad70c0f4f46b($context, $indent, $value);

        return $buffer;
    }

    private function section88f7ba08ccde3b266471a4c0b30c9ce2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{collapsediconkey}}, core, {{linktext}}';
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
                
                $value = $this->resolveValue($context->find('collapsediconkey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', core, ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfd011f7ca10e68f9b33d0377030c611(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    ({{count}})
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
                
                $buffer .= $indent . '                    (';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ')
';
                $buffer .= $indent . '                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD293ba89b4252838742f7f4f7dd94088(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="fullwidth"';
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
                
                $buffer .= 'class="fullwidth"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c7f69cf0f4b63f529270bdb2bcfb4f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'savecomment';
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
                
                $buffer .= 'savecomment';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
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
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e8e30ad5a0e4a5262e961969c9141dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    | <a href="#" id="comment-action-cancel-{{cid}}">{{#str}}cancel{{/str}}</a>
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
                
                $buffer .= $indent . '                    | <a href="#" id="comment-action-cancel-';
                $value = $this->resolveValue($context->find('cid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb0210142257c1d238a612f86b8d661d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="comment-area">
                <div class="db">
                    <textarea name="context" id="dlg-content-{{cid}}" rows="2" {{^fullwidth}}cols="20"{{/fullwidth}}{{#fullwidth}}class="fullwidth"{{/fullwidth}}></textarea>
                </div>
                <div class="fd" id="comment-action-{{cid}}">
                    <a href="#" id="comment-action-post-{{cid}}">{{#str}}savecomment{{/str}}</a>
                    {{#displaycancel}}
                    | <a href="#" id="comment-action-cancel-{{cid}}">{{#str}}cancel{{/str}}</a>
                    {{/displaycancel}}
                </div>
            </div>
            <div class="clearer"></div>
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
                
                $buffer .= $indent . '            <div class="comment-area">
';
                $buffer .= $indent . '                <div class="db">
';
                $buffer .= $indent . '                    <textarea name="context" id="dlg-content-';
                $value = $this->resolveValue($context->find('cid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" rows="2" ';
                // 'fullwidth' inverted section
                $value = $context->find('fullwidth');
                if (empty($value)) {
                    
                    $buffer .= 'cols="20"';
                }
                // 'fullwidth' section
                $value = $context->find('fullwidth');
                $buffer .= $this->sectionD293ba89b4252838742f7f4f7dd94088($context, $indent, $value);
                $buffer .= '></textarea>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="fd" id="comment-action-';
                $value = $this->resolveValue($context->find('cid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="#" id="comment-action-post-';
                $value = $this->resolveValue($context->find('cid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5c7f69cf0f4b63f529270bdb2bcfb4f7($context, $indent, $value);
                $buffer .= '</a>
';
                // 'displaycancel' section
                $value = $context->find('displaycancel');
                $buffer .= $this->section7e8e30ad5a0e4a5262e961969c9141dc($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="clearer"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a1df73ad91fb474ce47ad70c0f4f46b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/str\'], function(Str) {
    // Preloading strings.
    Str.get_strings([
        { key: \'addcomment\', component: \'moodle\' },
        { key: \'comments\', component: \'moodle\' },
        { key: \'commentscount\', component: \'moodle\' },
        { key: \'commentsrequirelogin\', component: \'moodle\' },
        { key: \'deletecommentbyon\', component: \'moodle\' },
    ]).then(function() {
        // Kick off when strings are loaded.
        Y.use(\'core_comment\', function(Y) {
            M.core_comment.init(Y, {
                client_id: \'{{cid}}\',
                commentarea: \'{{commentarea}}\',
                itemid: {{itemid}},
                page: 0,
                courseid: {{courseid}},
                contextid: {{contextid}},
                component: \'{{component}}\',
                notoggle: false, // {{notoggle}} True not supported just yet.
                autostart: false // {{autostart}} True not supported just yet.
            });
        });
    });
})
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
                
                $buffer .= $indent . 'require([\'core/str\'], function(Str) {
';
                $buffer .= $indent . '    // Preloading strings.
';
                $buffer .= $indent . '    Str.get_strings([
';
                $buffer .= $indent . '        { key: \'addcomment\', component: \'moodle\' },
';
                $buffer .= $indent . '        { key: \'comments\', component: \'moodle\' },
';
                $buffer .= $indent . '        { key: \'commentscount\', component: \'moodle\' },
';
                $buffer .= $indent . '        { key: \'commentsrequirelogin\', component: \'moodle\' },
';
                $buffer .= $indent . '        { key: \'deletecommentbyon\', component: \'moodle\' },
';
                $buffer .= $indent . '    ]).then(function() {
';
                $buffer .= $indent . '        // Kick off when strings are loaded.
';
                $buffer .= $indent . '        Y.use(\'core_comment\', function(Y) {
';
                $buffer .= $indent . '            M.core_comment.init(Y, {
';
                $buffer .= $indent . '                client_id: \'';
                $value = $this->resolveValue($context->find('cid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\',
';
                $buffer .= $indent . '                commentarea: \'';
                $value = $this->resolveValue($context->find('commentarea'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\',
';
                $buffer .= $indent . '                itemid: ';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '                page: 0,
';
                $buffer .= $indent . '                courseid: ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '                contextid: ';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '                component: \'';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\',
';
                $buffer .= $indent . '                notoggle: false, // ';
                $value = $this->resolveValue($context->find('notoggle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' True not supported just yet.
';
                $buffer .= $indent . '                autostart: false // ';
                $value = $this->resolveValue($context->find('autostart'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' True not supported just yet.
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '})
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
