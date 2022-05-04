<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\entity\Living;
use pocketmine\event\entity\{
    EntityDamageByEntityEvent, EntityDamageEvent
};
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;
use pocketmine\nbt\tag\{
    IntTag
};
use pocketmine\player\Player;
use function mt_rand;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\item\VanillaItems;
use pocketmine\data\bedrock\EntityLegacyIds;

class Rabbit extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::RABBIT;
	const HEIGHT = 0.5;
	
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(3);
	 $this->setMovementSpeed(0.8);
        parent::initEntity($nbt);
    }

    public function getDrops(): array{
        $lootingL = 1;
        $cause = $this->lastDamageCause;
        if($cause instanceof EntityDamageByEntityEvent){
            $damager = $cause->getDamager();
            if($damager instanceof Player){
            
                // $looting = $damager->getInventory()->getItemInHand()->getEnchantment(Enchantment::LOOTING);
                // if($looting !== null){
                    // $lootingL = $looting->getLevel();
                // }else{
                    $lootingL = 1;
                // }
            }
        }
        $drops = [VanillaItems::RABBIT_HIDE()->setCount(mt_rand(0, 1 * $lootingL))];
        if(mt_rand(1, 200) <= (5 + 2 * $lootingL)){
            $drops[] = VanillaItems::RABBIT_FOOT()->setCount(1 * $lootingL);
        }

        return $drops;
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}
