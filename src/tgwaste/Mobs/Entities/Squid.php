<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Squid extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::SQUID;
	const HEIGHT = 0.8;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(10);
	 $this->setMovementSpeed(1);
        parent::initEntity($nbt);
    }	
}
 