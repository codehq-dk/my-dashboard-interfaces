<?php

namespace CodeHqDk\MyDashboard\Widget\Type;

interface WidgetType
{
    public static function getTypeId(): string;

    public function getName(): string;

    public function getDescription(): string;

    public function getIcon(): string;

    public function requireAuth(): bool;
}