<?php

namespace SONSample\Entity;

use SONBase\Test\TestCase;
use SONSample\Entity\Sample;
use Zend\ServiceManager\ServiceManager;

class SampleTest extends TestCase {

    protected $module = "SONSample";

    public function testVerificaSeTestsEstaoFuncionando() {
        $this->assertTrue(true);

        $sample = new Sample;
        $sample->setNome("Wesley");

        $this->getEm()->persist($sample);
        $this->getEm()->flush();

        $this->assertEquals(1, $sample->getId());

        $sample = new Sample;
        $sample->setNome("Wesley 2");

        $this->getEm()->persist($sample);
        $this->getEm()->flush();

        $this->assertEquals(2, $sample->getId());
    }
}
