<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class TropicalFish extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::TROPICALFISH;
	const HEIGHT = 1.0;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(3);
	 $this->setMovementSpeed(1.15);
        parent::initEntity($nbt);
    }	
}
