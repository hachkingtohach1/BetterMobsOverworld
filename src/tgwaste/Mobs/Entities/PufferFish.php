<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class PufferFish extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::PUFFERFISH;
	const HEIGHT = 1.0;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(3);
	 $this->setMovementSpeed(1);
        parent::initEntity($nbt);
    }	
}
