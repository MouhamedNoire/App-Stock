<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7PqHvYz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7PqHvYz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7PqHvYz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7PqHvYz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7PqHvYz\App_KernelDevDebugContainer([
    'container.build_hash' => '7PqHvYz',
    'container.build_id' => '3b90fd44',
    'container.build_time' => 1655298233,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7PqHvYz');
