#!/usr/bin/env php
<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

$foo = new \DependabotGitlabTests\PrivatePkg\Foo();
$baz = new \DependabotGitlabTests\PublicPkg\Baz();
