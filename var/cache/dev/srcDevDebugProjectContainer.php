<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX9fz1wz\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX9fz1wz/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerX9fz1wz.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerX9fz1wz\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerX9fz1wz\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'X9fz1wz',
    'container.build_id' => '99e97945',
    'container.build_time' => 1525536289,
));
