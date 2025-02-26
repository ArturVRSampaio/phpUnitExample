<?php

namespace app;

class TestClass
{
    private int $a;

    public function getA(): int
    {
        return $this->a;
    }

    public function setA(int $a): void
    {
        $this->a = $a;
    }
}
