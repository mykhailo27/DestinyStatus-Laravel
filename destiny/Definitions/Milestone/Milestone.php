<?php

namespace Destiny\Definitions\Milestone;

use Destiny\Definitions\Common\DisplayProperties;
use Destiny\Definitions\Definition;

/**
 * Class Milestone
 * @package Destiny\Definitions\Milestone
 * @property DisplayProperties $displayProperties
 * @property string $image
 * @property int $milestoneType (DestinyMilestoneType)
 * @property bool $recruitable
 * @property string $friendlyName
 * @property bool $showInExplorer
 * @property bool $hasPredictableDates
 * @property array $quests (@todo - https://bungie-net.github.io/multi/schema_Destiny-Definitions-Milestones-DestinyMilestoneQuestDefinition.html#schema_Destiny-Definitions-Milestones-DestinyMilestoneQuestDefinition)
 * @property array $rewards (@todo - https://bungie-net.github.io/multi/schema_Destiny-Definitions-Milestones-DestinyMilestoneRewardCategoryDefinition.html#schema_Destiny-Definitions-Milestones-DestinyMilestoneRewardCategoryDefinition)
 * @property array $vendors (@todo - https://bungie-net.github.io/multi/schema_Destiny-Definitions-Milestones-DestinyMilestoneVendorDefinition.html#schema_Destiny-Definitions-Milestones-DestinyMilestoneVendorDefinition)
 * @property array $values (Value)
 * @property bool $isInGameMilestone
 * @property string $hash
 * @property int $index
 * @property bool $redacted
 *
 */
class Milestone extends Definition
{
    protected $appends = [
        'displayProperties'
    ];
}