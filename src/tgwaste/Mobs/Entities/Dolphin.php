<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Dolphin extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::DOLPHIN;
	const HEIGHT = 1.0;

    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(14);
	 $this->setMovementSpeed(1.4);
        //i don't know if it's correct or not
        parent::initEntity($nbt);
    }
}
