<?php

uses(Tests\CustomTestCase\CustomTestCase::class)->in('*.php');

test('closure was bound to CustomTestCase', function () {
    $this->assertCustomTrue();
});
