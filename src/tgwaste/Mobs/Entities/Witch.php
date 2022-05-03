<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\entity\Living;
use function mt_rand;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIds;
use pocketmine\data\bedrock\EntityLegacyIds;

class Witch extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::WITCH;
	const HEIGHT = 1.95;
	
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(26);
	 $this->setMovementSpeed(1.15);
        parent::initEntity($nbt);
    }

    public function getDrops(): array{
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 5 + mt_rand(1, 3);
    }
}
