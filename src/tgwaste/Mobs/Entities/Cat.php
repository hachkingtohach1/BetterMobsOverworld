<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Cat extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::CAT;
	const HEIGHT = 1.0;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(10);
	 $this->setMovementSpeed(1.2);
        parent::initEntity($nbt);
    }
}
