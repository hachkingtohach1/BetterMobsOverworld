<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Bat extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::BAT;
	const HEIGHT = 0.9;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(6);
        $this->setMovementSpeed(1.15);
        parent::initEntity($nbt);
    }
}
