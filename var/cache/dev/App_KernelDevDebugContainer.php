<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZfiS6Mp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZfiS6Mp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZfiS6Mp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZfiS6Mp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZfiS6Mp\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZfiS6Mp',
    'container.build_id' => 'ca4c51e8',
    'container.build_time' => 1744875330,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZfiS6Mp');
