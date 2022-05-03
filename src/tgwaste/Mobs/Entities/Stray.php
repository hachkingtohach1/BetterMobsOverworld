<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Stray extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::STRAY;
	const HEIGHT = 1.99;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(20);
	 $this->setMovementSpeed(1.15);
        parent::initEntity($nbt);
    }	
}
