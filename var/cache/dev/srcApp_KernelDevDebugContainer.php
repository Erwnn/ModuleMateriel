<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1Zf7Tad\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1Zf7Tad/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1Zf7Tad.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1Zf7Tad\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container1Zf7Tad\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '1Zf7Tad',
    'container.build_id' => '491e7762',
    'container.build_time' => 1609000268,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1Zf7Tad');
