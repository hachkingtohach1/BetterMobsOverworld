<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\entity\Living;
use pocketmine\player\Player;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\nbt\tag\CompoundTag;
class Bee extends MobsEntity
{
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(14);
	 $this->setMovementSpeed(1);
        parent::initEntity($nbt);
    }
	protected function getInitialSizeInfo() : EntitySizeInfo
	{
		return new EntitySizeInfo(0.6, 0.6);
	}
	
	public static function getNetworkTypeId() : string
	{
		return EntityIds::BEE;
	}
	

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}