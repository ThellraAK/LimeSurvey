<?php

namespace ls\tests;

use PHPUnit\Framework\TestCase;

/**
 * @since 2017-06-13
 * @group tempconf
 * @group template
 */
class TemplateConfigurationTest extends TestBaseClass
{

    /**
     * Issue #12795.
     */
    public function testCopyMinimalTemplate()
    {
        $tempConf = new \TemplateConfiguration();
        $tempConf->template = 'default';
        $tempConf->prepareTemplateRendering('default');
    }
}
