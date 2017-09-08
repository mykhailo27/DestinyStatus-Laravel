<?php

declare(strict_types=1);

namespace Destiny\Milestones;

use Destiny\Activity\ModifierCollection;
use Destiny\Definitions\Manifest\Activity;
use Destiny\Model;

/**
 * Class MilestoneActivity.
 *
 * @property string $activityHash
 * @property array $modifierHashes
 * @property array $variants
 * @property-read Activity $definition
 * @property-read ModifierCollection $modifiers
 */
class MilestoneActivity extends Model
{
    protected $appends = [
    ];

    protected function gDefinition()
    {
        return manifest()->activity((string) $this->activityHash);
    }

    protected function gModifiers()
    {
        return new ModifierCollection($this->modifierHashes ?? []);
    }
}
