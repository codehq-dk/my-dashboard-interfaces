<?php

namespace CodehqDk\MyDashboard\Interfaces;

use JsonSerializable;

interface WidgetTypeSettings
{
    public static function fromArray(array $data): self;

    // public function jsonSerialize(): array;

    public function getSetupHelperText(): string;
}