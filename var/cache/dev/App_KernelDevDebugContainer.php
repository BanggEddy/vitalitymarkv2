<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWaivRzI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWaivRzI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWaivRzI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWaivRzI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWaivRzI\App_KernelDevDebugContainer([
    'container.build_hash' => 'WaivRzI',
    'container.build_id' => '4cd63f0e',
    'container.build_time' => 1719244426,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWaivRzI');
